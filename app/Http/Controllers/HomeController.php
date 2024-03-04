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
        $title = " PR And Communication Services ";
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

    public function services($slung){

        $Service = DB::table('cores')->where('slung',$slung)->get();
        foreach ($Service as $key => $value) {
            $title = $value->title;
            # code...
            return view('front.services', compact('Service','title'));
        }
    }


    public function articles(){
        $Blog = DB::table('blogs')->get();
        $title = "Our Blog";
        return view('front.articles', compact('title','Blog'));
    }

    public function article($slung){

        $Blog = DB::table('blogs')->where('slung',$slung)->get();
        foreach ($Blog as $key => $value) {
            $title = $value->title;
            # code...
            return view('front.article', compact('Blog','title'));
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
