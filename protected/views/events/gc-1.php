<?php 

$this->pageTitle="GC Results - ". Yii::app()->name;

?>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-sortable.css">

<header id="head" class="secondary"></header>

<div class="container">
    <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Events</li>
            <li class="active">GC Results</li>
        </ol>

<div class="row">
            
        <article class="maincontent">
            <header class="page-header">
                <h1 class="page-title">GC Results</h1>
            </header>	

     <p>Please click on any table header to sort in ascending or descending order</p>
    <h2>Boys GC</h2>
        <table class='col-xl-12 table table-bordered table-striped sortable' style="text-align:center">
            <thead>
                <tr>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" data-firstsort="asc" data-defaultsort='asc'>GC / Hostel</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Athl etics</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Badm inton</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Basket ball</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Car rom</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Chess</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Cri cket</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Crossy</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Foot ball</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Hoc key</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Kho Kho</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Lawn Tennis</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Squash</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Swim ming</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Table Tennis</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Tri athlon</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Tug of War</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Volley ball</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Water polo</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Weight lifting</th>
                    <th style="font-size:20px; width: 5%; vertical-align: middle;text-align: center;" colspan="1" data-firstsort="desc">Overall</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($result as $item) { if($item['Girls']==0) { ?>
            <tr>
                <td style="font-size:20px;width: 5%"><a href="<?php echo $item['Site']; ?>" target="_blank"><?php echo $item['Hostel']; ?></a></td>
                <td style="width: 5%"><?php echo $item['Athletics']; ?></td>
                <td style="width: 5%"><?php echo $item['Badminton']; ?></td>
                <td style="width: 5%"><?php echo $item['Basketball']; ?></td>
                <td style="width: 5%"><?php echo $item['Carrom']; ?></td>
                <td style="width: 5%"><?php echo $item['Chess']; ?></td>
                <td style="width: 5%"><?php echo $item['Cricket']; ?></td>
                <td style="width: 5%"><?php echo $item['Crossy']; ?></td>
                <td style="width: 5%"><?php echo $item['Football']; ?></td>
                <td style="width: 5%"><?php echo $item['Hockey']; ?></td>
                <td style="width: 5%"><?php echo $item['Kho Kho']; ?></td>
                <td style="width: 5%"><?php echo $item['Lawn Tennis']; ?></td>
                <td style="width: 5%"><?php echo $item['Squash']; ?></td>
                <td style="width: 5%"><?php 
                                            if($item['Hostel']== 2)
                                                $item['Swimming'] = 12;
                                                else if($item['Hostel']== 7)
                                                $item['Swimming'] = 9;
                                                else if($item['Hostel']== 8)
                                                $item['Swimming'] = 6;
                                                else if($item['Hostel']== 4)
                                                $item['Swimming'] = 4;
                                            else
                                                $item['Swimming'] = 0;
                                            echo $item['Swimming'];
                                                 ?></td>
                <td style="width: 5%"><?php echo $item['Table Tennis']; ?></td>
                <td style="width: 5%"><?php echo $item['Triathlon']; ?></td>
                <td style="width: 5%"><?php echo $item['Tug of War']; ?></td>
                <td style="width: 5%"><?php echo $item['Volleyball']; ?></td>
                <td style="width: 5%"><?php echo $item['Waterpolo']; ?></td>
                <td style="width: 5%"><?php echo $item['Weightlifting']; ?></td>
                <td style="font-size:20px;width: 5%"><?php echo array_sum($item)-$item['Hostel']-$item['id']; ?></td>
            </tr>
            <?php } } ?>
            </tbody>
        </table>

        <br><hr><br>
         <h2>Girls GC</h2>
        <table class='col-xl-12 table table-bordered table-striped sortable' style="text-align:center">
            <thead>
                <tr>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" data-firstsort="asc" data-defaultsort='asc'>GC / Hostel</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Athletics</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Badm inton</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Carrom</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Chess</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Crossy</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Kho Kho</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Lawn Tennis</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Squash</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Swim ming</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Table Tennis</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Throw ball</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Tria thlon</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Tug of War</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Volley ball</th>
                    <th style="font-size:20px; width: 5%; vertical-align: middle;text-align: center;" colspan="1" data-firstsort="desc">Overall</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($result as $item) { if($item['Girls']==1) { ?>
            <tr>
                <td style="font-size:20px;width: 5%"><a href="<?php echo $item['Site']; ?>" target="_blank"><?php echo $item['Hostel']; ?></a></td>
                <td style="width: 5%"><?php echo $item['Athletics']; ?></td>
                <td style="width: 5%"><?php echo $item['Badminton']; ?></td>
                <td style="width: 5%"><?php echo $item['Carrom']; ?></td>
                <td style="width: 5%"><?php echo $item['Chess']; ?></td>
                <td style="width: 5%"><?php echo $item['Crossy']; ?></td>
                <td style="width: 5%"><?php echo $item['Kho Kho']; ?></td>
                <td style="width: 5%"><?php echo $item['Lawn Tennis']; ?></td>
                <td style="width: 5%"><?php echo $item['Squash']; ?></td>
                <td style="width: 5%"><?php if($item['Hostel']== "15C")
                                                $item['Swimming'] = 12;
                                            else if($item['Hostel']== "10A")
                                                $item['Swimming'] = 9;
                                            else if($item['Hostel']== "10B")
                                                $item['Swimming'] = 6;
                                                else
                                                    $item['Swimming'] = 0;
                                                echo $item['Swimming'] ;?></td>
                <td style="width: 5%"><?php echo $item['Table Tennis']; ?></td>
                <td style="width: 5%"><?php echo $item['Throwball']; ?></td>
                <td style="width: 5%"><?php echo $item['Triathlon']; ?></td>
                <td style="width: 5%"><?php echo $item['Tug of War']; ?></td>
                <td style="width: 5%"><?php echo $item['Volleyball']; ?></td>
                <td style="font-size:20px;width: 5%"><?php echo array_sum($item)-$item['Hostel']-$item['id']-1; ?></td>
            </tr>
            <?php } } ?>
            </tbody>
        </table>
        <p><b>NOTE:</b> Basketball is a mock GC and will not carry any points

        <br><hr><br>
         <h2>PG GC</h2>
        <table class='col-xl-12 table table-bordered table-striped sortable' style="text-align:center">
            <thead>
                <tr>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" data-firstsort="asc" data-defaultsort='asc'>GC / Dept</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Athl etics</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Badm inton</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Basket ball</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Carrom</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Chess</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Crossy</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Cycling</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Kho Kho</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Lawn Tennis</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Squash</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Swim ming</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Table Tennis</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Tug of War</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Volley ball</th>
                    <th style="width: 5%; vertical-align: middle; text-align: center;" colspan="1" data-firstsort="desc">Water polo</th>
                    <th style="font-size:20px; width: 5%; vertical-align: middle;text-align: center;" colspan="1" data-firstsort="desc">Overall</th>
                </tr>
            </thead>

            <tbody>
            <?php foreach($pg as $item) {  ?>
            <tr>
                <td style="font-size:20px;width: 5%"><?php echo $item['Department']; ?></td>
                <td style="width: 5%"><?php echo $item['Athletics']; ?></td>
                <td style="width: 5%"><?php echo $item['Badminton']; ?></td>
                <td style="width: 5%"><?php echo $item['Basketball']; ?></td>
                <td style="width: 5%"><?php echo $item['Carrom']; ?></td>
                <td style="width: 5%"><?php echo $item['Chess']; ?></td>
                <td style="width: 5%"><?php echo $item['Crossy']; ?></td>                
                <td style="width: 5%"><?php echo $item['Cycling']; ?></td>
                <td style="width: 5%"><?php echo $item['Kho Kho']; ?></td>
                <td style="width: 5%"><?php echo $item['Lawn Tennis']; ?></td>
                <td style="width: 5%"><?php echo $item['Squash']; ?></td>
                <td style="width: 5%"><?php echo $item['Swimming']; ?></td>
                <td style="width: 5%"><?php echo $item['Table Tennis']; ?></td>
                <td style="width: 5%"><?php echo $item['Tug of War']; ?></td>
                <td style="width: 5%"><?php echo $item['Volleyball']; ?></td>
                <td style="width: 5%"><?php echo $item['Waterpolo']; ?></td>
                <td style="font-size:20px;width: 5%"><?php echo array_sum($item)-$item['Department']-$item['id']; ?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

    </div>
    </article>
    </div>
</div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src='js/bootstrap-sortable.js'></script>

    <script>
        function customSort() {
            alert("Custom sort.");
        }

        (function () {
            var $table = $('table');
    
            $('button.change-sort').on('click', function () {
                var $this = $(this);
                if ($this.data('custom')) { $.bootstrapSortable(true, undefined, customSort); } else { $.bootstrapSortable(true, undefined, 'default'); }
            });


            $('#event').on('change', function () {
                var $this = $(this);
                if ($this.is(':checked')) {
                }
                else {
                    $table.off('sorted');
                }
            });

            $("input[name=sign]:radio").change(function () {
                $.bootstrapSortable(true, $(this).val());
            });

        }());
    </script>
</body>