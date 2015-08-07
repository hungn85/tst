<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('account.html');
    echo $template->render(array());