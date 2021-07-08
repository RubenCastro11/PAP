@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<div class="col-md-12">
<h2>Confirme se deseja eliminar a mota: </h2>

<h2>{{$mota->modelo}}</h2>
<div class="row">
	<div class="col-md-12">
<form method="post" action="{{route('motas.destroy',['id_mota'=>$mota->id_mota])}}">
@csrf
@method('delete')
<br>
    <input type="submit" value="Enviar" class="btn btn-primary">
</form>
</div></div>
</div>
@endsection