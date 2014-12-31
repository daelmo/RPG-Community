<?php 
	require_once './php_inc/inc.header.php';
//CREATE FILE
	//create site
	$site = new mainsite(1);
	//create Session
	
//CREATE PAGE	
	require_once 'php_inc/inc.htmlhead.php';
	require_once 'php_inc/inc.htmlmenu.php';
	//build Slider
	$site->getSlider()->build();
?> 



	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" ></script>  
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.5.3/jquery-ui.min.js" ></script> 
		
<?php
require_once './php_inc/inc.footer.php';
?>