@extends ('layout')
@extends ('layout2')
@section('conteudo')
<div class="col-md-12">
<h3> Publicidades </h3>
<br>
<br>
<table class='table table-dark table-hover'>
	<tbody>
		<tr>
			<td>Id Publicidade:</td>
			<td>{{$publicidade->id_publicidade}}</td>
		</tr>
		<tr>
			<td>Id Mota:</td>
			<td>{{$publicidade->id_mota}}</td>
		</tr>
		<tr>
			<td>Designação:</td>
			<td>{{$publicidade->designacao}}</td>
		</tr>

		</tr>
	</tbody>
</table>



@if(isset($publicidade->fotografia))
<div class='container'>
<img src="{{asset('imagens/publicidade/'.$publicidade->fotografia)}}"style="width: 50%; text-align:center"/>
</div>
@endif

<br>
<br>
 <div class="row">
<div class="col-md-4">
<a href="{{route('publicidades.index')}}"class="btn btn-primary">Voltar</a> 
</div>

<div class="col-md-6">
</div>

<div class="col-md-1">
<a href="{{route('publicidades.edit', ['id_publicidade'=>$publicidade->id_publicidade])}}" class="btn btn-primary"> Editar </a>
</div>

<div class="text-right col-md-1">
<a href="{{route('publicidades.delete', ['id_publicidade'=>$publicidade->id_publicidade])}}" class="btn btn-primary"> Eliminar </a>
</div>

</div>
</div>
@endsection