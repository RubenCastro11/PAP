@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <h3>Estilos</h3>
          </div>
          @foreach($estilos as $estilo)

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="{{route('estilos.show',['id_estilo'=>$estilo->id_estilo])}}">{{$estilo->nome}}</a></h4>
            </div>

            @endforeach
          

            

         
        </div>

      </div>
    </section><!-- End About Section -->




<br>
<a href="{{route('estilos.create')}}">Adicionar Estilo</a>
@endsection



    
    
    
    
    