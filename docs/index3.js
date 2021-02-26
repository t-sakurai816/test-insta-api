var ctx = document.getElementById('myChart3').getContext('2d');
var chart = new Chart(ctx, {
  // The type of chart we want to create
  type: 'line',

  // The data for our dataset
  data: {
    labels: ['2/21', '2/22', '2/23', '2/24', '2/25', '2/26', '2/27'],
    datasets: [{
      label: '投稿数',
      // backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(100, 149, 237)',
      data: [47, 48, 49, 50, 52, 54, 57]
    }]
  },


  // Configuration options go here
  options: {}
});