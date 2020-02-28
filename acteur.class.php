<?php 
class Acteur extends Personne
{
	
	// Propriétés
	private $casting;
	private $role;
	
	
	// Méthodes
	// Liste des getters
	public function __construct($nom,$prenom,$date)
    {
		parent::__construct($nom,$prenom,$date);
		$this->casting =[];
		$this->role=[];

    }

    
	public function test()
	{
		$nom = $this->getNom();
		return $nom;
	}
	public function getRole()
	{
		return $this->role;
	}
	public function getCasting()
	{
		return $this->casting;
	}
	public function addCasting(Casting $casting){
        array_push($this->casting,$casting);
	}
	public function addrole(Role $role){
        array_push($this->role,$role);
	}

	public function affichFilm()
    {
		$txt ='<table><tr><td>nom<td>film</td><td>role</td>';
		foreach ($this->casting as $casting) {
			 $txt .= '<tr><td>'.$this->getNom().' </td><td> '.$casting->getFilm()->getTitre()."</td><td>". $casting->getRole()->getRole()."</td>";
		}
		return $txt.='</table>';
	}
	public function affichRole()
    {
		// var_dump($this->casting);
		$txt = '<table><tr><td>titre film</td><td>nom acteur</td><td>role<tr>';
		foreach ($this->casting as $casting) {
			 $txt .= '<tr><td>'.$casting->getFilm()->getTitre()."</td><td>".$this->getNom()." </td><td>".$casting->getRole()->getRole().'</td>';
			
		}
		return $txt;
	}
	
	
    
	
}
?>