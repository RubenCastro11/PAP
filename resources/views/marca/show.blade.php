<h3>Marca</h3>
Id: {{$marca->id_marca}}<br>
Nome: {{$marca->nome}}<br>
Origem Marca: {{$marca->origem_marca}}<br>
Ano Criação: {{$marca->ano_criacao}}<br>
Logótipo: {{$marca->logotipo}}<br>


@if(isset($marca->logotipo))
<img src="{{asset('imagens/marca/'.$marca->logotipo)}}">
@endif

<br>
<a href="{{route('marcas.index')}}">Voltar</a>

<a href="{{route('marcas.edit', ['id_marca'=>$marca->id_marca])}}" class="btn btn-primary"> Editar 
    
<a href="{{route('marcas.delete', ['id_marca'=>$marca->id_marca])}}" class="btn btn-primary"> Eliminar     

</a>
