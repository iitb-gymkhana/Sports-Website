<?php $sport="Weightlifting";
      $sport2="weightlifting";
?>

<div class="navbar navbar-inverse navbar-fixed-bottom headroom animated">
    <div class="container">
      <div class="navbar-header">
        <!-- Button for smallest screens -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" style="position:relative; left: 50%;-webkit-transform: translateX(-50%);transform: translateX(-50%)">
          <li><a style="text-transform:uppercase" href="index.php?r=<?php echo "$sport2" ?>"><?php echo "$sport" ?> </a></li>
          <li><a href="index.php?r=<?php echo "$sport2" ?>/page&view=events">EVENTS</a></li>
          <li><a href="index.php?r=<?php echo "$sport2" ?>/page&view=facilities">FACILITIES</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PEOPLE <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="index.php?r=<?php echo "$sport2" ?>/contact">CONTACT</a></li>
              <li ><a href="index.php?r=<?php echo "$sport2" ?>/team&sport=<?php echo "$sport2" ?>">TEAM</a></li>
              <li ><a href="index.php?r=<?php echo "$sport2" ?>/halloffame">HALL OF FAME</a></li>
            </ul>
          </li>
          
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>