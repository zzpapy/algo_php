<?php 
class Film
{
	
	// Propriétés
	private $titre ;
    private $sortie;
    private $duree;
    private $synopsis;
    private $realisateur;
    private $casting;
   

	
	
	// Méthodes
	// Liste des getters
	public function __construct($titre,$sortie,$duree,$synopsis,$realisateur,$genre)
    {
        $this->titre = $titre;
        $this->sortie = $sortie;
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->realisateur = $realisateur;
        $realisateur ->addFilm($this);
        $this->genre = $genre;
        $genre ->addFilm($this);
        $this->casting =[];
        

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
    
    public function getGenre()
	{
		return $this->genre;
    }
    public function getCasting()
	{
		return $this->casting;
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
    public function setRrealisateur($realisateur)
    {
        
            $this->realisateur = $realisateur;
    }
    
    public function affichReal()
    {
        echo '<div>nom du réalisateur : '.$this->realisateur->getNom().'</div>';
    }
    public function addCasting(Casting $casting){
        array_push($this->casting,$casting);
    }
    public function affichFilm()
    {
        $duree = date("H : i",mktime(0,$this->getDuree()));
        $text = '<table><tbody><tr><td>titre du film :'.$this->getTitre().'</td> <td>genre : '.$this->getGenre()->getNom().'</td><td>Année de sortie : '.$this->getSortie().'</td><td>la durée est de : '.$duree.'<br>';
        $text .= '<tr><td>Réalisateur nom: '.$this->getRealisateur()->getNom().'</td><td> prénom : '.$this->getRealisateur()->getPrenom().'</td></tr>';
        foreach ($this->casting as $key ) {
            $text .= '<tr><td>nom acteur :'.$key->getActeur()->getNom().'</td><td> prénom : '.$key->getActeur()->getPrenom().'</td></tr>';
        }
        
        // $text .= 
        return $text .= '</table>';
    }
   
			
    
}
?>