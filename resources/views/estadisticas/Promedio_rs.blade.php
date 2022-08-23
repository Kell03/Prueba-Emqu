<script>
  const label = [
    'Facebook',
    'Instagram',
    'Whatsapp',
    'Twitter',
    'Tik Tok'
  ];

  const datas = {
    labels: label,
    datasets: [{
      label: 'Promedio de horas de uso de Sociales al dia',
    backgroundColor: [
      '#1b74f4',
      '#cc06ea',
      '#4dcd5c',
      '#1d9bf0',
      'black'
    ],
    borderColor: [
      'white',
      'white',
      'white',
      'white',
      'white'
    ],

    borderWidth: 1,
      data: [{{$prom_fc}},{{$prom_ing}}, {{$prom_ws}}, {{$prom_tw}}, {{$prom_tk}}  ],
    }]
  };

  const configs = {
    type: 'bar',
    data: datas,
    options: {}
  };


    const myCharts = new Chart(
    document.getElementById('myChart'),
    configs
  );
</script>
 