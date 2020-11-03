<?php
namespace App;

use App\Model\Channel;
use App\Model\Chat;
use App\Model\Document;
use App\Model\Live;
use App\Model\Role;
use App\Model\UserInfo;
use App\Model\Video;
use App\Model\View;
use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;


use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Model implements AuthenticatableContract, AuthorizableContract, JWTSubject
{
    use Authenticatable, Authorizable;

    protected $fillable = [
        'fname', 'lname', 'mobile', 'sms_code', 'image_path', 'email_verified_at', 'username', 'email', 'password', 'my_password', 'login_count', 'referrer_id', 'type','is_active','can_play','can_chat'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','my_password','sms_code'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }



    public function videos()
    {
        return $this->hasMany(Video::class);
    }


    public function views()
    {
        return $this->hasMany(View::class);
    }

    public function referrer()
    {
        return $this->hasOne(User::class);
    }

    public function live()
    {
        return $this->hasOne(Live::class);
    }

    public function channel()
    {
        return $this->hasOne(Channel::class);
    }

    public function lives()
    {
        return $this->hasMany(Live::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
    public function chats()
    {
        return $this->hasMany(Chat::class,'sender_id','id');
    }

    public function chat()
    {
        return $this->hasOne(Chat::class,'sender_id','id');
    }

    public function user_info()
    {
        return $this->hasOne(UserInfo::class,'user_id','id');
    }
    public function  getThumbnailAttribute($value){



        return url('')."/".$value;
    }



    public function getCreatedAtAttribute($value)
    {
        if (!$value) {
            return $value;
        }
        return Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans();
    }

    public function getLastLoginDateHumanAttribute($value)
    {
        if (!$value) {
            return $value;
        }
        return Carbon::createFromFormat('Y-m-d H:i:s', $value)->diffForHumans();
    }



    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
