<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('promotion.html');
    echo $template->render(array());