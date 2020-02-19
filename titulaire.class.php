<?php 
class Titulaire
{
	
	// Propriétés
	private $nom ;
    private $prenom;
    private $date;
    private $ville;
    private $compte;
	
	
	// Méthodes
	// Liste des getters
	public function __construct($nom,$prenom,$date,$ville,$compte=0)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date = new DateTime($date);
        $this->ville = $ville;
        $this->compte = [];
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
    public function getVille()
	{
		return $this->ville;
    }
    public function getCompte()
	{
		return $this->compte;
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
    public function setVille($ville)
    {
        
            $this->ville = $ville;
    }
    public function setCompte($compte)
    {
        
            $this->compte = $compte;
    }	
    public function getAge(){
        $now = new DateTime();
        $interval = $this->date->diff($now);
        return $interval->format('%y');
    }
    
    public function addCompte(Compte $compte){
        array_push($this->compte,$compte);
    }
    public function affichInfo()
    {
        echo "<div>nom et prénom :".$this->nom." ".$this->prenom."<div>Age :".
        $this->getAge()."</div><div> Ville : ".$this->ville."</div>";
        echo '<table><tr><td>libelle</td><td>solde</td><td>devise</td></tr>';
        foreach ($this->compte as $key => $value) {
            echo '<tr><td>'.$value->getLibelle().'<td>'.$value->getSolde().'</td><td>'.$value->getDevise().'</td></tr>';
        }
        echo '</table>';
    }
}
?>