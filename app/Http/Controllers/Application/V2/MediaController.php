<?php

namespace App\Http\Controllers\Application\V2;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{

    public function medias()
    {
        $data=User::paginate(12);
        return $this->getRespond(200,"OK",$data);
    }

    public function media($media_is)
    {
        $data=User::first();
        return $this->getRespond(200,"OK",$data);
    }

}
