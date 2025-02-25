<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Baneer;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners=Baneer::orderBy('serial_no','asc')->get();
        
        view()->share('banners', $banners);

        return view('banner-list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('banner_creation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

             $validatedData = $request->validate([
                
                'name'=>'required|min:1',
                'details' => 'required|min:1',
    
                 'photo'=>'required|min:1'




            ]);




             if($request->hasfile('photo'))
      {
          $file = $request->file('photo');
          $name=time().$file->getClientOriginalName();
          $file->move(public_path().'/images/', $name);
      }

      $content=new Content;

      $banner->serial_no=$request->get('serial_no');
      $banner->title=$request->get('title');

      $banner->slogan=$request->get('slogan');


      $banner->image=$name;
      $banner->save();

      return redirect()->route('banner.index')->with('success', 'Banner created successfully!');

       

      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner =Baneer::find($id);
        return view('banner_edit',compact('banner','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
                
            'serial_no'=>'required|min:1',
            'title' => 'required|min:1',

            'slogan' => 'required|min:1',


             




        ]);







        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }


        $form_data = array(
            'serial_no'       =>   $request->serial_no,
            'title'        =>  $request->title,
            'slogan'  =>   $request->slogan,

            'image'     =>   $image_name
        );

        Baneer::whereId($id)->update($form_data);

        ///echo "updated";

        return redirect()->route('banner.index')->with('success', 'Banner updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = \App\Models\Baneer::find($id);
        $banner->delete();
        return redirect()->route('banner.index')->with('success', 'Banner deleted successfully!');
    }
}
