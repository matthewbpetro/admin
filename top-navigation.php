<?php //StationPRO Software Solutions v1.0 ?>

<div id="wrapper">
<!-- Top Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
<div class="navbar-header">
	<div class="top-left-part">
    <a class="logo" href="../index.php">
    <b><img src="../assets/images/admin-logo.png" alt="home" class="light-logo" /></b>
    <span class="hidden-xs">
    <img src="../assets/images/admin-text.png" alt="home" class="light-logo" />
    </span> 
    </a>
    </div>
                
<ul class="nav navbar-top-links navbar-left">
    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>
    <li class="dropdown">
    <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript:void(0)"> <i class="mdi mdi-gmail"></i>
    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
    </a>
                        
<ul class="dropdown-menu mailbox animated bounceInDown">
    <li>
    <div class="drop-title">You have 1 new message</div>
    </li>
    <li>
    <div class="message-center">
    <a href="javascript:void(0)">
    <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
    <div class="mail-contnet">
    <h5>Pavan kumar</h5> <span class="mail-desc">This is where text will go.</span> <span class="time">9:30 AM</span> </div>
    </a>
    </div>
    </li>
    <li>
    <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
    </li>
</ul>
</li>
                    
<li class="dropdown">
	<a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript:void(0)"> <i class="mdi mdi-check-circle"></i>
	<div class="notify"><span class="heartbit"></span><span class="point"></span></div>
	</a>
<ul class="dropdown-menu dropdown-tasks animated slideInUp">
	<li>
	<a href="javascript:void(0)">
	<div>
	<p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
	<div class="progress progress-striped active">
	<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
	</div>
	</div>
	</a>
	</li>
	<li class="divider"></li>
	<li>
	<a class="text-center" href="javascript:void(0)"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
	</li>
</ul>
</li>
   
<?php
require_once 'megamenu.php';
?>

</ul>
               
<ul class="nav navbar-top-links navbar-right pull-right">
	<li>
	<form role="search" class="app-search hidden-sm hidden-xs m-r-10">
	<input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> 
    </form>
    </li>
                    
<li class="dropdown">
	<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="javascript:void(0)"> <img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Matthew</b><span class="caret"></span> </a>

<ul class="dropdown-menu dropdown-user animated flipInY">
	<li>
	<div class="dw-user-box">
	<div class="u-img"><img src="../plugins/images/users/varun.jpg" alt="user" /></div>
	<div class="u-text"><h4>Matthew Petro</h4><p class="text-muted">mpetro@stationprosoftware.com</p><a href="../profile.php" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
	</div>
	</li>
	<li role="separator" class="divider"></li>
	<li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
	<li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Tasks</a></li>
	<li><a href="javascript:void(0)"><i class="ti-email"></i> My Messages</a></li>
	<li role="separator" class="divider"></li>
	<li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Settings</a></li>
	<li role="separator" class="divider"></li>
	<li><a href="../logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
</ul>
</li>

</ul>
</div>
</nav>
<!-- End Top Navigation -->