<?php

use App\Classes\Wowza;


use Carbon\Carbon;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Tymon\JWTAuth\Facades\JWTAuth;


function getUserIdViaStreamKey($stream_key)
{
    $array = explode('_', $stream_key);
    $user_id = makeCryptString($array[1], 'd');

    return $user_id;
}




function convert_to_digit($string, $to_langoage = 'farsi')
{
    $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];

    $num = range(0, 9);
    if ($to_langoage == 'farsi')
        return $convertedPersianNums = str_replace($num, $persian, $string);
    else

        return $englishNumbersOnly = str_replace($persian, $num, $string);

}

function makeCryptString($string, $action = 'e')
{
    // you may change these values to your own
    $secret_key = 'my_simple_secret_key';
    $secret_iv = 'my_simple_secret_iv';

    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash('sha256', $secret_key);
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if ($action == 'e') {
        $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
    } else if ($action == 'd') {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}

function sendTextMessage($mobile, $message)
{

    $job = new \App\Jobs\SendTextMessage($mobile, $message);
    dispatch($job->delay(Carbon::now()->addSeconds(1)));

}

function sendEmailMessage($to_email,$data = [],$view="mails.contact-us")
{
    try {


        Mail::send($view, $data, function ($message) use ($to_email) {
            $message->to($to_email, 'info@livenegah.com')
                ->subject('پشتیبانی لایونگاه');
            $message->from('info@livenegah.com', '[LIVENEGAH.COM]');
        });

    } catch (Exception $exception) {
        file_put_contents("mail11.txt", $exception->getMessage());
    }
}






function getIP()
{

    $tmp = getenv("HTTP_CLIENT_IP");

    if ($tmp && !strcasecmp($tmp, "unknown"))
        return $tmp;

    $tmp = getenv("HTTP_X_FORWARDED_FOR");
    if ($tmp && !strcasecmp($tmp, "unknown"))
        return $tmp;


    $tmp = getenv("REMOTE_ADDR");
    return $tmp;


}

function getUserIP()
{
    $userIP = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $userIP = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $userIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $userIP = $_SERVER['HTTP_X_FORWARDED'];
    } elseif (isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) {
        $userIP = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $userIP = $_SERVER['HTTP_FORWARDED_FOR'];
    } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
        $userIP = $_SERVER['HTTP_FORWARDED'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $userIP = $_SERVER['REMOTE_ADDR'];
    } else {
        $userIP = 'UNKNOWN';
    }
    return $userIP;
}

function getOS()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];


    $os_platform = "Unknown OS Platform";

    $os_array = array(
        '/windows nt 10/i' => 'Windows 10',
        '/windows nt 6.3/i' => 'Windows 8.1',
        '/windows nt 6.2/i' => 'Windows 8',
        '/windows nt 6.1/i' => 'Windows 7',
        '/windows nt 6.0/i' => 'Windows Vista',
        '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
        '/windows nt 5.1/i' => 'Windows XP',
        '/windows xp/i' => 'Windows XP',
        '/windows nt 5.0/i' => 'Windows 2000',
        '/windows me/i' => 'Windows ME',
        '/win98/i' => 'Windows 98',
        '/win95/i' => 'Windows 95',
        '/win16/i' => 'Windows 3.11',
        '/macintosh|mac os x/i' => 'Mac OS X',
        '/mac_powerpc/i' => 'Mac OS 9',
        '/linux/i' => 'Linux',
        '/ubuntu/i' => 'Ubuntu',
        '/iphone/i' => 'iPhone',
        '/ipod/i' => 'iPod',
        '/ipad/i' => 'iPad',
        '/android/i' => 'Android',
        '/blackberry/i' => 'BlackBerry',
        '/webos/i' => 'Mobile'
    );

    foreach ($os_array as $regex => $value) {

        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }

    }

    return $os_platform;

}

function getBrowser()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];


    $browser = "Unknown Browser";

    $browser_array = array(
        '/msie/i' => 'Internet Explorer',
        '/firefox/i' => 'Firefox',
        '/safari/i' => 'Safari',
        '/chrome/i' => 'Chrome',
        '/edge/i' => 'Edge',
        '/opera/i' => 'Opera',
        '/netscape/i' => 'Netscape',
        '/maxthon/i' => 'Maxthon',
        '/konqueror/i' => 'Konqueror',
        '/mobile/i' => 'Handheld Browser'
    );

    foreach ($browser_array as $regex => $value) {

        if (preg_match($regex, $user_agent)) {
            $browser = $value;
        }

    }

    return $browser;

}

function generateRandomString($length = 10, $special = false)
{

//    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    if ($special) {
        $characters .= "@";
    }
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function getUserIdByToken($request)
{
    try {
        $user = \Illuminate\Support\Facades\Auth::user();

        return $user['id'];
    } catch (Exception $e) {

    }
}

function getUserByToken($request, $fields = null)
{
    try {
        $user = JWTAuth::toUser($request->header('authorization'));

        if ($fields == null) {
            return $user;

        }
        if (gettype($fields) == 'string') {
            $fields = explode(',', $fields);
        }
        foreach ($fields as $field) {
            $users[$field] = $user[$field];
        }
        return $users;

    } catch (Exception $exception) {
        return false;
    }


}



function checkUserLogin($guard = 'user')
{

    return (\Illuminate\Support\Facades\Auth::guard($guard)->check()) ? true : false;
}

function getUser($key = null, $guard = 'user')
{

return 1;
    if (\Illuminate\Support\Facades\Auth::guard($guard)->check()->check()) {
        if (!$key) {
            return \Illuminate\Support\Facades\Auth::guard($guard)->user();
        }
        return \Illuminate\Support\Facades\Auth::guard($guard)->user()[$key];
    }
    // guest user id
    return 1000000;
}

function getRandomString($length = 16)
{
    $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
}

function getFolderSize($dir = 0)
{
    if ($dir == 0) {
        $dir = public_path('my-files/files/' . getUser('id'));
    }
    $file_size = 0;

    if (is_dir($dir)) {


        foreach (File::allFiles($dir) as $file) {
            $file_size += $file->getSize();
        }
        return number_format($file_size / 1048576, 2);
    }
    return 0;
}
