<?php 
class Personne
{
	
	// Propriétés
	private $titre ;
    private $sortie;
    private $duree;
    private $synopsis;
    private $real;

	
	
	// Méthodes
	// Liste des getters
	public function __construct($titre,$sortie,$duree,$synopsis,$real)
    {
        $this->titre = $titre;
        $this->sortie = $sortie;
        $this->duree = $duree;
        $this->duree = $synopsis;
        $this->duree = $real;

    }

    public function getTitre()
    {
        return $this->titre;
    }	
    public function getSortie()
    {
        return $this->sortie;
    }	
	public function getDuree()
	{
		return $this->duree;
    }
    public function getSynopsis()
	{
		return $this->synopsis;
    }
    public function getReal()
	{
		return $this->Real;
	}
	
	

	// Liste des setters
	
	
    
	public function setTitre($titre)
	{
        
        $this->titre = $titre;
    
    }
    public function setSortie($sortie)
    {
        $this->sortie= $sortie;		
    }
    public function setDuree($duree)
    {
        
            $this->duree = $duree;
    }	
    public function setReal($real)
    {
        
            $this->real = $real;
    }	
}
?>