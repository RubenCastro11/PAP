@extends ('layout')
@extends ('layout2')
@section('conteudo')
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
			<td>Utilizador: {{ $mota->user->name }}</td>
			<td></td>
		</tr>
		<tr>
			<td>Marca:</td>
			<td>{{$mota->marca->nome}}</td>
		</tr>
		<tr>
			<td>Modelo:</td>
			<td>{{$mota->modelo}}</td>
		</tr>
		</tr>
	</tbody>
</table>

Estilo: {{$mota->estilo->nome}}<br>
Utilizador: {{ $mota->user->name }}<br>
Marca: {{$mota->marca->nome}}<br>
Modelo: {{$mota->modelo}}<br>
Cilindrada: {{$mota->cilindrada}}<br>
Quilometros: {{$mota->quilometros}}<br>
Preço: {{$mota->preco}}<br>
Cor: {{$mota->cor}}<br>
Data de Fabrico: {{$mota->data_fabrico}}<br>
Observações: {{$mota->observacoes}}<br>


@if(isset($mota->fotografia))
<div class='container'>
<img src="{{asset('imagens/mota/'.$mota->fotografia)}}" style="width: 20%; text-align:center"/>
</div>
@endif
<br>
<br>
<a href="{{route('motas.index')}}" class="btn btn-primary">Voltar</a>

<a href="{{route('motas.edit', ['id_mota'=>$mota->id_mota])}}" class="btn btn-primary"> Editar </a>

<a href="{{route('motas.delete', ['id_mota'=>$mota->id_mota])}}" class="btn btn-primary"> Eliminar </a>
@endsection