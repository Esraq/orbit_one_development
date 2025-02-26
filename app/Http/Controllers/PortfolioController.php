<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios=Portfolio::orderBy('id','asc')->get();
        
        view()->share('portfolios', $portfolios);

        return view('portfolio-list');
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_portfolio');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                
            'name'=>'required|min:1',
            'category' => 'required|min:1',

             'photo'=>'required|min:1'




        ]);


        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        
        $portfolio=new Portfolio;
  
        $portfolio->name=$request->get('name');
        $portfolio->category=$request->get('category');
  
        $portfolio->image=$name;
        $portfolio->save();

        ///echo "Done";
        
        return redirect('portfolios')->with('success', 'Portfolio created successfully!');
  
         
  










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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = \App\Models\Portfolio::find($id);
        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted successfully!');
    }
}
