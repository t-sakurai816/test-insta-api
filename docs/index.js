var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
  // The type of chart we want to create
  type: 'line',

  // The data for our dataset
  data: {
    labels: ['2/21', '2/22', '2/23', '2/24', '2/25', '2/26', '2/27'],
    datasets: [{
      label: 'いいね数',
      // backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [5, 10, 30, 40, 49, 54, 57]
    }]
  },


  // Configuration options go here
  options: {}
});