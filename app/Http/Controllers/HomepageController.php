<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //sign in page
    public function SigInPage(){
        return view('Homepage.signin');
    }
public function Homepage(){
    return view('Homepage.landingpage');
}

}
