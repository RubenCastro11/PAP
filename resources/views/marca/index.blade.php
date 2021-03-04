<h3>Marcas</h3>
@foreach($marcas as $marca)
<li>
<a href="{{route('marcas.show',['id'=>$marca->id_marca])}}">
    {{$marca->nome}}
</a> 
</li>
@endforeach
<br>
<a href="{{route('marcas.create')}}">Adicionar Marca</a>
