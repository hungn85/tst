<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('customers_regular.html');
    echo $template->render(array());