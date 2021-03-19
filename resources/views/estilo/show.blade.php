<h3>Estilo</h3>
Id: {{$estilos->id_estilo}}<br>
Nome: {{$estilos->nome}}<br>
<br>
<a href="{{route('estilos.index')}}">Voltar</a>

<a href="{{route('estilos.edit', ['id_estilo'=>$estilos->id_estilo])}}" class="btn btn-primary"> Editar 

<a href="{{route('estilos.delete', ['id_estilo'=>$estilos->id_estilo])}}" class="btn btn-primary"> Eliminar

</a>

