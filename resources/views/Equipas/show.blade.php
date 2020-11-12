ID: {{$equipa->id_equipa}}<br>
Desiganacao: {{$equipa->designacao}}<br>
Desiganacao curta: {{$equipa->designacao_curta}}<br>
Localidade: {{$equipa->localidade}}<br>
Jogadores:
@foreach($equipa->jogador as $player)
{{$player->nome}}<br>
@endforeach

 


