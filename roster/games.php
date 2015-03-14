<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php

	$ROOT = '..';
	
	include_once($ROOT . PathDir::$PATHDIR);
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	
	$JQUERY = $ROOT . PathDir::$JQUERY;
	$BS_CSS = $ROOT . PathDir::$BS_CSS;
	$BS_JS  = $ROOT . PathDir::$BS_JS;
	$CSS_GLOBAL = $ROOT . PathDir::$CSS . 'global.css';
 ?>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Miacro Power Clan - MPC Gaming.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<?php
		$print = 
	   "<script src='{$JQUERY}' type='text/jscript'></script>
		<link href='{$BS_CSS}' rel='stylesheet'/>
		<script src='{$BS_JS}' type='text/jscript'></script>
		<link href='{$CSS_GLOBAL}' rel='stylesheet'/>";
		echo ($print);
	 ?>
	<link href="../rostercss/roster.css" rel="stylesheet"/>
	<meta name="keywords" content="MPC, SC2, MPCGaming.com"/>
	<meta name="description" content="SC2 MPC Gaming. Tournaments, Clan Wars, Teaching, Training, Coaching, Community Clan, Ladders, Clan Ranking" />
</head>

<body>
	
	<?php
		include_once('../includes/navbar.php');
		include_once('../includes/footer.php');
	 ?>

	<div class="container-fluid">
		
		<?php PrintNavbar("roster"); ?>

	</div>

	   <div class="row">
           
            <div class="col-xs-3">
                <?php include('searchbtn.php'); ?>
                <br />
                <?php include('dynamicsearchfield.php'); $dynamicsearch = "games"; ?>
            </div>
            <div class="col-xs-9">
                <?php include('dynamicinfo.php'); ?>
            </div>
        </div>
	
	<div class="container-fluid">
		
		<?php PrintFooter(); ?>

	</div><!--container--> 
</body>

</html>