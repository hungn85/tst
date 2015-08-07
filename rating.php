<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('rating.html');
    echo $template->render(array());