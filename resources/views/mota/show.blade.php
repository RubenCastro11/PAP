@extends ('layout')
@extends ('layout2')
@section('conteudo')
<div class="col-md-12">
<h3> Motas </h3>
<br>
<br>
<table class='table table-dark table-hover'>
	<tbody>
		<tr>
			<td>Estilo:</td>
			<td>{{$mota->estilo->nome}}</td>
		</tr>
		<tr>
			<td>Utilizador:</td>
			<td>@if ($mota->user){{ $mota->user->name }}@endif</td>
		</tr>
		<tr>
			<td>Marca:</td>
			<td>{{$mota->marca->nome}}</td>
		</tr>
		<tr>
			<td>Modelo:</td>
			<td>{{$mota->modelo}}</td>
		</tr>
		<tr>
			<td>Cilindrada:</td>
			<td>{{$mota->cilindrada}}</td>
		</tr>
		<tr>
			<td>Quilometros:</td>
			<td>{{$mota->quilometros}}</td>
		</tr>
		<tr>
			<td>Preço:</td>
			<td>{{$mota->preco}}</td>
		</tr>
		<tr>
			<td>Cor:</td>
			<td>{{$mota->cor}}</td>
		</tr>
		<tr>
			<td>Data de Fabrico:</td>
			<td>{{$mota->data_fabrico}}</td>
		</tr>
		<tr>
			<td>Observações:</td>
			<td>{{$mota->observacoes}}</td>
		</tr>

		</tr>
	</tbody>
</table>



@if(isset($mota->fotografia))
<div class='container'>
<img src="{{asset('imagens/mota/'.$mota->fotografia)}}" style="width: 50%; text-align:center"/>
</div>
@endif

<br>
<br>
 <div class="row">
<div class="col-md-4">
<a href="{{route('motas.index')}}" class="btn btn-primary"class="btn btn-primary">Voltar</a>
</div>

<div class="col-md-6">
</div>

<div class="col-md-1">
<a href="{{route('motas.edit', ['id_mota'=>$mota->id_mota])}}" class="btn btn-primary"class="btn btn-primary"> Editar </a>
</div>

<div class="text-right col-md-1">
<a href="{{route('motas.delete', ['id_mota'=>$mota->id_mota])}}" class="btn btn-primary"class="btn btn-primary" > Eliminar </a>
</div>

</div>
</div>
@endsection