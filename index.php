<?php 
	include 'vendor/autoload.php'; 

	$loader = new Twig_Loader_Filesystem('views/');
	$twig = new Twig_Environment($loader, array(
		'index' => 'index',
	));

	$page = $_GET['url'];

	if ($page == "") {$page = "index";}

	$template = $twig->loadTemplate($page.'.html');
	echo $template->render(array());
?>