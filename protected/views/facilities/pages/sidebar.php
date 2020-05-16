<?php
    if($sport=="indian")
		$sport2="Indian Games";
	elseif($sport=="tennis")
		$sport2="Lawn Tennis";
	elseif($sport=="tt")
		$sport2="Table Tennis";
	else $sport2=ucfirst($sport);
?>
<aside class="col-md-2 sidebar sidebar-left">   
   <div class="panel-group" id="accordion">
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a href="index.php?r=sports/<?php echo "$sport2" ?>">
                   Home</a>
               </h4>
           </div>
       </div>
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">                  
                   Events</a>
               </h4>
           </div>
           <div id="collapseTwo" class="panel-collapse collapse">
               <div class="panel-body">
                   <table class="table">
                       <tr>
                           <td>
                               <a href="http://www.jquery2dotnet.com">Event 1</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="http://www.jquery2dotnet.com">Event 2</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="http://www.jquery2dotnet.com">Event 3</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="http://www.jquery2dotnet.com">Event 4</a>
                           </td>
                       </tr>
                   </table>
               </div>
           </div>
       </div>
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a href="index.php?r=facilities/page&view=<?php echo "$sport2" ?>">
                   Facilities</a>
               </h4>
           </div>
       </div>
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                   People</a>
               </h4>
           </div>
           <div id="collapseFour" class="panel-collapse collapse">
               <div class="panel-body">
                   <table class="table">
                       <tr>
                           <td>
                               <a href="index.php?r=sports/people&sport=<?php echo "$sport" ?>">Contact</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="index.php?r=sports/team&sport=<?php echo "$sport" ?>">Team</a>
                           </td>
                       </tr>
                       <tr>
                           <td>
                               <a href="index.php?r=sports/halloffame&sport=<?php echo "$sport" ?>">Hall of Fame</a>
                           </td>
                       </tr>
                   </table>
               </div>
           </div>
       </div>
       <div class="panel panel-default">
           <div class="panel-heading">
               <h4 class="panel-title">
                   <a href="index.php?r=sports/gallery&sport=<?php echo "$sport" ?>">
                   Gallery</a>
               </h4>
           </div>
       </div>
   </div>     
</aside>