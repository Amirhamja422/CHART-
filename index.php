<style type="text/css">
  
body, html{
  background: #181E24;
  padding-top: 10px;
}

.wrapper{
  width:60%;
  display:block;
  overflow:hidden;
  margin:0 auto;
  padding: 60px 50px;
  background:#fff;
  border-radius:4px;
}

canvas{
  background:#fff;
  height:400px;
}

h1{
  font-family: Roboto;
  color: #fff;
  margin-top:50px;
  font-weight:200;
  text-align: center;
  display: block;
  text-decoration: none;
}


</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js
"></script>

<h1>Chart JS Stacked Bar example</h1>
<div class="wrapper">
<canvas id="myChart4"></canvas>
</div>









<script type="text/javascript">
var ctx = document.getElementById("myChart4").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["<  1","1 - 2","3 - 4","5 - 9","10 - 14","15 - 19","20 - 24","25 - 29","> - 29"],
    datasets: [{
      label: 'Employee',
      backgroundColor: "#caf270",
      data: [12, 59, 5, 56, 58,12, 59, 87, 45],
    }, {
      label: 'Engineer',
      backgroundColor: "#45c490",
      data: [12, 59, 5, 56, 58,12, 59, 85, 23],
    }, {
      label: 'Government',
      backgroundColor: "#008d93",
      data: [12, 59, 5, 56, 58,12, 59, 65, 51],
    }, {
      label: 'Political parties',
      backgroundColor: "#2e5468",
      data: [12, 59, 5, 56, 58, 12, 59, 12, 74],
    }],
  },
options: {
    tooltips: {
      displayColors: true,
      callbacks:{
        mode: 'x',
      },
    },
    scales: {
      xAxes: [{
        stacked: true,
        gridLines: {
          display: false,
        }
      }],
      yAxes: [{
        stacked: true,
        ticks: {
          beginAtZero: true,
        },
        type: 'linear',
      }]
    },
    responsive: true,
    maintainAspectRatio: false,
    legend: { position: 'bottom' },
  }
});

</script>

