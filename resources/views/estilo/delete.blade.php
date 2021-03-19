<h2> Deseja eliminar o estilo </h2>
<h2>{{$estilo->nome}}</h2>
<form method="post" action="{{route('estilos.destroy',['id_estilo'=>$estilo->id_estilo])}}">
@csrf
@method('delete')
<input type="submit" value="enviar">
</form>    