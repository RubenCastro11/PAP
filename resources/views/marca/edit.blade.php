<form action="{{route('marcas.update',['id_marca'=>$marca->id_marca])}}" enctype="multipart/form-data" method="post">
@csrf
@method('patch')
    
Nome: <input type="text" name="nome" value="{{$marca->nome}}"><br><br>
@if ($errors->has('nome'))
<b style="color:red">Nome Obrigatório</b><br>
@endif
    
Origem Marca: <input type="text" name="origem_marca" value="{{$marca->origem_marca}}"><br><br>
@if ($errors->has('origem_marca'))
<b style="color:red">Origem Marca Obrigatório</b><br>
@endif
    
Ano Criacao: <input type="text" name="ano_criacao" value="{{$marca->ano_criacao}}"><br><br>
@if ($errors->has('ano_criacao'))
<b style="color:red">Ano Criação Obrigatório</b><br>
@endif
    
Logotipo: <input type="file" name="logotipo" value="{{$marca->logotipo}}"><br><br>
@if ($errors->has('logotipo'))
<b style="color:red">Logótipo Obrigatório</b><br>
@endif
    
<input type="submit" value="enviar">
</form>