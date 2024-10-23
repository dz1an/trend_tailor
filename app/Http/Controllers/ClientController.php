<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //account page
    public function Myaccount(){
        return view('Client.Templates.my_account');
    }

    // address page
    public function Address(){
        return view('Client.Templates.adress');
    }
  // bag page
  public function Bag(){
    return view('Client.Templates.bag');
}

  // cost page
  public function cost(){
    return view('Client.Templates.cost');
}

  // customization page
  public function customization(){
    return view('Client.Templates.customization');
}
  // Orderplacement page
  public function Orderplacement(){
    return view('Client.Templates.order_placement');
}
  // preview page
  public function preview(){
    return view('Client.Templates.preview');
}
}
