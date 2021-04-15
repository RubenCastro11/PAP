<form action="{{route('motas.store')}}" enctype="multipart/form-data" method="post">
@csrf

	Estilo:<select name="id_estilo">
    @foreach ($estilos as $estilo)
    <option value="{{$estilo->id_estilo}}">{{$estilo->nome}}</option>
    @endforeach
    </select>
    @if ($errors->has('id_estilo'))
      Selecione uma opção
    @endif
    <br><br>

        Marca:<select name="id_marca">
    @foreach ($marcas as $marca)
    <option value="{{$marca->id_marca}}">{{$marca->nome}}</option>
    @endforeach
    </select>
    @if ($errors->has('id_marca'))
    Selecione uma opção
    @endif
    <br><br>




    Modelo: <input type="text" name="modelo" value="{{old('modelo')}}"><br><br>
    @if ($errors->has('modelo'))  
     <b style="color:red">Mínimo de 1 palavras</b> 
    <br><br>
    @endif

     Cilindrada: <input type="text" name="cilindrada" value="{{old('cilindrada')}}"><br><br>
    @if ($errors->has('cilindrada'))  
     <b style="color:red">Mínimo de 2 números</b> 
    <br><br>
    @endif
    
     Quilometros: <input type="text" name="quilometros" value="{{old('quilometros')}}"><br><br>
    @if ($errors->has('quilometros'))  
     <b style="color:red">Campo Obrigatório</b> 
    <br><br>
    @endif

     Preço: <input type="text" name="preco" value="{{old('preco')}}"><br><br>
    @if ($errors->has('preco'))  
     <b style="color:red">Campo Obrigatório</b> 
    <br><br>
    @endif

    Cor: <input type="text" name="cor" value="{{old('cor')}}"><br><br>
    @if ($errors->has('cor'))  
     <b style="color:red">Campo Obrigatório</b> 
    <br><br>
    @endif


    Data de Fabrico: <input type="date" name="data_fabrico" value="{{old('data_fabrico')}}"><br><br>
    @if ($errors->has('data_fabrico'))  
    <b style="color:red">Digite uma data</b>
    <br><br>
    @endif
    
    Observações:<br> <textarea type="text" name="observacoes" value="{{old('observacoes')}}"></textarea> <br><br>
   
      Fotografia: <input type="file" name="fotografia" value="{{old('fotografia')}}"><br><br>
    @if ($errors->has('fotografia'))  
    <b style="color:red"> Campo Obrigatório </b>
    <br><br>
    @endif
    
    
    <input type="submit" name="enviar">
    
    
    
    
    
    
</form>