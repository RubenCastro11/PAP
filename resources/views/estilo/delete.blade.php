@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<div class="col-md-12">
<h2>Confirme se deseja eliminar o estilo: </h2>

<h2> {{$estilo->nome}}</h2>
<div class="row">
	<div class="col-md-12">
<form method="post" action="{{route('estilos.destroy',['id_estilo'=>$estilo->id_estilo])}}">
@csrf
@method('delete')
<br>
<input type="submit" value="Enviar" class="btn btn-primary">
</form>   
</div></div>
</div> 
@endsection