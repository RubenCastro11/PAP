<h3> Publicidades </h3>
Id Publicidade: {{$publicidade->id_publicidade}}<br>
Id Mota: {{$publicidade->id_mota}}<br>
Designação: {{$publicidade->designacao}}<br>


@if(isset($publicidade->fotografia))
<img src="{{asset('imagens/publicidade/'.$publicidade->fotografia)}}">
@endif

<br>
<a href="{{route('publicidades.index')}}">Voltar</a>
