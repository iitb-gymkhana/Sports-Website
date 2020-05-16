<?php

$this->pageTitle="GC Results - ". Yii::app()->name;

?>
<script type="text/javascript" src="js/loader.js"></script>
<script type="text/javascript" src="js/jsapi.js"></script>
<script type="text/javascript">
      // google.load("visualization", "1", {packages:["imagebarchart"]});
      google.charts.load('visualization', {packages: ['corechart', 'bar']});
      console.log("chart");
      // google.setOnLoadCallback(drawChart);
      setTimeout(function() {
      // google.charts.load('visualization', {packages: ['corechart', 'bar']});
        var boysdata = google.visualization.arrayToDataTable([
          [
            'Hostel',
            'Athletics', 
            'Badminton', 
            'Basketball', 
            'Carrom', 
            'Chess', 
            'Cricket', 
            'Crossy', 
            'Football', 
            'Hockey', 
            'Kho Kho', 
            'Lawn Tennis', 
            'Squash', 
            'Swimming',
            'Table Tennis', 
            'Triathlon', 
            'Tug of War', 
            'Volleyball', 
            'Waterpolo', 
            'Weightlifting',
            { role: 'annotation' }
          ],
         <?php //for ($x = 1; $x <= 13; $x++) { ?>
            <?php foreach($result as $item) { if($item['Girls']==0) { ?>
          <?php
          		$item['Overall'] = $item['Athletics']+$item['Badminton']+$item['Basketball']+$item['Carrom']+$item['Chess']+$item['Cricket']+$item['Crossy (Fall)']+$item['Football']+$item['Hockey']+$item['Kho Kho']+$item['Lawn Tennis']+$item['Squash']+$item['Swimming']+$item['Table Tennis']+$item['Triathlon']+$item['Tug of War']+$item['Volleyball']+$item['Waterpolo']+$item['Weightlifting'];

           echo "['".$item['Hostel']."',".$item['Athletics'].",".$item['Badminton'].",".$item['Basketball'].",".$item['Carrom'].",".$item['Chess'].",".$item['Cricket'].",".$item['Crossy (Fall)'].",".$item['Football'].",".$item['Hockey'].",".$item['Kho Kho'].",".$item['Lawn Tennis'].",".$item['Squash'].",".$item['Swimming'].",".$item['Table Tennis'].",".$item['Triathlon'].",".$item['Tug of War'].",".$item['Volleyball'].",".$item['Waterpolo'].",".$item['Weightlifting'].",".$item['Overall']."]" ;
            echo ",";
        }}?>
        ]);

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

        chart.draw(boysdata, {width: '100%', height: '100%', min: 0, isStacked  : true, chartArea: {
            left: "5%",
            top: "5%",
            height: "90%",
            width: "80%"
        },
        annotations: {
          alwaysOutside: true,
          textStyle: {
            fontSize: 17,
            color: '#111'
          }},
        });

        var girlsdata = google.visualization.arrayToDataTable([
          ['Hostel', 'Athletics', 'Badminton', 'Carrom', 'Chess', 'Cricket', 'Crossy (Fall)', 'Kho Kho', 'Lawn Tennis', 'Squash', 'Swimming', 'Table Tennis', 'Throwball', 'Triathlon', 'Tug of War', 'Volleyball',{ role: 'annotation' }],
          <?php// for ($x = 1; $x <= 13; $x++) { ?>
            <?php foreach($result as $item) { if($item['Girls']==1) { ?>
          <?php 
          $item['Overall'] = $item['Athletics']+$item['Badminton']+$item['Carrom']+$item['Chess']+$item['Cricket']+$item['Crossy (Fall)']+$item['Kho Kho']+$item['Lawn Tennis']+$item['Squash']+$item['Swimming']+$item['Table Tennis']+$item['Throwball']+$item['Triathlon']+$item['Tug of War']+$item['Volleyball'];

          echo "['".$item['Hostel']."',".$item['Athletics'].",".$item['Badminton'].",".$item['Carrom'].",".$item['Chess'].",".$item['Cricket'].",".$item['Crossy (Fall)'].",".$item['Kho Kho'].",".$item['Lawn Tennis'].",".$item['Squash'].",".$item['Swimming'].",".$item['Table Tennis'].",".$item['Throwball'].",".$item['Triathlon'].",".$item['Tug of War'].",".$item['Volleyball'].",".$item['Overall']."]" ;
            echo ",";
        }}?>
        ]);

        var chart1 = new google.visualization.BarChart(document.getElementById('chart_div1'));

        chart1.draw(girlsdata, {width: '100%', height: '100%', min: 0, isStacked  : true, chartArea: {
            left: "5%",
            top: "5%",
            height: "90%",
            width: "80%"
        },
         annotations: {
          alwaysOutside: true,
          textStyle: {
            fontSize: 17,
            color: '#111'
          }},

    });

        var pgdata = google.visualization.arrayToDataTable([
          ['Department', 'Athletics', 'Badminton', 'Basketball', 'Carrom', 'Chess', 'Cricket', 'Crossy', 'Cycling', 'Kho Kho', 'Lawn Tennis', 'Squash','Swimming' , 'Table Tennis', 'Tug of War','Volleyball', 'Waterpolo', 'Weightlifting',{ role: 'annotation' }],
          // <?php// for ($x = 1; $x <= 13; $x++) { ?>
            <?php foreach($pg_boys as $item) {  ?>
          <?php 
          $item['Overall'] = $item['Athletics']+$item['Badminton']+$item['Basketball']+$item['Carrom']+$item['Chess']+$item['Cricket']+$item['Crossy']+$item['Football']+$item['Hockey']+$item['Kho Kho']+$item['Lawn Tennis']+$item['Squash']+$item['Swimming']+$item['Table Tennis']+$item['Tug of War']+$item['Volleyball']+$item['Waterpolo']+$item['Weightlifting'];

          echo "['".$item['Department']."',".$item['Athletics'].",".$item['Badminton'].",".$item['Basketball'].",".$item['Carrom'].",".$item['Chess'].",".$item['Cricket'].",".$item['Crossy'].",".$item['Cycling'].",".$item['Kho Kho'].",".$item['Lawn Tennis'].",".$item['Squash'].",".$item['Swimming'].",".$item['Table Tennis'].",".$item['Tug of War'].",".$item['Volleyball'].",".$item['Waterpolo'].",".$item['Weightlifting'].",".$item['Overall']."]" ;
            echo ",";
        }?>
        ]);

        var chart2 = new google.visualization.BarChart(document.getElementById('chart_div2'));

        chart2.draw(pgdata, {width: '100%', height: '100%', min: 0, isStacked  : true, chartArea: {
            left: "5%",
            top: "5%",
            height: "90%",
            width: "80%"
        },
         annotations: {
          alwaysOutside: true,
          textStyle: {
            fontSize: 17,
            color: '#111'
          }},
    });

        var pgdata_girls = google.visualization.arrayToDataTable([
          ['Department', 'Athletics', 'Badminton', 'Basketball', 'Carrom', 'Chess', 'Cricket', 'Crossy', 'Cycling', 'Kho Kho', 'Lawn Tennis', 'Squash','Swimming' , 'Table Tennis', 'Tug of War','Volleyball', 'Waterpolo', 'Weightlifting',{ role: 'annotation' }],
          // <?php// for ($x = 1; $x <= 13; $x++) { ?>
            <?php foreach($pg_girls as $item) {  ?>
          <?php 
          $item['Overall'] = $item['Athletics']+$item['Badminton']+$item['Basketball']+$item['Carrom']+$item['Chess']+$item['Cricket']+$item['Crossy']+$item['Football']+$item['Hockey']+$item['Kho Kho']+$item['Lawn Tennis']+$item['Squash']+$item['Swimming']+$item['Table Tennis']+$item['Tug of War']+$item['Volleyball']+$item['Waterpolo']+$item['Weightlifting'];

          echo "['".$item['Department']."',".$item['Athletics'].",".$item['Badminton'].",".$item['Basketball'].",".$item['Carrom'].",".$item['Chess'].",".$item['Cricket'].",".$item['Crossy'].",".$item['Cycling'].",".$item['Kho Kho'].",".$item['Lawn Tennis'].",".$item['Squash'].",".$item['Swimming'].",".$item['Table Tennis'].",".$item['Tug of War'].",".$item['Volleyball'].",".$item['Waterpolo'].",".$item['Weightlifting'].",".$item['Overall']."]" ;
            echo ",";
        }?>
        ]);
        var chart3 = new google.visualization.BarChart(document.getElementById('chart_div3'));

        chart3.draw(pgdata_girls, {width: '100%', height: '100%', min: 0, isStacked  : true, chartArea: {
            left: "5%",
            top: "5%",
            height: "90%",
            width: "80%"
        },
         annotations: {
          alwaysOutside: true,
          textStyle: {
            fontSize: 17,
            color: '#111'
          }},
    });

      }, 1000);
