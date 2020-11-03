<?php


namespace App\Classes\ParsPack;


use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class ParsPack
{

    private static $LOGIN_URL = 'panel/manage/login';
    private static $Content_Id_URL = 'panel/content/video';


    private $client;
    private $login = [];
    private $api_key;
    private $content_id;
    private $file_id;
    private $username = "v121548";
    private $password = "6%Yvideo121548";
    private $base_uri = 'https://video121548.parspack.net/api/v2/';

    public function __construct($username = null, $password = null, $base_uri = null)
    {
        $client = new Client([
            'base_uri' => $this->base_uri,
        ]);
        $this->client = $client;
        if ($username != null) {
            $this->username = $username;
        }
        if ($username != null) {
            $this->password = $password;
        }
        if ($username != null) {
            $this->base_uri = $base_uri;
        }
    }

    public static function instance()
    {
        return new ParsPack();
    }

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function setBaseUrl($base_url)
    {
        $this->base_uri = $base_url;
        return $this;
    }

    public function login()
    {
        $login = Cache::remember("getApiKey", 60, function () {
            $response = $this->client->post(self::$LOGIN_URL, [
                'debug' => false,
                'form_params' => ['username' => $this->username, 'password' => $this->password],
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ]
            ]);
            return json_decode($response->getBody()->getContents(), true);
        });

        $this->login = $login;
        return $this;
    }

    public function getApiKey()
    {
        if ($this->login == []) {
            $this->login();
        }
        if ($this->login['status'] == 'success') {
            $this->api_key = $this->login['data']['apikey'];
        }
        return $this->api_key;
    }


    public function getContentId($body = ['name' => "name1", "language_id" => 3, "cp_id" => 3])
    {

        try {
            $response2 = $this->client->put(self::$Content_Id_URL, [

                'debug' => false,
                'form_params' => $body,
                'headers' => [
                    'Authorization' => $this->getApiKey(),
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ]
            ]);
            $array2 = json_decode($response2->getBody()->getContents(), true); // :'(
            if ($array2['status'] == 'success') {
                $this->content_id = $array2['data']['content_id'];
            }
            return $this->content_id;

        } catch (\Exception $exception) {

        }
        return rand(11111111, 9999999999);

    }


    public function getTranscodeStatus($content_id, $file_id)
    {

        return 100;
        $url = 'panel/content/' . $content_id . '/file/main/' . $file_id . '/url';
        $response2 = Cache::remember("getTranscodeStatus" . $content_id . "_" . $file_id, 5, function () use ($url) {
            $response2 = $this->client->get($url, [
                'debug' => false,
                'headers' => [
                    'Authorization' => $this->getApiKey(),
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ]
            ]);
            return json_decode($response2->getBody()->getContents(), true); // :'(
        });


        if ($response2['status'] == 'exists') {
            $percent = 100;
        } else {
            $percent = $this->getTranscodePercentByMessage($response2['data']['job']['message']);
        }

        return $percent;


    }

    private function getTranscodePercentByMessage($message)
    {

        $percent = 0;

        switch ($message) {

            case "transferring uploaded files to the transcoder server":
                $percent = 10;
                break;

            case "uploaded files cleanup":
                $percent = 25;
                break;

            case "extracting media file's duration":
                $percent = 35;
                break;
            case "converting media file into HLS format":
                $percent = 50;
                break;
            case "OCDN syncing":
                $percent = 75;
                break;
            case "success callback":
                $percent = 90;
                break;

        }
        return $percent;
    }
//"extracting media file's duration"
//"converting media file into HLS format"
// "OCDN syncing"
//"success callback"
    // converting media file into HLS format%
}
