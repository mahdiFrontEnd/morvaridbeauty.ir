<?php


namespace App\Classes\Arvan;


use GuzzleHttp\Client;

abstract  class Arvan
{
    public $api_key = 'Apikey d0e0b919-577f-41da-967c-f4e9823d7d52';
    public $base_url = 'https://napi.arvancloud.com/vod/2.0/';
    public $client;
    public $header;
    public $myBody = [];

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

    public static function channels()
    {
        return new Channel();
    }
    public static function files()
    {
        return new File();
    }
    public static function videos()
    {
        return new Video();
    }
    public static function profiles()
    {
        return new Profile();
    }

}
