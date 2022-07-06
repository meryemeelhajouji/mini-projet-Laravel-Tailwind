<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poste;
class PosteController extends Controller
{
    //
    public function NewPoste(){
        $newPoste=new Poste();
        $newPoste->title = "Learn Laravel 9";
        $newPoste->slug = "learn_laravel_9";
        $newPoste->description = "My first projet laravel";
        $newPoste->image = "sdhfklerkf^ps^dofoz";
        $newPoste->publish = "oui";
        $newPoste->status = "oui";
        $newPoste->categorie_id = 1;
        $newPoste->users_id = 1;


       
        $newPoste->save();

    }
    public function listPoste(){
  
       $Poste = Poste::all();
    //    dd($Poste); show 

   return view('ListPostes', ['Poste'=>$Poste]);
        
    }
}
