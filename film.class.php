<?php 
class Film
{
	
	// Propriétés
	private $titre ;
    private $sortie;
    private $duree;
    private $synopsis;
    private $realisateur;
    private $acteur;

	
	
	// Méthodes
	// Liste des getters
	public function __construct($titre,$sortie,$duree,$synopsis,$realisateur,$acteur)
    {
        $this->titre = $titre;
        $this->sortie = $sortie;
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $realisateur->addFilm($this);
        $this->realisateur = $realisateur;
        $acteur->addFilm($this);
        $this->acteur = $acteur;

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
    public function getRealisateur()
	{
		return $this->realisateur;
    }
    public function getActeur()
	{
		return $this->acteur;
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
    public function seRrealisateur($realisateur)
    {
        
            $this->realisateur = $realisateur;
    }
    public function setActeur($acteur)
    {
            $this->acteur = $acteur;
    }	
    public function affichReal()
    {
        echo '<div>nom du réalisateur : '.$this->realisateur->getNom().'</div>';
    }
    
}
?>