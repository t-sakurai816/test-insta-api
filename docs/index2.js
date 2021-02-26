var ctx = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(ctx, {
  // The type of chart we want to create
  type: 'line',

  // The data for our dataset
  data: {
    labels: ['2/21', '2/22', '2/23', '2/24', '2/25', '2/26', '2/27'],
    datasets: [{
      label: 'コメント数',
      // backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(60, 179, 113)',
      data: [10, 8, 4, 9, 9, 10, 13]
    }]
  },


  // Configuration options go here
  options: {}
});