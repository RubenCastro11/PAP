@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<section id="about" class="about">
      <div class="container-fluid">

        <div class="row">

          @foreach($marcas as $marca)

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="fas fa-motorcycle"></i></div>
              <h4 class="title"><a href="{{route('marcas.show',['id'=>$marca->id_marca])}}">{{$marca->nome}}</a></h4>
              <p class="description">{{$marca->origem_marca}}<br>
 		{{$marca->ano_criacao}}</p>
            </div>

            @endforeach
          


</div>
 </div>

      </div>
    </section><!-- End About Section -->









<br>
<a href="{{route('marcas.create')}}">Adicionar Marca</a>
@endsection
