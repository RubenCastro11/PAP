@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<div class="col-md-12">
<h2>Deseja eliminar a publicidade</h2>

<h2>{{$publicidade->designacao}}</h2>
<div class="row">
	<div class="col-md-12">
<form method="post" action="{{route('publicidades.destroy')}}">
@csrf
@method('delete')
<input type="hidden" name="id_publicidade" value="{{$publicidade->id_publicidade}}">
    <input type="submit" value="Enviar" class="btn btn-primary">
</form>
</div></div>
</div>
@endsection