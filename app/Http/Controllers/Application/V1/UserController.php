<?php

namespace App\Http\Controllers\Application\V1;

use App\Http\Requests\Api\AppChangeMobileRequest;
use App\Http\Requests\Api\AppChangePasswordRequest;
use App\Http\Requests\Api\AppLoginRequest;
use App\Http\Requests\Api\AppRegisterRequest;
use App\Http\Requests\Api\AppRequestEmailCodeRequest;
use App\Http\Requests\Api\AppRequestMobileCodeRequest;
use App\Http\Requests\Api\AppRequestRegisterCodeRequest;
use App\Http\Requests\ChangeEmailRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RequestEmailCodelRequest;
use App\Model\Category;
use App\Model\Channel;
use App\Model\UserInfo;
use App\Model\Video;
use App\Model\View;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{

    public function test_ab()
    {
//        sendEmailMessage("persian402@gmail.com", ["code" => "D-" . "222", "fullname" => "ali" . " " . "alli"], "mails.recovery_code");

//      Video::paginate(12);
        $user_id = 11;

        $profile = Cache::remember("APPLICATION_PROFILE_12" . $user_id, 600, function () use ($user_id) {

            return User::where('id', $user_id)->with('user_info')->first();
        });
        return response()->json($profile);
    }

    public function request_code_change_email(RequestEmailCodelRequest $request)
    {

        return $this->request_code($request, "email");

    }

    public function request_code_change_mobile(AppRequestMobileCodeRequest $request)
    {
        return $this->request_code($request, "sms");

    }

    public function request_code_register(AppRequestRegisterCodeRequest $request)
    {


        $sms_code = rand(1000, 9999);
        sendTextMessage($request->mobile, "D-" . $sms_code);
        return response()->json(["status" => 200, "code" => base64_encode($sms_code), "message" => "کد   به " . $request->mobile . " ارسال شد"]);


    }

    public function request_code_recover_password(Request $request)
    {
        $user = User::where("mobile", $request->mobile)->first(["sms_code"]);
        if ($user) {
            sendTextMessage($request->mobile, "D-" . $user->sms_code);
            return response()->json(["status" => 200, "message" => "کد بازیابی به " . $request->mobile . " ارسال شد"]);

        }
        return response()->json(["status" => 0, "message" => "هیج کاربری با این شماره یافت نشد"]);

    }


    private function makeUserInfo($user_id)
    {
        try {
            $ip = getUserIP();
            $json = file_get_contents("https://ipinfo.io/" . $ip . "/geo?token=9fad707803d92e");
            $json = json_decode($json);
            $loc = explode(',', $json->loc);
            UserInfo::updateOrCreate(['user_id' => $user_id], [
                'user_id' => $user_id,
                'country' => $json->country,
                'regionName' => $json->region,
                'city' => $json->city,
                'lat' => $loc[0],
                'lon' => $loc[1],
                'ip' => $ip,
                'os' => getOS(),
                'browser' => getBrowser(),

            ]);

        } catch (\Exception $e) {

        }

    }

    public function register(Request $request)
    {

        $user = User::create(
            [
                'fname' => $request->fname,
                'lname' => $request->lname,
                'email' => "guest_" . rand(1000000, 99999999) . "@gmail.com",
                'mobile' => $request->mobile,
                'sms_code' => rand(1000, 9999),
                'referrer_id' => 0,
                'my_password' => 0,
                'username' => "guest_" . rand(1000000, 99999999),
                'password' => Hash::make($request->password),
            ]
        );

        $this->makeUserInfo($user->id);
        Channel::create([
            'user_id' => $user->id,
            'server_id' => 1,
            'stream_key' => "li_" . makeCryptString($user->id) . "_" . generateRandomString(16),
            'stream_pass' => "" . generateRandomString(16),
            'title' => "12",
            'address' => generateRandomString(10),
            'image_path' => '1',
            'level' => '1',
            'email' => $user->email,
            'private_link' => '1',
            'bio' => ' در مورد کار خود چیزی بنویسید',
        ]);
        Category::create(
            [
                'user_id' => $user->id,
                'title' => "بدون مجموعه",
                'row' => 0,
                'type' => 0,
            ]
        );
        $credentials = $request->only(['mobile', 'password']);
        if (!$token = JWTAuth::attempt($credentials)) {
//            return User::first();
            // if the credentials are wrong we send an unauthorized error in json format
            return response()->json(['status' => 0, 'message' => "register un success", 'error' => 'errorrrr'], 200);
        }
        return $this->respondWithToken($token);
    }

    public function recover_password(Request $request)
    {
//        $modify = User::where('mobile', $request->mobile)
//            ->where("sms_code", $request->sms_code)
//            ->update(['sms_code' => rand(1000, 9999)]);

        $user = User::where('mobile', $request->mobile)
            ->where("sms_code", $request->sms_code)
            ->first();
        if ($user) {
            $token = Auth::login($user);
            $this->makeUserInfo($user->id);


            return $this->respondWithToken($token);


        }
        return response()->json(["status" => 0, "message" => "کد وارد شده صحیح نیست."], 200);

    }

    private
    function request_code($request, $send_by = "sms")
    {
        $user_id = getUserIdByToken($request);

        $user = User::where("id", $user_id)->first(["sms_code", "fname", "lname"]);
        if ($user) {

            if ($send_by == "sms") {
                $receiver = $request->mobile;
                sendTextMessage($receiver, "D-" . $user->sms_code);
            } else {
                $receiver = $request->email;
                sendEmailMessage($receiver, ["code" => "D-" . $user->sms_code, "fullname" => $user->fname . " " . $user->lname], "mails.recovery_code");

            }

            return response()->json(["status" => 200, "message" => "کد به " . $receiver . " ارسال شد"]);
        }
        return response()->json(["status" => 0, "message" => "خطا"]);

    }

    public
    function change_mobile(AppChangeMobileRequest $request)
    {
        $user_id = getUserIdByToken($request);

        $modify = User::where('id', $user_id)->where("sms_code", $request->sms_code)->update(['mobile' => $request->mobile]);
        if ($modify) {
            return response()->json(["status" => 200, "message" => "  موبایل شما با موفقیت تغییر یافت"]);

        }
        return response()->json(["status" => 0, "message" => "خطا"]);

    }

    public
    function change_email(ChangeEmailRequest $request)
    {
        $user_id = getUserIdByToken($request);

        $modify = User::where('id', $user_id)->where("sms_code", $request->sms_code)->update(['email' => $request->email]);
        if ($modify) {
            return response()->json(["status" => 200, "message" => "  ایمیل شما با موفقیت تغییر یافت"]);

        }
        return response()->json(["status" => 0, "message" => "خطا"]);

    }


    public
    function change_password(ChangePasswordRequest $request)
    {

        try {
            $user_id = getUserIdByToken($request);
            $user = User::where('id', $user_id)->first(["id", "password"]);
            if ($user) {
                if (Hash::check($request->old_password, $user->password) || $user->password == "") {
                    User::where('id', $user->id)->update(['password' => Hash::make($request->new_password)]);
                    return response()->json(["status" => 200, "message" => "رمز عبور شما با موفقیت تغییر یافت"]);

                }
                return response()->json(["status" => 0, "message" => "رمز عبور فعلی شما صحیح نیست"]);

            }
//            return response()->json(["status" => 200, "message" => "رمز عبور شما با موفقیت تغییر یافت"]);

            return response()->json(["status" => 0, "message" => "خطا"]);
        } catch (\Exception $exception) {
            return response()->json(["status" => 0, "message" => $exception->getMessage()]);

        }


    }

    public
    function profile(Request $request)
    {

        $user_id = getUserIdByToken($request);

        $profile = Cache::remember("APPLICATION_PROFILE_" . $user_id, 600, function () use ($user_id) {

            return User::where('id', $user_id)->with('user_info')->first();
        });
        return response()->json($profile);
    }

    public
    function modify_profile(Request $request)
    {

        try {
            $user_id = getUserIdByToken($request);

            $modify = User::where('id', $user_id)->update([
                "fname" => $request->fname,
                "lname" => $request->lname,

            ]);
            if ($modify) {
                UserInfo::where("user_id", $user_id)->update([
                    "regionName" => $request->province,
                    "city" => $request->city,
                ]);
                $profile = User::with('user_info')->find($user_id);

                Cache::delete("APPLICATION_PROFILE_" . $user_id);
                return response()->json(["status" => 200, "message" => "پروفایل شما با موفقیت ویرایش شد", "data" => $profile]);

            }
            return response()->json(["status" => 0, "message" => "خطا"]);

        } catch (\Exception $exception) {
            return response()->json(["status" => 0, "message" => $exception->getMessage()]);

        }
    }

    public function login(LoginRequest $request)
    {

//        sendTextMessage("09126145705","12345");
        $credentials = $request->only(['mobile', 'password']);


        if (!$token = JWTAuth::attempt($credentials)) {
//            return User::first();
            // if the credentials are wrong we send an unauthorized error in json format
            return response()->json(['status' => 0, 'message' => "نام کاربری یا رمز ورود صحیح نمی باشد", 'error' => 'خطا در ورود به برنامه'], 200);
        }
        $user_id = Auth::user()->id;
        $this->makeUserInfo($user_id);

        return $this->respondWithToken($token);

    }


    public
    function logout()
    {
        JWTAuth::invalidate();
        return response()->json(['status' => true, 'message' => "خروج از حساب کاربری با موفقیت انجام شد"], 200);

    }

    public
    function home(Request $request)
    {

        $user_id = getUserByToken('id');
        return response()->json(
            [
                'member_count' => User::where('referrer_id', $user_id)->count(),
                'live_count' => Video::where('user_id', $user_id)->count(),
                'vod_count' => Video::where('user_id', $user_id)->count(),
            ]
        );
    }


}
