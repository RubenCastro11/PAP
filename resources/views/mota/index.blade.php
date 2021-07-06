@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
           <h1>Motas</h1>
          

          @foreach($motas as $mota)

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="fas fa-motorcycle"></i></div>
              <h4 class="title"><a href="{{route('motas.show',['id'=>$mota->id_mota])}}">{{$mota->marca->nome}}</a></h4>
              <p class="description">{{$mota->modelo}}<br>
 		{{$mota->cilindrada}}</p>
            </div>
            @endforeach
        </div>
        </div>
      </div>
    </section><!-- End About Section -->









<br>
<a href="{{route('motas.create')}}"class="btn btn-primary">Adicionar Mota</a>
@endsection
