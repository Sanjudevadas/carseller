<?php

namespace App\Http\Controllers;
//use App\Models\Car;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{

  
    public function index(){
  $cars= Car::get();
  dump($cars);
         return view ('index');
    }
}
