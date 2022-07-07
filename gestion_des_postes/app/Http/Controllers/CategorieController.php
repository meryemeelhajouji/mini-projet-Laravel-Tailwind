<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    //
    // public function NewCategorie(){
    //     $newCategorie=new Categorie();
    //     $newCategorie->name = "politique";
       
    //     $newCategorie->save();

    // }
    public function listCategorie(){
  
       $categories = Categorie::all();
    //    dd($contacts); show 

//    return view('AddPoste', ['categories'=>$categorie]);
//    return view('AddPoste', compact('categories'));
        
    }
}
