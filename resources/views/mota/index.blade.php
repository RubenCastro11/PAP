@extends ('layout')
@extends ('layout2')
@section ('conteudo')
<div class="col-md-12">

<section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
           <h1>Motas</h1>
            </div>
         <div class="col-md-12">
          <div class="row">
          
          @foreach($motas as $mota)

            <div class="col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="fas fa-motorcycle"></i></div>
              <h4 class="title"><a href="{{route('motas.show',['id'=>$mota->id_mota])}}">{{$mota->marca->nome}}</a></h4>
              <p class="description">{{$mota->modelo}}<br>
 		{{$mota->cilindrada}}</p>
            </div>
</div>
            @endforeach

</div>

</div>
            
          </div>
        </div>
        </div>
        <div class="col-md-12 margem-top">
        <a href="{{route('motas.create')}}"class="btn btn-primary">Adicionar Mota</a>  
        </div>
      </section><!-- End About Section -->




</div>
@endsection
