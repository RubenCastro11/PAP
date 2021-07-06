@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
         <h1>Publicidades </h1>
         
          @foreach($publicidade as $publicidades)

            
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="fas fa-motorcycle"></i></div>
              <h4 class="title"><a href="{{route('publicidades.show',['id'=>$publicidades->id_publicidade])}}">{{$publicidades->id_publicidade}}</a></h4>
            </div>

            @endforeach
          

            

         
        </div>
      </div>
      </div>
    </section><!-- End About Section -->









<br>
<a href="{{route('publicidades.create')}}"class="btn btn-primary">Adicionar Publicidade</a>
@endsection


