<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function contact_us(){
        return view('front.contact');
    }

    public function excellence(){
        return view('front.excellence');
    }

    public function excellences($slung){
        $Service = DB::table('services')->where('slung',$slung)->get();
        return view('front.excellences', compact('Service'));
    }


}
