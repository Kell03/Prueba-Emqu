@extends('login.plantilla')
@section('title')
Registro
@endsection


@section('content')


<div class="container">	


  <div class="box box_register"> 
<div class="header">  
<img src="{{url('/static/imagenes/logo.png')}}" align="center" alt="">
</div>
    <div class="inside">  
@include('login.mensaje')
<form action="{{route('register')}}" method="post">
    @csrf
   <div class="row" align="center" style=" margin: 0 auto;">
        

        
        <div class="col-md-10" >  
        <div class=" input-group mb-3">
        <span class="input-group-text" id="basic-addon1" >Nombre</span> 
          <input type="text" class="form-control"  name="Nombre" >
      </div>
       </div>


        <div class="col-md-10">  
        <div class=" input-group mb-3">
        <span class="input-group-text" id="basic-addon1" >Apellido</span> 
          <input type="text" class="form-control"  name="Apellido" >
      </div>
       </div>

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
        <div class=" input-group mb-4">
        <span class="input-group-text" id="basic-addon1" >  Contraseña</span> 
          <input type="password" class="form-control"  name="confirm" >
      </div>
       </div>
<div class="col-md-10">
  <a href="{{route('home')}}" class="btn btn-secondary"> Volver</a>

  <button type="submit" class="btn" style="background:#43c7e7; color: white;">Registrarse</button>
</div>
</div>
</form>

</div>

</div>


</div>


@endsection