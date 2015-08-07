<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('blog.html');
    echo $template->render(array());