<script>
const labels = [
    'Facebook',
    'Instagram',
    'Whastapp',
    'Twitter',
    'Tik tok',
    
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Popularidad de Redes Sociales',
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

      data: [{{$facebook}}, {{$instagram}}, {{$whatsapp}}, {{$twitter}}, {{$tiktok}}],
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {}
  };

  const myChart = new Chart(
    document.getElementById('popularidad_rs'),
    config
  );
</script>