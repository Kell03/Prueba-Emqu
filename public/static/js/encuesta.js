var base = location.protocol+'//'+location.host;
var route = document.getElementsByName('routename')[0].getAttribute('content')

document.addEventListener('DOMContentLoaded', function(){

if(route == 'encuesta'){

//PRIMERA HOJA DE LA ENCUESTA

// ipt = input; e = error; slt = select

    
var chk_m = document.getElementById('chk_m');   
var chk_f = document.getElementById('chk_f');

 chk_m.addEventListener('click', function(){ 

    chk_m.checked = "true";
    chk_f.checked = "";

 },false)


  chk_f.addEventListener('click', function(){ 

    chk_m.checked = "";
    chk_f.checked = "true";

 },false)


   



    


var btn_pregunta1 = document.getElementById('btn_pregunta1');
    var seccion1 = document.getElementById('seccion1');
    var seccion2 = document.getElementById('seccion2');

    var e_nombre = document.getElementById('error_nombre');
    var e_apellido = document.getElementById('error_apellido');
    var e_1 = document.getElementById('error1');


btn_pregunta1.addEventListener('click', function(){


 var ipt_nombre = document.getElementById('input_nombre').value;
 var ipt_apellido = document.getElementById('input_apellido').value;
 var slt_edad = document.getElementById('select_edad').value;
 let  radio1 =  document.querySelector('input[name="sexo"]:checked');   

 function time_error1(){

e_1.style.display = 'none';

 }


if(ipt_nombre.length == 0 || ipt_apellido.length == 0 || slt_edad.length == 30 ||

!radio1/* el ultimo es la validacion del radio*/ ){


e_1.style.display = '';
setTimeout(time_error1,1500);

}
else {

seccion1.style.display = "none";
seccion2.style.display = "";

}




},false);



//FIN PRIMERA HOJA DE LA ENCUESTA




//SEGUNDA HOJA



var btn_pregunta2 = document.getElementById('btn_pregunta2');
    var seccion3 = document.getElementById('seccion3');
    var e_2 = document.getElementById('error2');
    var red_favorita = document.getElementById('red_favorita');

    btn_pregunta2.addEventListener('click', function(){

function time_error2(){

e_2.style.display = 'none';

 }

 let  radio2 =  document.querySelector('input[name="favorite_red"]:checked'); 

 red_favorita.value = radio2.value;


    seccion2.style.display = "none";
     seccion3.style.display = "";
 



    }, false)


// FIN SEGUNDA HOJA



//TERCERA HOJA



var btn_pregunta3 = document.getElementById('btn_pregunta3');
    var seccion3 = document.getElementById('seccion3');
    var e_3 = document.getElementById('error3');
    var btn_submit = document.getElementById('btn_submit');

    btn_pregunta3.addEventListener('click', function(){

function time_error3(){

e_3.style.display = 'none';

 }

 var  fc =  document.getElementById('time_facebook').value;
  var  ing =  document.getElementById('time_instagram').value;
    var  ws =  document.getElementById('time_whatsapp').value;
  var  tw =  document.getElementById('time_twitter').value;
  var  tk =  document.getElementById('time_tiktok').value;
  

if(fc < 0 || ing < 0 || ws < 0 || tw < 0 || tk < 0  ){

    e_3.style.display = '';
  setTimeout(time_error3,1500);
  

}
else if( fc > 24 || ing > 24 || ws > 24 || tw > 24 || tk > 24){

        e_3.style.display = '';
  setTimeout(time_error3,1500);
}

else if( fc === " " || ing === " " || ws === " " || tw === " " || tk === " "){

        e_3.style.display = '';
  setTimeout(time_error3,1500);
}

else{

    btn_submit.click();
}





    }, false)


// FIN tercera HOJA

}




});