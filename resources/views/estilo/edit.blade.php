<form action="{{route('estilos.update',['id_estilo'=>$estilo->id_estilo])}}" method="post">
@csrf
@method('patch')
    
Nome: <input type="text" name="nome" value="{{old('nome')}}"><br><br>
@if ($errors->has('nome'))
<b style="color:red">Campo Obrigatório</b><br>
@endif

<input type="submit" value="enviar">
</form>
