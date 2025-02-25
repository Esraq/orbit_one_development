<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Baneer;

class SiteController extends Controller
{
    public function home(){

        $banners=Baneer::orderBy('serial_no','asc')->get();

        view()->share('banners', $banners);
        return view('home');
    }
    public function about(){

        return view('about');
    }
    public function services(){


        return view('services');
    }

    public function portfolio(){


        return view('portfolio');
    }
    public function contact(){


        return view('contact');
    }

}
