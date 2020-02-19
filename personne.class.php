<?php 
include 'acteur.class.php';
include 'real.class.php';
class Personne
{
	
	// Propriétés
	private $nom ;
    private $prenom;
	private $date;
	
	
	// Méthodes
	// Liste des getters
	public function __construct($nom,$prenom,$date)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = new DateTime($date);

    }

    public function getNom()
    {
        return $this->nom;
    }	
    public function getPrenom()
    {
        return $this->prenom;
    }	
	public function getDate()
	{
		return $this->date;
	}
	
	

	// Liste des setters
	
	
    
	public function setNom($nom)
	{
        
        $this->nom = $nom;
    
    }
    public function setPrenom($prenom)
    {
        $this->prenom= $prenom;		
    }
    public function setDate($date)
    {
        
            $this->date = $date;
    }	

    public function __toString()
    {
        return $this->nom." ".$this->prenom." ".$this->date;
    }
    public function getAge(){
        $now = new DateTime();
        $interval = $this->date->diff($now);
        return $interval->format('%y');
    }
}
?>