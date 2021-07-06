@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <h1>Estilos</h1>
          
          @foreach($estilos as $estilo)

          <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="fas fa-motorcycle"></i></div>
              <h4 class="title"><a href="{{route('estilos.show',['id_estilo'=>$estilo->id_estilo])}}">{{$estilo->nome}}</a></h4>
            </div>

            @endforeach
          

            

         
        </div>
      </div>
      </div>
    </section><!-- End About Section -->




<br>
<a href="{{route('estilos.create')}}"class="btn btn-primary">Adicionar Estilo</a>
@endsection



    
    
    
    
    