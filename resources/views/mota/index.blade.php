<h3>Motas</h3>
@foreach($motas as $mota)
<li>
 	<a href="{{route('motas.show',['id'=>$mota->id_mota])}}">
 		{{$mota->marca}}
 		{{$mota->modelo}}
 		{{$mota->cilindrada}}

 	</a>
</li>

@endforeach