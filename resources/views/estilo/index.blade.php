<h3>Estilos</h3>
@foreach($estilos as $estilo)
<li>
<a href="[[route('estilos.show',['id'=>$estilo->id_estilo])]]">
    {{$estilo->nome}}
</a> 
</li>
@endforeach


    
    
    
    
    