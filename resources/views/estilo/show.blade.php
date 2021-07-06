@extends ('layout')
@extends ('layout2')
@section('conteudo')
<div class="col-md-12">
<h3>Estilo</h3>
<br>
<br>
<table class='table table-dark table-hover'>
	<tbody>
		<tr>
			<td>Id:</td>
			<td>{{$estilos->id_estilo}}</td>
		</tr>
		<tr>
			<td>Nome:</td>
			<td>{{$estilos->nome}}</td>
		</tr>
		</tr>
	</tbody>
</table>



<br>
 <div class="row">
<div class="col-md-4">
<a href="{{route('estilos.index')}}"class="btn btn-primary">Voltar</a>
</div>

<div class="col-md-6">
</div>

<div class="col-md-1">
<a href="{{route('estilos.edit', ['id_estilo'=>$estilos->id_estilo])}}" class="btn btn-primary"> Editar </a>
</div>

<div class="text-right col-md-1">
<a href="{{route('estilos.delete', ['id_estilo'=>$estilos->id_estilo])}}" class="btn btn-primary"> Eliminar</a>
</div>

</div>
</div>
@endsection

