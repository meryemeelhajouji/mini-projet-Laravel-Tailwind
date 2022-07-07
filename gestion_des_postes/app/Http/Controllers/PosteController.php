<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Tage;
use Illuminate\Http\Request;
use App\Models\Poste;
class PosteController extends Controller
{
    //
   
     public function createPosteForm(Request $request) {
        $categorie = Categorie::all();
        $tages = Tage::all();
             return view('AddPoste', ['categories'=>$categorie] , ['tages'=>$tages]);
   

     }
    
     

    public function NewPoste(Request $request){
  
        $newPoste=new Poste();
        $newPoste->title =$request->input('title'); 
        $newPoste->slug =$request->input('slug');
        $newPoste->categorie_id = $request->input('categorie_id');
        $newPoste->users_id =1;
        $newPoste->description = $request->input('description');
        $newPoste->image = $request->input('image');
        $newPoste->publish = 1;
        $newPoste->status = $request->input('status');
        $newPoste->status = $request->input('status');
      

        $newPoste->save();

    }
    public function listPoste(){
  
       $Poste = Poste::all();
    //    dd($Poste); show 

   return view('ListPostes', ['Poste'=>$Poste]);
        
    }
}
