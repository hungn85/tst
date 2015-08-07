<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('about2.html');
    echo $template->render(array());