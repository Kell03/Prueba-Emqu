<script>
  const label_edad = [

    '<?php if(empty($edad_25->red_favorita)){echo 'Edad 18-25';} else{ echo $edad_25->edad .' - '.$edad_25->red_favorita;}  ?>',


    '<?php if(empty($edad_33->red_favorita)){echo 'Edad 26-33';} else{ echo $edad_33->edad .' - '.$edad_33->red_favorita;}  ?>',



    '<?php if(empty($edad_40->red_favorita)){echo 'Edad 34-40';} else{ echo $edad_40->edad .' - '.$edad_40->red_favorita;}  ?> ',



    '<?php if(empty($edad_50->red_favorita)){echo 'Edad 40+';} else{ echo $edad_50->edad .' - '.$edad_50->red_favorita;}  ?>',
    
  ];

  const datas_edad = {
    labels: label_edad,
    datasets: [{
      label: 'Edad que mas usa cada Red',
    backgroundColor: [
      


      '#1b74f4',
      '#1b74f4',
      '#1b74f4',
      '#1b74f4',
      
    ],
    borderColor: [
      'white',
      'white',
      'white',
      'white',
      'white'
    ],

    borderWidth: 1,
      data: [

      <?php if(empty($edad_25->red_favorita)){echo 0;} else{ echo $edad_25->rango ;}  ?>,

      <?php if(empty($edad_33->red_favorita)){echo 0;} else{ echo $edad_33->rango ;}  ?>,

       <?php if(empty($edad_40->red_favorita)){echo 0;} else{ echo $edad_40->rango ;}  ?>,


       <?php if(empty($edad_50->red_favorita)){echo 0;} else{ echo $edad_50->rango ;}  ?>  

       ],
    }]
  };

  const config_edad = {
    type: 'bar',
    data: datas_edad,
    options: {}
  };


    const edad_rs = new Chart(
    document.getElementById('edad_rs'),
    config_edad
  );
</script>
 