<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    //
    public function NewCategorie(){
        $newContact=new Categorie();
        $newContact->name = "politique";
       
        $newContact->save();

    }
    public function listContact(){
  
       $contacts = Categorie::all();
    //    dd($contacts); show 

   return view('contacts', ['contacts'=>$contacts]);
        
    }
}
