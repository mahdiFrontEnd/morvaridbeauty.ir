<?php


namespace App\Classes\Arvan;


class Video extends Arvan
{

    public function get($channel_id, $video_id = null)
    {

        $url = "channels/" . $channel_id . "/videos";
//        if ($video_id != null) {
//            $url = 'videos/' . $video_id;
//        }
        $response = $this->client->get($url, [
            'debug' => false,
            'headers' => $this->header
        ]);

        return $response;
    }

    public function create($channel_id, $myBody = [])
    {
        $this->myBody = $myBody;
        $url = "channels/" . $channel_id . "/videos";

        $response = $this->client->post($url, [
            'debug' => false,
            'body' => json_encode($this->myBody),
            'headers' => $this->header
        ]);

        return $response;
    }
}
