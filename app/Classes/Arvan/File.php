<?php


namespace App\Classes\Arvan;


class File extends Arvan
{

    public function get($channel_id = null)
    {
        if ($channel_id != null) {
            $channel_id = '/' . $channel_id . "/files";
        }
        $response = $this->client->get('channels' . $channel_id, [
            'debug' => false,
            'headers' => $this->header
        ]);

        return $response;
    }



    public function create($channel_id,$file)
    {
        $url = "channels/" . $channel_id . "/files";

        $response = $this->client->post($url, [
            'debug' => false,
            'headers' => array_merge($this->header,[
                'tus-resumable' => '1.0.0',
                'upload-length' => '0',
                'upload-metadata' => $file
            ])
        ]);

        return $response;

    }
    public function upload($channel_id,$file_id)
    {
        $url = "channels/" . $channel_id . "/files/".$file_id;

        $response = $this->client->patch($url, [
            'debug' => false,
            'form_params' => ['file'=>url('mp4.mp4')],
            'headers' => array_merge($this->header,[
                'tus-resumable' => '1.0.0',
                'upload-length' => '0',
                'upload-metadata' => 'filename dmlkZW8ubXA0,filetype dmlkZW8vbXA0'
            ])
        ]);

        return $response;
    }

}
