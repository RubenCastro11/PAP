@extends ('layout')
@extends ('layout2')
@section('conteudo')
<div class="col-md-12">
<h3>Marca</h3>
<br>
<br>
<table class='table table-dark table-hover'>
	<tbody>
		<tr>
			<td>Nome:</td>
			<td>{{$marca->nome}}</td>
		</tr>
		<tr>
			<td>Origem Marca:</td>
			<td>{{$marca->origem_marca}}</td>
		</tr>
		<tr>
			<td>Ano Criação:</td>
			<td>{{$marca->ano_criacao}}</td>
		</tr>

		</tr>
	</tbody>
</table>



@if(isset($marca->logotipo))
<div class='container'>
<img src="{{asset('imagens/marca/'.$marca->logotipo)}}"style="width: 20%;text-align:center"/>
</div>
@endif

<br>
<br>
<div class="row">
<div class="col-md-4">
<a href="{{route('marcas.index')}}"class="btn btn-primary">Voltar</a>
</div>

<div class="col-md-6">
</div>

<div class="col-md-1">
<a href="{{route('marcas.edit', ['id_marca'=>$marca->id_marca])}}" class="btn btn-primary"> Editar </a>
</div>
    
<div class="col-md-1">    
<a href="{{route('marcas.delete', ['id_marca'=>$marca->id_marca])}}" class="btn btn-primary"> Eliminar </a>
</div>

</div>
</div>
@endsection