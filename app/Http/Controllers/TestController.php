<?php

namespace App\Http\Controllers;

use App\Events\PrivateWebsocket;
use App\Events\testWebsocket;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test(){
        event(new testWebsocket);
    }

    public function private(){
        event(new PrivateWebsocket);
    }
}
