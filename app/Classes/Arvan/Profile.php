<?php


namespace App\Classes\Arvan;


class Profile extends Arvan
{
    public function get($channel_id)
    {

        $url = "channels/" . $channel_id . "/profiles";
//        if ($video_id != null) {
//            $url = 'videos/' . $video_id;
//        }
        $response = $this->client->get($url, [
            'debug' => false,
            'headers' => $this->header
        ]);

        return $response;
    }
}
