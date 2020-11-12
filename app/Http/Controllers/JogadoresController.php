<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogador;
class JogadoresController extends Controller
{
  public function index(){
      $jogadores=Jogador::paginate(2);
      
      return view('jogadores.index',[
          'jogadores'=>$jogadores
      ]);
  }
    
    public function show(Request $request){
          $idJogador=$request->id;
       $jogador=Jogador::where('id_jogador',$idJogador)->with('equipa')->first();
        return view('jogadores.show',[
            'jogador'=>$jogador
        ]);   
    }
    
    
}
