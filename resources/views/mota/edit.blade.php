<form action="{{route('motas.update',['id_mota'=>$mota->id_mota])}}" enctype="multipart/form-data" method="post">
@csrf
@method('patch')
    
Estilo:<select name="id_estilo">
    @foreach ($estilos as $estilo)
    <option value="{{$estilo->id_estilo}}">{{$estilo->nome}}</option>
    @endforeach
    </select>
    @if ($errors->has('id_estilo'))
    Digite um número
    @endif
    <br><br>

	Marca: <input type="text" name="marca" value="{{$mota->marca}}"><br><br>
    @if ($errors->has('marca'))  
    <b style="color:red"> Campo Obrigatório </b>
    <br><br>
    @endif
    
    Modelo: <input type="text" name="modelo" value="{{$mota->modelo}}"><br><br>
    @if ($errors->has('modelo'))  
     <b style="color:red">Mínimo de 1 palavras</b> 
    <br><br>
    @endif

     Cilindrada: <input type="text" name="cilindrada" value="{{$mota->cilindrada}}"><br><br>
    @if ($errors->has('cilindrada'))  
     <b style="color:red">Mínimo de 2 números</b> 
    <br><br>
    @endif
    
     Quilometros: <input type="text" name="quilometros" value="{{$mota->quilometros}}"><br><br>
    @if ($errors->has('quilometros'))  
     <b style="color:red">Campo Obrigatório</b> 
    <br><br>
    @endif

     Preço: <input type="text" name="preco" value="{{$mota->preco}}"><br><br>
    @if ($errors->has('preco'))  
     <b style="color:red">Campo Obrigatório</b> 
    <br><br>
    @endif

    Cor: <input type="text" name="cor" value="{{$mota->cor}}"><br><br>
    @if ($errors->has('cor'))  
     <b style="color:red">Campo Obrigatório</b> 
    <br><br>
    @endif


    Data de Fabrico: <input type="date" name="data_fabrico" value="{{$mota->data_fabrico}}"><br><br>
    @if ($errors->has('data_fabrico'))  
    <b style="color:red">Digite uma data</b>
    <br><br>
    @endif
    
    Observações:<br> <textarea type="text" name="observacoes" >{{$mota->observacoes}}</textarea> <br><br>
   
      Fotografia: <input type="file" name="fotografia" value="{{$mota->fotografia}}"><br><br>
    @if ($errors->has('fotografia'))  
    <b style="color:red"> Campo Obrigatório </b>
    <br><br>
    @endif

<input type="submit" value="enviar">
</form>