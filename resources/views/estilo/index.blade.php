<h3>Estilos</h3>
@foreach($estilos as $estilo)
<li>
<a href="{{route('estilos.show',['id_estilo'=>$estilo->id_estilo])}}">
    {{$estilo->nome}}
</a> 
</li>
@endforeach
<br>
<a href="{{route('estilos.create')}}">Adicionar Estilo</a>

    
    
    
    
    