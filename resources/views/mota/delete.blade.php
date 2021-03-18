<h2>Deseja eliminar a mota</h2>
<h2>{{$mota->marca}}</h2>
<h2>{{$mota->modelo}}</h2>
<form method="post" action="{{route('motas.destroy',['id_mota'=>$mota->id_mota])}}">
@csrf
@method('delete')
    <input type="submit" value="enviar">
</form>