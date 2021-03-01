<h3>Publicidades</h3>
@foreach($publicidade as $publicidades)
<li>
 	<a href="{{route('publicidades.show',['id'=>$publicidades->id_publicidade])}}">
 		{{$publicidades->id_publicidade}}
 	</a>
</li>

@endforeach
<br>
<a href="{{route('publicidades.create')}}">Adicionar Publicidade</a>