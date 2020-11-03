<?php


namespace App\Classes\Arvan;


class Channel extends Arvan
{


    public function get($channel_id = null)
    {
        if ($channel_id!=null) {
            $channel_id = '/' . $channel_id;
        }
        $response = $this->client->get('channels' . $channel_id, [
            'debug' => false,
            'headers' => $this->header
        ]);

        return $response;
    }


    public function update($channel_id,$title,$description,$secure_link_enabled=false,$secure_link_key='test')
    {
        $this->myBody['title'] = $title;
        $this->myBody['description'] = $description;
        $this->myBody['secure_link_enabled'] = $secure_link_enabled;
        $this->myBody['secure_link_key'] = $secure_link_key;

        $response = $this->client->patch('channels/' . $channel_id, [
            'debug' => false,
            'body' => json_encode($this->myBody),
            'headers' => $this->header
        ]);

        return $response;
    }

    public function delete($channel_id)
    {
        $response = $this->client->delete('channels/' . $channel_id, [
            'debug' => false,
            'headers' => $this->header
        ]);

        return $response;
    }

    public function create($title,$description,$secure_link_enabled=false,$secure_link_key='test')
    {
        $this->myBody['title'] = $title;
        $this->myBody['description'] = $description;
        $this->myBody['secure_link_enabled'] = $secure_link_enabled;
        $this->myBody['secure_link_key'] = $secure_link_key;
        $response = $this->client->post('channels', [
            'debug' => false,
            'body' => json_encode($this->myBody),
            'headers' => $this->header
        ]);

        return $response;
    }

}
