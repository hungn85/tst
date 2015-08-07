<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('invite-friend.html');
    echo $template->render(array());