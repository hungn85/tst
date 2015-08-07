<?php 
	
	require "bootstrap.php";
  $template = $twig->loadTemplate('about3.html');
  echo $template->render(array());