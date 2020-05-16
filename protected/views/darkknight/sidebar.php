<?php $sport="The Dark Knight";
      $sport2="darkknight";
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
                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">                  
                   Tournaments</a>
               </h4>
           </div>
           <div id="collapseTwo" class="panel-collapse collapse">
               <div class="panel-body">
                   <table class="table">
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport2" ?>/page&view=rapidopen">IIT Bombay Rapid Chess Open Tournament</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport2" ?>/page&view=blitz">Institute Blitz Championship</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport2" ?>/page&view=rapidchampionship">Institute Rapid Championship</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="index.php?r=<?php echo "$sport2" ?>/page&view=candidates">Candidates Tournament</a>
                           </td>
                       </tr>
                   </table>
               </div>
           </div>
       </div>
        <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a href="index.php?r=<?php echo "$sport2" ?>/contact">
                   Contact</a>
               </h4>
           </div>
       </div>
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a href="index.php?r=<?php echo "$sport2" ?>/gallery">
                   Gallery</a>
               </h4>
           </div>
       </div>
   </div>           
</aside>      <!-- /Sidebar -->