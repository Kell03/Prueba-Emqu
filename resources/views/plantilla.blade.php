<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="routename" content="{{ Route::currentRouteName() }}">
	<title>@yield('title')| Emqu Technologies 	</title>

	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,700&display=swap" rel="stylesheet">{{--font--}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>


<link rel="stylesheet" href="{{url('/static/css/inicio.css?v'.time())}}">



{{--javascript bootstrap--}}
<script src="{{url('/static/js/encuesta.js?v'.time())}}"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

{{--javascript bootstrap--}}

<script src="https://kit.fontawesome.com/343823813c.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>







	<nav class="navbar navbar-expand-lg bg-ligh shadow " style="background:white; border-bottom: 3px solid #8749ae;">
  <div class="container" style="background: ; ">
    <a class="navbar-brand" href="#"><img src="{{url('/static/imagenes/logo.png')}}" alt="" width="150"></a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

   {{--inicio de botones de ingreso--}}
    <div class="collapse navbar-collapse">
    <ul class="navbar-nav" >

    	<li class="nav-item" style="margin-left:20px;">	
      
      <a href="{{route('home')}}" class="nav-link  lk-home" >  Inicio <i class="fa-solid fa-house"></i></a>


    	</li>

     <li class="nav-item" style="margin-left:20px;"> 
      
      <a href="" class="nav-link  lk-home" >  Contacto <i class="fa-solid fa-phone"></i></a>


      </li>
            <li class="nav-item" style="margin-left:20px;"> 
      
      <a href="" class="nav-link  lk-home" >  Nosotros <i class="fa-solid fa-users"></i></a>


      </li>


      <li class="nav-item" style="margin-left:20px;"> 
      
      <a href="{{route('encuesta')}}" class="nav-link  lk-home" >  Encuesta <i class="fa-solid fa-file-signature"></i></a>


      </li>
@if(Auth::guest())
@else
@if(Auth::user()->role == '1')
<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Configuracion  
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('estadisticas')}}">Estadísticas <i class="fa-solid fa-arrow-trend-up"></i></a> </li>
            <li><a class="dropdown-item" href="#">Usuarios <i class="fa-solid fa-user-gear"></i></a></li>
          </ul>
        </li>



@endif
@endif

    </ul>

    

    <ul class="navbar-nav"  style="margin-left:auto;">
      @if(Auth::guest())

      <li class="nav-item" style="margin-left:20px;"> 
      
      <a href="{{route('login')}}" class="nav-link  lk-home" >  Login <i class="fa-solid fa-right-to-bracket"></i></a>


      </li>

      <li class="nav-item" style="margin-left:20px; background: #43c7e7; border: 1px solid #f5f6f; border-radius: 10px;"> 
      
      <a href="{{route('register')}}" style="color:white;" class="nav-link  lk-home" >  Registrarse </a>


      </li>

       @else


<li class="nav-item" style="margin-left:20px;"> 
      
      <a href="{{route('logout')}}" class="nav-link  lk-home" >  Logout <i class="fa-solid fa-arrow-right-from-bracket"></i></a>


      </li>

       
       @endif

    </ul>

   




    

    </div>

   {{--inicio de botones de ingreso--}}

</div>
</nav>

<div class="wrapper">   
<div class="page mtop16">
   
                    
                    
@if(Session::has('message'))
<script type="">
    swal("Buen Trabajo!", "Gracias por participar en nuestra encuesta!", "success");

</script>

@endif


   @section('content')

       




      @show

  </div>
  </div>


</body>
</html>