<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('shipping_partner.html');
    echo $template->render(array());