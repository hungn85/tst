<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('booking_step3.html');
    echo $template->render(array());