<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tage;

class tageController extends Controller
{
    //
    public function NewTage(){
        $newTage=new Tage();
        $newTage->name = "laravel";
       
        $newTage->save();

    }
    public function listTage(){
  
       $tages = Tage::all();
    //    dd($contacts); show 

   return view('tages', ['tages'=>$tages]);
        
    }
}
