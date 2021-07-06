@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<form action="{{route('publicidades.update',['id_publicidade'=>$publicidade->id_publicidade])}}" enctype="multipart/form-data" method="post">
@csrf
    @method('patch')
	<br>
	ID da Publicidade: <input type="text" name="id_publicidade" value="{{$publicidade->id_publicidade}}"><br><br>
    @if ($errors->has('id_publicidade'))  
    <b style="color:red"> Digite um número </b>
    <br><br>
    @endif
    
   ID Mota: <input type="text" name="id_mota" value="{{$publicidade->id_mota}}"><br><br>
    @if ($errors->has('id_mota'))  
    <b style="color:red"> Digite um número </b>
    <br><br>
    @endif

    Designação: <input type="text" name="designacao" value="{{$publicidade->designacao}}"><br><br>
    @if ($errors->has('designacao'))  
    <b style="color:red"> Campo Obrigatório </b>
    <br><br>
    @endif

      Fotografia: <input type="file" name="fotografia" value="{{$publicidade->fotografia}}"><br><br>
    @if ($errors->has('fotografia'))  
    <b style="color:red"> Campo Obrigatório </b>
    <br><br>
    @endif
    
    
   
    
    
    
    <input type="submit" name="Enviar"class="btn btn-primary" >
    
    
    
    
    
    
</form>
@endsection