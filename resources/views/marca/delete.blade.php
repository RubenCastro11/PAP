@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<div class="col-md-12">
<h2>Confirme se deseja a marca: </h2>

<h2>{{$marca->nome}}</h2>
<div class="row">
	<div class="col-md-12">
<form method="post" action="{{route('marcas.destroy',['id_marca'=>$marca->id_marca])}}">
@csrf
@method('delete')
<br>
<input type="submit" value="Enviar" class="btn btn-primary">
</form>   
</div></div>
</div> 
@endsection