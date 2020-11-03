<?php


abstract class Httpp
{

    public $base_url,
        $uri,
        $username,
        $password,
        $headers = [],
        $form_params = [],
        $body = [],
        $debug = false;

    public function __construct()
    {
        $this->base_url = "";
        $this->username = "";
        $this->password = "";
    }

    public static function make()
    {
        return new make();
    }


}

class make extends Httpp
{
    public function login($username, $password)
    {
        $this->username = $username;
        $this->password = $password;

        return $this;
    }

    public function post($uri = "", $body)
    {
        $this->uri = $uri;

        return $this;

    }
}
