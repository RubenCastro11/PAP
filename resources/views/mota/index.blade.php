<h3>Motas</h3>
@foreach($motas as $mota)
<li>
 	<a href="{{route('motas.show',['id'=>$mota->id_mota])}}">
 		{{$mota->marca->nome}}
 		{{$mota->modelo}}
 		{{$mota->cilindrada}}

 	</a>
</li>


@endforeach
<br>
<a href="{{route('motas.create')}}">Adicionar Mota</a>