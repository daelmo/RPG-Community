<?php 
	require_once './php_inc/inc.header.php';
	//create site
	$site = new mainsite();

	//create Session
	$site->getSession()->startSession();
?> 

<!--- content --->



<?php
require_once './php_inc/inc.footer.php';
?>