</script>

<body>
  <?php var_export($result, true) ?>
  <div class="fh5co-overlay" style=" height: 80px;"></div>
  <div class="fh5co-section-gray">
       <div id="fh5co-services-section" class="fh5co-section-gray ">
         <h2 style="margin-top:30px" align="center"> GC TALLY 2018-19</h2>
		 <p align="center">The graphs may take some time to load so please be patient. If they don't load after 10-20 sec, refresh the page.</p>
         <h3 align="center">Boys GC</h3>
            <div class="container">
                <div class="row">
                    <div id="chart_div" style="width: 100%; min-height:700px"></div>
                </div>
            </div>
        </div>

        <div id="fh5co-services-section" class="fh5co-section-gray">
           <h3 align="center">Girls GC</h3>
            <div class="container">
                <div class="row">
                    <div id="chart_div1" style="width: 100%; min-height:700px"></div>
                </div>
            </div>
            <br>
            <!--<p class="small" align="center"><b>NOTE:</b> Basketball is a mock GC and will not carry any points</p>-->
        </div>
        <div id="fh5co-services-section" class="fh5co-section-gray">
           <h3 align="center">PGGC Boys</h3>
            <div class="container">
                <div class="row">
                    <div id="chart_div2" style="width: 100%; min-height:700px"></div>
                </div>
            </div>
        </div>
        <div id="fh5co-services-section" class="fh5co-section-gray">
           <h3 align="center">PGGC Girls</h3>
            <div class="container">
                <div class="row">
                    <div id="chart_div3" style="width: 100%; min-height:700px"></div>
                </div>
            </div>
        </div>
      </div>
	  <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Go to the top of the page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
</body>
