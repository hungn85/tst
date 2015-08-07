<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('widget.html');
    echo $template->render(array());