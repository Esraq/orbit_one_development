<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Baneer;

use App\Models\Content;

use App\Models\Service;

use App\Models\Portfolio;


class SiteController extends Controller
{
    public function home(){

        $banners=Baneer::orderBy('serial_no','asc')->get();
        $services=Service::orderBy('id','asc')->get();
        $email=Content::where('id',4)->first();
        $about_us=Content::where('id',1)->first();
        $choose=Content::where('id',2)->first();
        $phone=Content::where('id',5)->first();
        $happy_client=Content::where('id',3)->first();
        $fb=Content::where('id',6)->first();
        $ld=Content::where('id',7)->first();
        $insta=Content::where('id',8)->first();
        $customer_service=Content::where('id',11)->first();
        $twitter=Content::where('id',9)->first();
        $completed_project=Content::where('id',10)->first();
        $employees=Content::where('id',12)->first();
        view()->share('banners', $banners);
        view()->share('happy_client', $happy_client);
        view()->share('email',$email);
        view()->share('employees',$employees);
        view()->share('choose',$choose);
        view()->share('customer_service',$customer_service);
        view()->share('phone',$phone);
        view()->share('fb',$fb);
        view()->share('ld',$ld);
        view()->share('services',$services);
        view()->share('completed_project',$completed_project);
        view()->share('about_us',$about_us);
        view()->share('twitter',$twitter);
        view()->share('insta',$insta);
        return view('home');
    }
    public function about(){


        $banners=Baneer::orderBy('serial_no','asc')->get();
        $mission=Content::where('id',13)->first();
        $aim=Content::where('id',14)->first();
        $services=Service::orderBy('id','asc')->get();
        $email=Content::where('id',4)->first();
        $about_us=Content::where('id',1)->first();
        $choose=Content::where('id',2)->first();
        $phone=Content::where('id',5)->first();
        $happy_client=Content::where('id',3)->first();
        $fb=Content::where('id',6)->first();
        $ld=Content::where('id',7)->first();
        $insta=Content::where('id',8)->first();
        $customer_service=Content::where('id',11)->first();
        $twitter=Content::where('id',9)->first();
        $completed_project=Content::where('id',10)->first();
        $employees=Content::where('id',12)->first();
        $exclusive=Content::where('id',15)->first();
        
        view()->share('banners', $banners);
        view()->share('exclusive', $exclusive);
        view()->share('mission', $mission);
        view()->share('happy_client', $happy_client);
        view()->share('email',$email);
        view()->share('employees',$employees);
        view()->share('choose',$choose);
        view()->share('aim',$aim);
        view()->share('customer_service',$customer_service);
        view()->share('phone',$phone);
        view()->share('fb',$fb);
        view()->share('ld',$ld);
        view()->share('services',$services);
        view()->share('completed_project',$completed_project);
        view()->share('about_us',$about_us);
        view()->share('twitter',$twitter);
        view()->share('insta',$insta);









        return view('about');
    }
    public function services(){
        $banners=Baneer::orderBy('serial_no','asc')->get();
        $services=Service::orderBy('id','asc')->get();
        $email=Content::where('id',4)->first();
        $about_us=Content::where('id',1)->first();
        $choose=Content::where('id',2)->first();
        $phone=Content::where('id',5)->first();
        $happy_client=Content::where('id',3)->first();
        $fb=Content::where('id',6)->first();
        $ld=Content::where('id',7)->first();
        $insta=Content::where('id',8)->first();
        $customer_service=Content::where('id',11)->first();
        $twitter=Content::where('id',9)->first();
        $completed_project=Content::where('id',10)->first();
        $employees=Content::where('id',12)->first();
        view()->share('banners', $banners);
        view()->share('happy_client', $happy_client);
        view()->share('email',$email);
        view()->share('employees',$employees);
        view()->share('choose',$choose);
        view()->share('customer_service',$customer_service);
        view()->share('phone',$phone);
        view()->share('fb',$fb);
        view()->share('ld',$ld);
        view()->share('services',$services);
        view()->share('completed_project',$completed_project);
        view()->share('about_us',$about_us);
        view()->share('twitter',$twitter);
        view()->share('insta',$insta);

        return view('services');
    }

