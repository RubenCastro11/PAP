@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<form action="{{route('estilos.store')}}"  method="post">
@csrf
    
Nome: <input type="text" name="nome" value="{{old('nome')}}"><br><br>
@if ($errors->has('nome'))
<b style="color:red">Campo Obrigatório</b><br>
@endif
    
<input type="submit" value="enviar">
</form>
  @endsection