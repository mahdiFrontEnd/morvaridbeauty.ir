<?php


namespace App\Classes;


use GuzzleHttp\Client;

class Arvan
{
    private $api_key = 'Apikey d0e0b919-577f-41da-967c-f4e9823d7d52';
    private $base_url = 'https://napi.arvancloud.com/vod/2.0/';
    private $client;
    private $header;
    private $myBody=[];

    public function __construct()
    {
        $this->header = [
            'Authorization' => $this->api_key,
            'Accept-Language' => 'en',
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
        $client = new Client([
            'base_uri' => $this->base_url,
        ]);
        $this->client = $client;
    }

    public function getChannel()
    {
        $response = $this->client->get('channels', [
            'debug' => false,
            'form_params' => [],
            'headers' => $this->header
        ]);

        return $response;
    }

    public function createChannel($title)
    {
         $this->myBody['title'] = $title;
         $this->myBody['description'] = $title;
         $this->myBody['secure_link_enabled'] = false;
         $this->myBody['secure_link_key'] = 'test';
        $response = $this->client->post('channels', [
            'debug' => false,
            'body' => json_encode($this->myBody),
            'headers' => $this->header
        ]);

        return $response;
    }

}
