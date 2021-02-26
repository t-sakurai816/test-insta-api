var ctx = document.getElementById('myChart4').getContext('2d');
var chart = new Chart(ctx, {
  // The type of chart we want to create
  type: 'line',

  // The data for our dataset
  data: {
    labels: ['2/21', '2/22', '2/23', '2/24', '2/25', '2/26', '2/27'],
    datasets: [{
      label: 'フォロワー数',
      // backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 140, 0)',
      data: [200, 210, 200, 220, 280, 317, 320]
    }]
  },


  // Configuration options go here
  options: {}
});