<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipa; 
class EquipasController extends Controller
{
   public function index(){
       $equipas=Equipa::all();
       
       return view('equipas.index',[
           'equipas'=>$equipas
       ]);
   } 
    
    
    public function show(Request $request){
        $idEquipa=$request->id;
        $equipa=Equipa::where('id_equipa',$idEquipa)->with('jogador')->first();
        return view('equipas.show',[
            'equipa'=>$equipa
        ]);
    }
    
    
    
    
    
    
    
    
    
    
    
    
}
