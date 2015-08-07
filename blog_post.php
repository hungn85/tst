<?php 
	
	require "bootstrap.php";
    $template = $twig->loadTemplate('blog_post.html');
    echo $template->render(array());