    public function portfolio(){
        $banners=Baneer::orderBy('serial_no','asc')->get();
        $services=Service::orderBy('id','asc')->get();
        $items=Content::where('id',16)->first();
        $portfolios=Portfolio::orderBy('id','asc')->get();
        $email=Content::where('id',4)->first();
        $about_us=Content::where('id',1)->first();
        $choose=Content::where('id',2)->first();
        $phone=Content::where('id',5)->first();
        $happy_client=Content::where('id',3)->first();
        $fb=Content::where('id',6)->first();
        $ld=Content::where('id',7)->first();
        $insta=Content::where('id',8)->first();
        $customer_service=Content::where('id',11)->first();
        $twitter=Content::where('id',9)->first();
        $completed_project=Content::where('id',10)->first();
        $employees=Content::where('id',12)->first();
        view()->share('banners', $banners);
        view()->share('portfolios', $portfolios);
        view()->share('happy_client', $happy_client);
        view()->share('email',$email);
        view()->share('employees',$employees);
        view()->share('choose',$choose);
        view()->share('customer_service',$customer_service);
        view()->share('phone',$phone);
        view()->share('items',$items);
        view()->share('fb',$fb);
        view()->share('ld',$ld);
        view()->share('services',$services);
        view()->share('completed_project',$completed_project);
        view()->share('about_us',$about_us);
        view()->share('twitter',$twitter);
        view()->share('insta',$insta);

        return view('portfolio');

        /// echo $portfolios;

    }
    public function contact(){
         

        $banners=Baneer::orderBy('serial_no','asc')->get();
        $services=Service::orderBy('id','asc')->get();
        $email=Content::where('id',4)->first();
        $about_us=Content::where('id',1)->first();
        $choose=Content::where('id',2)->first();
        $phone=Content::where('id',5)->first();
        $happy_client=Content::where('id',3)->first();
        $fb=Content::where('id',6)->first();
        $ld=Content::where('id',7)->first();
        $insta=Content::where('id',8)->first();
        $customer_service=Content::where('id',11)->first();
        $twitter=Content::where('id',9)->first();
        $completed_project=Content::where('id',10)->first();
        $employees=Content::where('id',12)->first();
        $items=Content::where('id',16)->first();
        view()->share('banners', $banners);
        view()->share('happy_client', $happy_client);
        view()->share('email',$email);
        view()->share('employees',$employees);
        view()->share('choose',$choose);
        view()->share('customer_service',$customer_service);
        view()->share('phone',$phone);
        view()->share('fb',$fb);
        view()->share('ld',$ld);
        view()->share('services',$services);
        view()->share('completed_project',$completed_project);
        view()->share('about_us',$about_us);
        view()->share('twitter',$twitter);
        view()->share('items',$items);
        view()->share('insta',$insta);

        return view('contact');
    }

    public function service_details($id){

      $projects=Service::where('id',$id)->first();
      $banners=Baneer::orderBy('serial_no','asc')->get();
      $services=Service::orderBy('id','asc')->get();
      $email=Content::where('id',4)->first();
      $about_us=Content::where('id',1)->first();
      $choose=Content::where('id',2)->first();
      $phone=Content::where('id',5)->first();
      $happy_client=Content::where('id',3)->first();
      $fb=Content::where('id',6)->first();
      $ld=Content::where('id',7)->first();
      $insta=Content::where('id',8)->first();
      $customer_service=Content::where('id',11)->first();
      $twitter=Content::where('id',9)->first();
      $completed_project=Content::where('id',10)->first();
      $employees=Content::where('id',12)->first();
      view()->share('banners', $banners);
      view()->share('happy_client', $happy_client);
      view()->share('email',$email);
      view()->share('employees',$employees);
      view()->share('choose',$choose);
      view()->share('customer_service',$customer_service);
      view()->share('phone',$phone);
      view()->share('fb',$fb);
      view()->share('ld',$ld);
      view()->share('services',$services);
      view()->share('completed_project',$completed_project);
      view()->share('about_us',$about_us);
      view()->share('twitter',$twitter);
      view()->share('insta',$insta);

      view()->share('projects',$projects);

      return view('project_details');

     
      

    }

}
