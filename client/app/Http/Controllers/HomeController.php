<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Staring To Staticly Code
    public function index()
    {
        // Declaring  varibles for u to use
        $username = "Yigdo";
        $role = "user";
        /*
        You can add more varibles if you need.
        I added some basic varibles for start.
        */

        return view("home", []);
    }
}
