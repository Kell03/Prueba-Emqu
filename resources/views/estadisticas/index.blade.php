@extends('plantilla')
@section('title')
Estadisticas
@endsection


@section('content')

<div class="container">

      

  
  <div class="row"> 

    <div class="col-md-12 " > 
      <div class="panel shadow" style="border-bottom: 3px solid #43c7e7; background: white;">  


<h2 class="title">  Estadística de la encuesta </h2>

</div>

    </div>



  </div>


</div>



<div class="container" id="">	

    <div class="panel shadow" style="border-bottom: 3px solid #43c7e7; background:white" >    


<div class="row">


  <div class="col-md-6 mb-4 mt-3"> 
<div class="panel ">  
<div class="card text-bg-primary mb-3" style="max-width: 18rem; margin:auto; ">
  <div class="card-header">Encuestas Realizadas</div>
  <div class="card-body" style="margin:auto;">
    <h1 style="font-size: 80px;">  {{$total_encuestas}} </h1>
  </div>
</div>

</div>
</div>



<div class="col-md-6 mb-4 mt-3">		
<div class="panel shadow">	
<div>
  <canvas id="popularidad_rs"></canvas>
</div>

</div>
</div>



<div class="col-md-6">    
<div class="panel shadow">  
<div>
  <canvas id="myChart"></canvas>
</div>

</div>
</div>


<div class="col-md-6">    
<div class="panel shadow">  
<div>
  <canvas id="edad_rs"></canvas>
</div>

</div>
</div>







</div>
</div>
</div>

@include('estadisticas.popularidad_rs')
@include('estadisticas.Promedio_rs')
@include('estadisticas.edad_rs')

@endsection