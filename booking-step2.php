<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('booking_step2.html');
    echo $template->render(array());