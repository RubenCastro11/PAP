<h3> Motas </h3>
Id Mota: {{$mota->id_mota}}<br>
Id Estilo: {{$mota->id_estilo}}<br>
Id User: {{$mota->id_user}}<br>
Marca: {{$mota->marca}}<br>
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