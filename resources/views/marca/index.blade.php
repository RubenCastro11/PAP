@extends('layout')

@section('conteudo')
<div class="col-md-12">
<h3>Marcas</h3>
</div>

<div class="col-md-12">
	<div class="row">
		@foreach($marcas as $marca)
		<div class="col-md-3">
		<a href="{{route('marcas.show',['id'=>$marca->id_marca])}}">
		    {{$marca->nome}}
		</a> 
		</div>
		@endforeach
	</div>
</div>

<div class="row">
	<div class="col-md-12">
	<a class="btn btn-light" href="{{route('marcas.create')}}">Adicionar Marca</a>
	
	</div>
</div>
@endsection