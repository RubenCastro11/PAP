@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<br>
<form action="{{route('estilos.update',['id_estilo'=>$estilo->id_estilo])}}" method="post">
@csrf
@method('patch')
    <br>
Nome: <input type="text" name="nome" value="{{old('nome')}}"><br><br>
@if ($errors->has('nome'))
<b style="color:red">Campo Obrigatório</b><br>
@endif

<input type="submit" value="Enviar"class="btn btn-primary">
</form>
@endsection