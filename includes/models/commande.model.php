<?php
/**
 *
 */
class Commande
{
    public $id_produit;
    public $num_com;
    public $num_magasin;
    public $num_ress;
    public $etat;

  
    function __construct()
    {

    }
    //*****************      get      **************************//
    //*********************************************************//
    public function get_id_produit()
    {
        return $this->id_produit;
    }
    public function get_num_com()
    {
        return $this->num_com;
    }
    public function get_num_mag()
    {
        return $this->num_magasin;
    }
    public function get_num_ress()
    {
        return $this->num_ress;
    }
    public function get_etat()
    {
        return $this->etat;
    }
    
   

    //*****************      REQUETE      **************************//
	//*********************************************************//
	
	/* fonction permettant de récupérer TOUS les produits*/
    public static function find_all($arr = null)
    {
        global $db;

        $st = $db->prepare("SELECT * FROM commande");
		$st->execute($arr);
		return $st->fetchAll(PDO::FETCH_CLASS, "Commande");
    }

}

?>
