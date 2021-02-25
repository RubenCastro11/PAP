<h3>Marcas</h3>
@foreach($marca as $marcas)
<li>
<a href="{{route('marcas.show',['id'=>$marca->id_marca])}}">
    {{$marca->nome}}
</a> 
</li>
@endforeach

