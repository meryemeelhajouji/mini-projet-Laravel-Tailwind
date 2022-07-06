<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    //
    public function NewCategorie(){
        $newCategorie=new Categorie();
        $newCategorie->name = "politique";
       
        $newCategorie->save();

    }
    public function listCategorie(){
  
       $categorie = Categorie::all();
    //    dd($contacts); show 

   return view('categorie', ['categorie'=>$categorie]);
        
    }
}
