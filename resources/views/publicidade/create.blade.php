@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<form action="{{route('publicidades.store')}}" enctype="multipart/form-data" method="post" class="php-email-form">
@csrf
    <br>
	
	ID da Publicidade: <input class="form-control" placeholder="Insira o Id da Publicidade" type="text" name="id_publicidade" value="{{old('id_publicidade')}}"><br><br>
    @if ($errors->has('id_publicidade'))  
    <b style="color:red"> Digite um número </b>
    <br><br>
    @endif
    
   ID Mota: <input class="form-control" placeholder="Insira o Id da Mota" type="text" name="id_mota" value="{{old('id_mota')}}"><br><br>
    @if ($errors->has('id_mota'))  
    <b style="color:red"> Digite um número </b>
    <br><br>
    @endif

    Designação: <input class="form-control" placeholder="Insira a Designação" type="text" name="designacao" value="{{old('designacao')}}"><br><br>
    @if ($errors->has('designacao'))  
    <b style="color:red"> Campo Obrigatório </b>
    <br><br>
    @endif

      Fotografia: <input class="form-control" placeholder="Insira a Fotografia" type="file" name="fotografia" value="{{old('fotografia')}}"><br><br>
    @if ($errors->has('fotografia'))  
    <b style="color:red"> Campo Obrigatório </b>
    <br><br>
    @endif
    
    
   
    
    
    
    <input type="submit" name="Enviar" class="btn btn-primary">
    
    
    
    
    
    
</form>
@endsection