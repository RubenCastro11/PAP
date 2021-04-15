<h3> Motas </h3>
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
<img src="{{asset('imagens/mota/'.$mota->fotografia)}}">
@endif

<br>
<a href="{{route('motas.index')}}">Voltar</a>

<a href="{{route('motas.edit', ['id_mota'=>$mota->id_mota])}}" class="btn btn-primary"> Editar 

</a>

<a href="{{route('motas.delete', ['id_mota'=>$mota->id_mota])}}" class="btn btn-primary"> Eliminar </a>