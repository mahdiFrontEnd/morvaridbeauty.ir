<?php


namespace App\Classes;


use Com\Wowza\Entities\Application\Helpers\Settings;

class Wowza
{
    private $setup;

    public function __construct()
    {


        $setup = new Settings();
        $setup->setHost("http://185.8.174.23:8087/v2");
        $setup->setUsername("livenegah");
        $setup->setPassword("5014397");
        $this->setup = $setup;
    }

    public   function getSetup()
    {
        return $this->setup;
    }

}
