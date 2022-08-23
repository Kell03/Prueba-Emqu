@extends('plantilla')

@section('title')
Encuesta 
@endsection

@section('content')

	


<div class="container">	
	<div class="row">	



<div class="col-md-6 mtop16">	

	<div class="panel shadow panel-inicio" >
		
		<div class="header-inicio">
			<h3 class="title">
				Encuesta de Redes Sociales para los Usuarios
			</h3>
		</div>

		<div class="inside-inicio">	

			<p style="font-family: arial;">	La presente encuesta de redes sociales tiene como objetivo principal identificar cómo la audiencia usa las redes sociales y descubrir cuál es la mejor plataforma de redes sociales.</p>
		 </div>
	

	
    </div>

</div>


<div class="col-md-6 mtop16">	






<div class="panel shadow panel-inicio" style="background:white;">

          @if(Session::has('mensaje'))
	       <div class="alert alert-{{Session::get('typealert')}}" style="display:;"> 
         <h1>   </h1> 
            {{Session::get('mensaje') }}
                           @if($errors->any())
                           <ul>
            
                              @foreach($errors->all() as $error)
                                  <li>{{$error}} </li>
                                   @endforeach

            

                                </ul>
                            @endif
         
         <script> 
          $('.alert').slideDown();
          setTimeout(function(){$('.alert').slideUp(); }, 2000);

         </script>
         </div>
         @endif
  

	 <div class="container"> 

            

  

<form action="{{route('encuesta')}}" method="post">
	@csrf
	
@include('encuesta.preguntas.datos_personales')
@include('encuesta.preguntas.redes_sociales')
@include('encuesta.preguntas.tiempo_redes')


 <button id="btn_submit" style="display:none">Enviar	</button>

</form>	

	

	</div>



</div>

</div>
</div>


@endsection