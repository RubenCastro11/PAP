@extends ('layout')
@extends ('layout2')
@section ('conteudo')
 <div class="col-md-12">

<section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
         <h1>Publicidades </h1>
         </div>
         <div class="col-md-12">
          <div class="row">

          @foreach($publicidade as $publicidades)

            <div class="col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="fas fa-motorcycle"></i></div>
              <h4 class="title"><a href="{{route('publicidades.show',['id'=>$publicidades->id_publicidade])}}">{{$publicidades->mota->modelo}}</a></h4>
            </div>
</div>
            @endforeach
          
</div>
            
</div>
         
        </div>
      </div>
      </div>
      <div class="col-md-12 margem-top">
<a href="{{route('publicidades.create')}}"class="btn btn-primary">Adicionar Publicidade</a>
</div>
    </section><!-- End About Section -->






</div>
@endsection


