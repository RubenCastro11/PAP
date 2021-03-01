<form action="{{route('marcas.store')}}" method="post">
@csrf
    
Nome: <input type="text" name="nome" value="{{old('nome')}}"><br><br>
@if(errors->has('nome'))
<b style="color:red">Campo Obrigatório</b><br>
@endif
    
Origem Marca: <input type="text" name="origem_marca" value="{{old('origem_marca')}}"><br><br>
@if(erros->has('origem_marca'))
<b style="color:red">Campo Obrigatório</b><br>
@endif
    
Ano Criacao: <input type="text" name="ano_criacao" value="{{old('ano_criacao')}}"><br><br>
@if(erros->has('ano_criacao'))
<b style="color:red">Campo Obrigatório</b><br>
@endif
    
Logotipo: <input type="text" name="logotipo" value="{{old('logotipo')}}"><br><br>
@if(erros->has('logotipo'))
<b style="color:red">Campo Obrigatório</b><br>
@endif
    
<input type="submit" value="enviar">
</form>

    

    

    
