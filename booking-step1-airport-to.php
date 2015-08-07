<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('booking_step1_airport_to.html');
    echo $template->render(array());