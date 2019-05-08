<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function home(){
        return view("welcome");
    }

    public function work(){
        return view("user.work");
    }
    public function about(){
        return view("user.about");
    }
    
    public function contact(){
        return view("user.contact");
    }
}
