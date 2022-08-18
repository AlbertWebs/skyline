<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function company(){
        return view('front.company');
    }

    public function why(){
        return view('front.why');
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


    public function privacy(){
        return view('front.privacy');
    }

    public function terms(){
        return view('front.terms');
    }

    public function copyright(){
        return view('front.copyright');
    }

}
