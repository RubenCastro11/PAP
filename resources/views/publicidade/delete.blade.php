<h2>Deseja eliminar a publicidade</h2>
<h2>{{$publicidade->designacao}}</h2>
<form method="post" action="{{route('publicidades.destroy')}}">
@csrf
@method('delete')
<input type="hidden" name="id_publicidade" value="{{$publicidade->id_publicidade}}">
    <input type="submit" value="enviar">
</form>