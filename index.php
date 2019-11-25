<?php

/*
	Fichier index du site.
	Il dirige vers le controleur approprié
*/

require_once "includes/main.php";

try {

if(empty($_GET)){
		$c = new Commande_controller();
		$c->handleRequest();
	
	}
	else throw new Exception('Wrong page_2!');
	
	
}
catch(Exception $e) {

	render('error',array('message'=>$e->getMessage()));
}

?>