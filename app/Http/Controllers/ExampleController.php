<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{

 public function create(Request $request)
  {
   return view('register');
  }

public function store(Request $request)
{

    if ($request->has("username"))
    {
        $fullname = $request->input('fullname');
        $username = $request->input('username');
        $email = $request->input('email');
        $contact = $request->input('contact');
        $password = $request->input('password');
        $path = $request->file('profile');
        $path->storeAs('public/images' , 'abc.jpeg');
        $path = '/images/abc.jpeg';
        return view('dashboard', compact('fullname', 'username', 'email', 'contact', 'password', 'path'));
    }

}

}
