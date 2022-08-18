<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(){
        $title = "Skyline PR - Public Relations Firm In Kenya | Digital Marketing";
        return view('front.index', compact('title'));
    }

    public function company(){
        $title = "About Skyline PR";
        return view('front.company', compact('title'));
    }

    public function why(){
        $title = "Why PR";
        return view('front.why', compact('title'));
    }
    
    public function contact_us(){
        $title = "Contact Us";
        return view('front.contact', compact('title'));
    }

    public function excellence(){
        $title = "Center of Excellence";
        return view('front.excellence', compact('title'));
    }

    public function excellences($slung){
        
        $Service = DB::table('services')->where('slung',$slung)->get();
        foreach ($Service as $key => $value) {
            $title = $value->title;
            # code...
            return view('front.excellences', compact('Service','title'));
        }
    }


    public function privacy(){
        $title = "Privacy Policy";
        return view('front.privacy', compact('title'));
    }

    public function terms(){
        $title = "Terms and Conditions";
        return view('front.terms', compact('title'));
    }

    public function copyright(){
        $title = "Copyright Statement";
        return view('front.copyright', compact('title'));
    }

}
