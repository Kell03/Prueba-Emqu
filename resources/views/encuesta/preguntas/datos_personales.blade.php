
<section  id="seccion1" style="display:">
<div class="header-inicio"> 

		
<h3 class="title">Datos del usuario</h3>


	</div>


	<div class="inside" style="background:">



    <div class="row" style="margin:auto; "> 



      <div class="col-md12 mb-2 alert alert-danger" id="error1" style="display:none">  
 <strong>Faltan Ingresar algunos datos</strong>

      </div>


      <div class="col-md-12 "> 
      
      <input type=" " class="form-control" placeholder="Ingresar Nombre..." id="input_nombre" name="nombre" value="{{Auth::user()->name}}" readonly>


      <span style="color: red; display: none;" id="error_nombre"> <strong>Ingresar Nombre</strong></span>

      </div>

   
      <div class="col-md-12 mt-4"> 
      
      <input type=" " class="form-control" placeholder="Ingresar Apellido..."
      id="input_apellido" name="apellido" value="{{Auth::user()->surname}}" readonly>

      <input type=" " class="form-control" 
      id="input_email" name="email" value="{{Auth::user()->email}}" readonly style="display: none">

      <span style="color: red; display: none;" id="error_apellido"> <strong>Ingresar Apellido</strong></span>

      </div>


      <div class="col-md-12 mt-4"> 
      
      <select class="form-select" aria-label="Default select example" id="select_edad" name="edad"> 
  <option selected>Selecciona el rango de tu edad</option>
  <option value="18-25">18-25</option>
  <option value="26-33">26-33</option>
  <option value="34-40">34-40</option>
  <option value="40+">40+</option>
</select>

      <span style="color: red; display: none;" id="error_apellido"> <strong>Ingresar Apellido</strong></span>

      </div>

           <div class="col-md-12 mt-4"> 

    <label><h6 >Sexo</h6></label>
    <br>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="sexo" id="chk_m" value="M" >
  <label class="form-check-label" for="inlineCheckbox1">M</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="sexo" id="chk_f" value="F" >
  <label class="form-check-label" for="inlineCheckbox2">F</label>
</div>



      </div>


      <div class="col-md-12 mt-4"> 
     <a href=" #"  class="btn-encuesta" id="btn_pregunta1" style="float:right; ">
      Siguiente
         
    </a>
   </div>


    </div>

    







</div>

</section>