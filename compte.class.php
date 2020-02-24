<?php 

class Compte
{
	
	// Propriétés
	private $titulaire;
    private $libelle;
    private $solde;
    private $devise;
	
	
	// Méthodes
	// Liste des getters
	public function __construct(Titulaire $titulaire,$libelle,$solde,$devise)
    {
        $this->titulaire = $titulaire;
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $titulaire->addCompte($this);
    }

    public function getLibelle()
    {
        return $this->libelle;
    }	
	public function getSolde()
	{
		return $this->solde;
    }
    public function getDevise()
	{
		return $this->devise;
	}
	
	

	// Liste des setters
	
	
    public function setLibelle($libelle)
    {
        $this->libelle= $libelle;		
    }
    public function setSolde($solde)
    {
        
        $this->solde = $solde;
    }
    public function setDevise($devise)
    {
        
        $this->devise = $devise;
    }

    //méthode
    public function affichInfo()
    {
        echo '<div>titulaire : '.$this->titulaire->getNom().' '.$this->titulaire->getPrenom().'</div><div> solde:'.$this->getSolde().'</div><div> Devise : '.$this->getDevise();
    }
    public function crediter($val){
        return $this->solde += $val;
    }
    public function debiter($val){
        return $this->solde -= $val;
    }
    public function virement($val,$compte){
        $solde = $compte -> getSolde();
        $compte -> setSolde($solde - $val);
        return $this->solde += $val;
    }
   
}
?>