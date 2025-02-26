<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::orderBy('id','asc')->get();
        
        view()->share('users', $users);

        return view('user-list');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                
            'name'=>'required|min:1',
            'email' => 'required|min:1',

            'password'=>'required|min:1'




        ]);


        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
  
       
      return redirect()->route('admin.index')->with('success', 'Admin created successfully!');
       
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
        $user = \App\Models\User::find($id);
        $user->delete();
        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully!');
    }
}
