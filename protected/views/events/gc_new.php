  <?php
  $this->pageTitle="GC Results - ". Yii::app()->name;
  ?>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/loader.js"></script>
  <script type="text/javascript" src="js/jsapi.js"></script>
  <script type="text/javascript" src="js/Chart.min.js"></script>

  <body>
    <div class="fh5co-overlay" style=" height: 80px;"></div>
    <div class="fh5co-section-gray">
      <div id="fh5co-services-section" class="fh5co-section-gray ">
        <h2 style="margin-top:30px" align="center"> GC TALLY 2019-20</h2>
		    <h3 align="center">Boys GC</h3>
        <div class="container">
          <div class="row">
            <canvas id="chart_div" style="min-height: 800px"></canvas>
          </div>
        </div>
      </div>

      <div id="fh5co-services-section" class="fh5co-section-gray">
        <h3 align="center">Girls GC</h3>
        <div class="container">
          <div class="row">
            <canvas id="chart_div1" style="min-height: 800px"></canvas>
          </div>
        </div>
      </div>

      <!-- <div id="fh5co-services-section" class="fh5co-section-gray">
        <h3 align="center">PG-GC Boys</h3>
        <div class="container">
          <div class="row">
            <div id="chart_div2"></div>
          </div>
        </div>
      </div>
      
      <div id="fh5co-services-section" class="fh5co-section-gray">
        <h3 align="center">PG-GC Girls</h3>
        <div class="container">
          <div class="row">
            <div id="chart_div3"></div>
          </div>
        </div>
      </div> -->

      <script type="text/javascript">
        var colors = [
          'rgba(255, 99, 132,', 'rgba(255, 206, 86,', 'rgba(75, 192, 192,', 'rgba(54, 162, 235,',
          'rgba(153, 102, 255,', 'rgba(255, 159, 64,', "rgba(103,6,0,", "rgba(222,72,249,",
          "rgba(68,232,210,", "rgba(57,150,234,", "rgba(254,74,230,", "rgba(94,15,181,",
          "rgba(12,199,81,", "rgba(253,101,127,", "rgba(31,208,140,", "rgba(159,45,153,",
          "rgba(237,228,30,", "rgba(70,231,56,", "rgba(125,163,214,", "rgba(40,58,226,",
          "rgba(64,191,61,", "rgba(196,211,2,"
        ];

       //  var dynamicColors = function() {
       //    var r = Math.floor(Math.random() * 255);
       //    var g = Math.floor(Math.random() * 255);
       //    var b = Math.floor(Math.random() * 255);
       //    return "rgb(" + r + "," + g + "," + b + ",";
       // };

        var ug = '<?php echo json_encode($ug) ?>';
        ug = JSON.parse(ug);
        var ug_tally = Object.keys(ug).map(function(k) {return ug[k]});
        var boys_chartDataset = {}, girls_chartDataset = {};
        var listcolors = {}

        Object.keys(ug_tally[0]).forEach(function(sport, index) {
          if(sport != 'id' && sport != 'Hostel' && sport != 'Girls' && sport != 'Site'){
            // base = dynamicColors();
            // bg = base + "0.2)";
            // bc = base + "1.0)";
            // listcolors[sport] = bg;
            boys_chartDataset[sport] = {
              label : sport,
              backgroundColor : colors[index] + "0.2)",
              // backgroundColor : bg,
              // borderColor : bc,
              borderColor : colors[index] + "1.0)",
              borderWidth : 1,
              data: []
            };
            girls_chartDataset[sport] = {
              label : sport,
              backgroundColor : colors[index] + "0.2)",
              // backgroundColor : bg,
              // borderColor : bc,
              borderColor : colors[index] + "1.0)",
              borderWidth : 1,
              data: []
            };
          }
        });
        // console.log(listcolors);

        boys_hostels = [];
        girls_hostels = [];
        boys_total = {};
        girls_total = {};

        ug_tally.forEach(function(hostel_tally) {
        	var isGirlsHostel = hostel_tally['Girls'] == 0 ? false : true;

        	if(isGirlsHostel){
              girls_hostels.push(hostel_tally['Hostel']);
              girls_total[hostel_tally['Hostel']] = 0;
        	}
            else{
              boys_hostels.push(hostel_tally['Hostel']);
              boys_total[hostel_tally['Hostel']] = 0;
            }

            Object.keys(hostel_tally).forEach(function(sport) {
              if(sport != 'id' && sport != 'Hostel' && sport != 'Girls' && sport != 'Site'){
                if(!isGirlsHostel){
                  boys_chartDataset[sport].data.push(parseFloat(hostel_tally[sport]));
                  boys_total[hostel_tally['Hostel']] += parseFloat(hostel_tally[sport]);
                }
                else{
                  girls_chartDataset[sport].data.push(parseFloat(hostel_tally[sport]));
                  girls_total[hostel_tally['Hostel']] += parseFloat(hostel_tally[sport]);
                }
              }
            });
        })
        
        var boys_barChartData = {
          labels: boys_hostels,
          datasets: Object.values(boys_chartDataset)
        };

        var boys_ctx = document.getElementById("chart_div");
        const formatter = (value, ctx) => {
          const otherDatasetIndex = ctx.datasetIndex === 0 ? 1 : 0;
          const total =
            ctx.chart.data.datasets[otherDatasetIndex].data[ctx.dataIndex] + value;

          return `${(value / total * 100).toFixed(0)}%`;
          // return `$total`;
        };

        var boysChart = new Chart(boys_ctx, {
            type: 'bar',
            data: boys_barChartData,
            options: {
            	maintainAspectRatio: false,
              tooltips: {
                mode: 'point',
                intersect: true,
                callbacks: {
                	title: function(tooltipitems, data) {
                		return 'Hostel ' + tooltipitems[0].xLabel;
                	},
                	afterTitle: function(tooltipitems, data) {
                		return 'Total - ' + boys_total[tooltipitems[0].xLabel];
                	}
                }
              },
              animation: {
                onComplete: function(animation) {
                  console.log(animation);
                  var chartInstance = this.chart, ctx = chartInstance.ctx;
                }
              },
              scales: {
                xAxes: [{
                  stacked: true,
                  gridLines: {
                  	display: true
                  },
                }],
                yAxes: [{
                  stacked: true,
                  ticks: {
                  	max: Math.max(...Object.values(boys_total)) + 10,
                  	display: true,
                  	beginAtZero: true
                  },
                }]
              }
            }
        });

        var girls_barChartData = {
          labels: girls_hostels,
          datasets: Object.values(girls_chartDataset)
        };

        var girls_ctx = document.getElementById("chart_div1");
        var girlsChart = new Chart(girls_ctx, {
            type: 'bar',
            data: girls_barChartData,
            options: {
            	maintainAspectRatio: false,
                tooltips: {
                  mode: 'point',
                  intersect: true,
                  callbacks: {
                  	title: function(tooltipitems, data) {
                  		return 'Hostel ' + tooltipitems[0].xLabel;
                  	},
                  	afterTitle: function(tooltipitems, data) {
                  		return 'Total - ' + girls_total[tooltipitems[0].xLabel];
                  	}
                  }
                },
                scales: {
                  xAxes: [{
                    stacked: true,
                  }],
                  yAxes: [{
                    stacked: true,
                    ticks: {
                    	max: Math.max(...Object.values(girls_total)) + 5,
                    	display: true,
                    	beginAtZero: true
                    }
                  }]
                }
            }
        });
      </script>
    </div>
	  <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Go to the top of the page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
  </body>
