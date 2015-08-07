<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('about1.html');
    echo $template->render(array());