<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Env;

class IndexController extends Controller
{
    public function index(Request $request){
        $request= $request->all();
        $user = env("SUBSCRIBER_STATUS");
        return  $user;
    }

}

