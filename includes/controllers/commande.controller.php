<?php
/* Controleur de la page cat */
class Commande_controller
{

    public function handleRequest()
    {
        global $db;
        $commande = Commande::find_all();

        render('home', array(
			'commande' => $commande
		));
       
    }
}

?>
