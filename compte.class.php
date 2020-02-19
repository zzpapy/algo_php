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

   
}
?>