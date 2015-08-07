<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('institutional_customers.html');
    echo $template->render(array());