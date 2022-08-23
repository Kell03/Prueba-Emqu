@extends('login.plantilla')
@section('title')
Login
@endsection


@section('content')



<div class="container">	


  <div class="box box_login"> 
<div class="header">  
<img src="{{url('/static/imagenes/logo.png')}}" align="center" alt="">
</div>
    <div class="inside">  
@include('login.mensaje')
<form action="{{route('login')}}" method="post">
    @csrf
   <div class="row" align="center" style=" margin: 0 auto;">
        

        
     

     <div class="col-md-10">  
        <div class=" input-group mb-3">
        <span class="input-group-text" id="basic-addon1" >Correo</span> 
          <input type="email" class="form-control"  name="email" >
      </div>
       </div>

     <div class="col-md-10">  
        <div class=" input-group mb-3">
        <span class="input-group-text" id="basic-addon1" >Contraseña</span> 
          <input type="password" class="form-control"  name="password" >
      </div>
       </div>

   
<div class="col-md-10">
  <a href="{{route('home')}}" class="btn btn-secondary"> Volver</a>

  <button type="submit" class="btn" style="background:#43c7e7; color: white;">Ingresar</button>
</div>
</div>
</form>

</div>

</div>


</div>

@endsection