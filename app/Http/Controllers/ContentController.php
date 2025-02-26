<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Content;



class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents=Content::paginate(20);
        
        view()->share('contents', $contents);

        return view('content_list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                
            
            'title' => 'required|min:1',

            'slogan' => 'required|min:1',


             'description'=>'required|min:1'




        ]);
       
        $content=new Content;

        
        $content->title=$request->get('title');
  
        $content->slogan=$request->get('slogan');
        
        $content->description=$request->get('description');
  
        
        $content->save();

       
  
        return redirect()->route('content.index')->with('success', 'Content created successfully!');











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
        $content =Content::find($id);
        return view('content_edit',compact('content','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
                
            
            'title' => 'required|min:1',

            'slogan' => 'required|min:1',


             'description'=>'required|min:1'




        ]);


        $form_data = array(
           
            'title'        =>  $request->title,
            'slogan'  =>   $request->slogan,
            'description'  =>   $request->description,
            
        );

        Content::whereId($id)->update($form_data);

        return redirect()->route('content.index')->with('success', 'Content created successfully!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
