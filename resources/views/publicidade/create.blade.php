<form action="{{route('publicidades.store')}}" enctype="multipart/form-data" method="post">
@csrf

	
	ID da Publicidade: <input type="text" name="id_publicidade" value="{{old('id_publicidade')}}"><br><br>
    @if ($errors->has('id_publicidade'))  
    <b style="color:red"> Digite um número </b>
    <br><br>
    @endif
    
   ID Mota: <input type="text" name="id_mota" value="{{old('id_mota')}}"><br><br>
    @if ($errors->has('id_mota'))  
    <b style="color:red"> Digite um número </b>
    <br><br>
    @endif

    Designação: <input type="text" name="designacao" value="{{old('designacao')}}"><br><br>
    @if ($errors->has('designacao'))  
    <b style="color:red"> Campo Obrigatório </b>
    <br><br>
    @endif

      Fotografia: <input type="file" name="fotografia" value="{{old('fotografia')}}"><br><br>
    @if ($errors->has('fotografia'))  
    <b style="color:red"> Campo Obrigatório </b>
    <br><br>
    @endif
    
    
   
    
    
    
    <input type="submit" name="enviar">
    
    
    
    
    
    
</form>