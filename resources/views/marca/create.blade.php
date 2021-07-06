@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<form action="{{route('marcas.store')}}" enctype="multipart/form-data" method="post"class="php-email-form">
@csrf
    <br>
Nome: <input class="form-control" placeholder="Insira o Nome" type="text" name="nome" value="{{old('nome')}}"><br><br>
@if ($errors->has('nome'))
<b style="color:red">Campo Obrigatório</b><br>
@endif
    
Origem Marca: <input class="form-control" placeholder="Insira a Origem da marca" type="text" name="origem_marca" value="{{old('origem_marca')}}"><br><br>
@if ($errors->has('origem_marca'))
<b style="color:red">Campo Obrigatório</b><br>
@endif
    
Ano Criacao: <input class="form-control" placeholder="Insira o ano" type="text" name="ano_criacao" value="{{old('ano_criacao')}}"><br><br>
@if ($errors->has('ano_criacao'))
<b style="color:red">Campo Obrigatório</b><br>
@endif
    
Logotipo: <input class="form-control" placeholder="Insira o Logotipo" type="file" name="logotipo" value="{{old('logotipo')}}"><br><br>
@if ($errors->has('logotipo'))
<b style="color:red">Campo Obrigatório</b><br>
@endif
    
<input type="submit" value="Enviar" class="btn btn-primary">
</form>
@endsection
    

    
