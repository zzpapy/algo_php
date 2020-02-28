<?php 
// include 'Type.class.php';
class Role
{
	
	// Propriétés
	private $role;
	private $casting;
	// Méthodes
	// Liste des getters
	public function __construct($role)
    {
        $this->role = $role;
        $this->casting = [];

    }
    
    public function getRole(){
        return $this->role;
    }
    public function addCasting(Casting $casting){
        array_push($this->casting,$casting);
    }
    
    public function affichActeurs(){
        $txt = '<table><tr><td>role</td><td>nom acteur</td><td>titre film</td></tr>';
        foreach ($this->casting as $key ) {
            $txt .= '<tr><td>le role de :'.$this->role.' </td><td> '.$key->getActeur()->getNom().'</td>';
            $txt .= '<td>'.$key->getFilm()->getTitre().'</td>';
        }
        return $txt .= '</table>';
    }
}
?>