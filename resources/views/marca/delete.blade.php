<h2> Deseja eliminar a marca </h2>
<h2>{{$marca->nome}}</h2>
<form method="post" action="{{route('marcas.destroy',['id_marca'=>$marca->id_marca])}}">
@csrf
@method('delete')
<input type="submit" value="enviar">
</form>    