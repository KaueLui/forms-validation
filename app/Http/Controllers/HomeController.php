<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createUser');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
                'name' => 'bail|required|alpha|between:5,12',
                'password' => 'required|min:5|numeric|different:12345',
                'email' => 'required|string|regex:/^.+@.+$/i|unique:users|',
                'year' => 'max:5|nullable|starts_with:2|ends_with:0,1,2,3,4,5',
                'date' => 'date|before:tomorrow|after:01/01/1990',
                'programmer' => 'boolean|accepted|filled'
            ], [
                'name.required' => 'Name is required',
                'password.required' => 'Password is required'
            ]);
  
        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData);
      
        return back()->with('success', 'User created successfully.');
    }
}