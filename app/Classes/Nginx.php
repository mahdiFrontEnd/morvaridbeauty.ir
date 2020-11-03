<?php


namespace App\Classes;


use Illuminate\Support\Facades\Cache;

class Nginx
{
    private $url = "http://171.22.27.227/json_stat";
    private $content, $xml, $json, $array, $application, $application_name;

    public function __construct($application_name = null)
    {

        try {
            $this->content = file_get_contents($this->url, true);
            $this->xml = simplexml_load_string($this->content);
            $this->json = json_encode($this->xml);
            $this->array = json_decode($this->json, TRUE);
            $this->application = $this->array['server'];
            $this->application_name = $application_name;
        } catch (\Exception $e) {
        }

    }


    public function get()
    {
        return $this->array;
    }

    public function setApplicationName($name)
    {
        $this->application_name = $name;
        return $this;
    }

    public function getClientCount($application_name = null)
    {
        if ($application_name != null) {
            $this->application_name = $application_name;

        }
        $data = $this->getApplications($this->application_name);
        $count = 0;
        if (isset($data)) {
            foreach ($data as $datum) {
                $count += $datum['live']['nclients'];
            }
        }


        return $count;
    }


    public function getLiveStreamStatus($application_name = null, $stream_key = null)
    {

        try {
            $status = Cache::remember($stream_key . "status1", 5, function () use ($stream_key) {
                return (preg_match('/' . $stream_key . '/', $this->content)) ? 1 : 0;
            });

            if (!$status) {
                $status = (preg_match('/' . $stream_key . '/', $this->content)) ? 1 : 0;
                return $status;
            }
            return $status;
        } catch (\Exception $exception) {

//         file_put_contents(public_path('nginx.txt'),$exception->getMessage());
            return 0;

        }
//        if (preg_match('/'.$stream_key.'/', $this->content)) {
//           return 1;
//        }
//        else{
//            return 0;
//        }
//        if ($application_name != null) {
//            $this->application_name = $application_name;
//
//        }
//
//        $data = $this->getApplications($this->application_name);
//
//        if ((isset($data[0]['live']['stream']))) {
//            foreach ($data as $datum) {
//                if ($datum['live']['stream']['name'] == $stream_key) {
//                    return 1;
//                }
//            }
//
//        }
//
//        return 0;
    }

    public function getLiveStream($application_name = null)
    {
        if ($application_name != null) {
            $this->application_name = $application_name;

        }
        $data = [];

        $data = $this->getApplications($this->application_name);
        $stream = [];
        foreach ($data as $datum) {
            $stream = (isset($data[0]['live']['stream'])) ? $datum['live']['stream'] : [];
        }
        if (isset($stream['name'])) {
            return [$stream];

        }
        return $stream;

    }

    public
    function getApplications($application_name = null)
    {
        if ($application_name == null) {
            return $this->application;

        }
//        return $this->application;

        $data = [];
        $application_name = (gettype($application_name) == 'string') ? array($application_name) : $application_name;
        foreach ($this->application['application'] as $application) {
            if (in_array($application['name'], $application_name)) {
                $data[] = $application;
            }
        }
//        if (sizeof($application_name) == 1) {
//            return $data[0];
//
//        }
        return $data;


    }


}
