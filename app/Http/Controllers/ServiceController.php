<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services=Service::paginate(1);
        
        view()->share('services', $services);
        
        return view('service_list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service');
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
  
  $service=new Service;

  $service->name=$request->get('name');
  $service->details=$request->get('details');

  


  $service->image=$name;
  $service->save();

  return redirect()->route('service.index')->with('success', 'Service created successfully!');

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
        $service =Service::find($id);
        return view('service_edit',compact('service','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
                
            'name'=>'required|min:1',
            'details' => 'required|min:1',

            'image' => 'required|min:1',


             




        ]);







        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }


        $form_data = array(
            'name'       =>   $request->name,
            'details'        =>  $request->details,
            

            'image'     =>   $image_name
        );

        Service::whereId($id)->update($form_data);

        ///echo "updated";

        return redirect()->route('service.index')->with('success', 'Banner updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = \App\Models\Service::find($id);
        $service->delete();
        return redirect()->route('service.index')->with('success', 'Service deleted successfully!');
    }
}
