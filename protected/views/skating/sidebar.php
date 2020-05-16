<?php $sport="Skating";
      $sport2="skating";
?>

<aside class="col-md-2 sidebar sidebar-left">       
   <div class="panel-group" id="accordion">
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a href="index.php?r=<?php echo "$sport2" ?>">
                   Home</a>
               </h4>
           </div>
       </div>
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a href="index.php?r=<?php echo "$sport2" ?>/page&view=events">
                   Events</a>
               </h4>
           </div>
       </div>
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a href="index.php?r=<?php echo "$sport2" ?>/page&view=facilities">
                   Facilities</a>
               </h4>
           </div>
       </div>
        <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a href="index.php?r=<?php echo "$sport" ?>/contact">
                   Contact</a>
               </h4>
           </div>
       </div>
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a href="index.php?r=<?php echo "$sport" ?>/gallery">
                   Gallery</a>
               </h4>
           </div>
       </div>
   </div>           
</aside>      <!-- /Sidebar -->