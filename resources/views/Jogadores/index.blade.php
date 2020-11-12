@foreach($jogadores as $jogador)
<h3>
     <a href="{{route('jogadores.show',['id'=>$jogador->id_jogador])}}">
         {{$jogador->nome}}
    </a></h3>   
@endforeach