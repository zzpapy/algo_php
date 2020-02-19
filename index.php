<?php 
$string=" Notre formation DL commence aujourd'hui .";
$nbr=strlen (  $string ) ;

    echo '<div><h1>Exo 1</h1>',$nbr,'</div>';



$string="Notre formation DL commence aujourd'hui";
$nbr=str_word_count($string, 1);
// var_dump($nbr)
    echo '<div><h1>Exo 3</h1>',sizeof($nbr),'</div>';

$string="Notre formation DL commence aujourd'hui";
echo "<div>Notre formation DL commence aujourd'hui</div><br>";
echo '<div><h1>Exo a</h1>',str_replace("aujourd'hui","demain",$string),'</div>';


$string="Engage le jeu que je le gagne";
$reverse=strrev ($string );
$string=strtolower($string);
$reverse=strtolower($reverse);
$string=str_replace(" ","",$string);
$reverse=str_replace(" ","",$reverse);
if($string==$reverse){
    echo "<div><h1>Exo 4</h1>cette phrase est un palindrome";
}
else{
    echo "<div><h1>Exo 4</h1>cette phrase n'est pas un palindrome";
}


$montant=100;
$taux=0.1524;
$change=$montant*$taux;

echo "<div><h1>Exo 5</h1>100francs=",round($change, 2)," €</div>";


$pu=9.99;
$qte=5;
$tva=0.2;

echo "<div><h1>Exo 6</h1>le prix unitaire=",$pu," €</div>";
echo "<div>quantité=",$qte," €</div>";
echo "<div>TVA= 20%</div>";
echo "<div>total=",$qte*$pu*$tva," €</div>";


$age=10;
echo "<div><h1>Exo 7</h1></div>";
if($age<6){
    $cat='pas de catégories';
}
elseif($age>=6 && $age<=7){
    $cat='poussin';
}
elseif($age>7 && $age<=9){
    $cat='pupille';
}
elseif($age>9 && $age<=11){
    $cat='minime';
}
elseif($age>=12 ){
    $cat='cadet';
}
echo "<div>l'enfant de ",$age," ans appartient à la catégorie ",$cat,"</div>";



$number=8;
echo "<div><h1>Exo 8</h1></div>";
for($i=1;$i<11;$i++){
    $val=$number*$i;
    echo "<div>",$number," * ",$i," = ", $val;

}
echo "<div><h1>Exo 9</h1></div>";
$sexe='f';
$age=32;
if(($sexe=='h' && $age>20 )||($sexe=='f' && ($age>=18 && $age<=35))){
    echo "<div>La personne est imposable.</div>";
}
else{
    echo "<div>La personne n'est pas imposable.</div>";
}



echo "<div><h1>Exo 10</h1></div>";

$montant_a_payer=152;
$montant_verse=200;

$valeurs_faciales = [500,200,100,50,20,10,5,2,1,0.5,0.2,0.1,0.05,0.02,0.01];
$rendu =  $montant_verse - $montant_a_payer;
$monnaie = [];
while($rendu > 0){
    $type=[];
    if($rendu >= $valeurs_faciales[0]){
        $monnaie[] = $valeurs_faciales[0];
        $rendu = $rendu - $valeurs_faciales[0];
        $rendu = round($rendu, 2);
    }
    else{
        
        array_shift($valeurs_faciales);
    }
}

$monnaie=array_count_values($monnaie);
foreach($monnaie as $key=>$value){
    
    // var_dump($monnaie,$value);
    echo '<div>';
    if($key<5){
        $type = 'pièce';
    }
    else{
        $type = 'billet';
    }
    echo 'nombre de ',$type,' de',$key,' ',$value;
    // var_dump($key,$value);
}


echo "<div><h1>Exo 11</h1></div>";
$tab= [" Peugeot ", " Renault ", " BMW ", " Mercedes "];
$nbr = sizeof(array_count_values($tab));
echo' le nombre de marques présentes dans le tableau est de :',$nbr,'<ul>';
foreach($tab as $value){
    echo '<li>',$value,'</li>';
}
echo '</ul>';


echo "<div><h1>Exo 12</h1></div>";

$tab=['Mickaël' => 'FRA', 'Virgile' => 'ESP', 'Marie-Claire' => 'ENG'];
ksort($tab);
$lang=['FRA'=>"Salut",'ESP'=>'Hola','ENG'=>'Hello'];
foreach ($tab as $key =>$value){
    if(in_array($value, array_keys($lang))){
        $bonjour=$lang[$value];
        echo '<div>',$bonjour,' ',$key,'</div>';
    }
}


echo "<div><h1>Exo 13</h1></div>";
$note=[10,20,18,5,6,17,16];
echo(implode(" ",$note));
$nbr=sizeof($note);
$somme=array_sum($note);
$moyenne=round($somme/$nbr,2);
echo"<div> les notes obtenues par l'élève sont :";
$i=0;
while($i<$nbr){
    echo $note[$i],',';
    $i++;
}
echo '<div>Sa moyenne générale est de : ',$moyenne,'</div>';


echo "<div><h1>Exo 14</h1></div>";
$date=new DateTime(date("d-m-Y"));
$anniv=new DateTime('1976-03-20');
$interval = $anniv->diff($date);
echo $interval->format('%y ans %m mois %d jours');
 
echo "<div><h1>Exo 14</h1></div>";

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
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
$date=$p1->getDate();
$date2=$p2->getDate();
$jour=new DateTime(date("d-m-Y"));
$interval = $date->diff($jour);
$interval = $interval->format('%y ans %m mois %d jours');
$interval1 = $date2->diff($jour);
$interval1 = $interval1->format('%y ans %m mois %d jours');

echo $p1->getAge();
echo '<div>',$p1->getPrenom(),' ',$p1->getNom(),' a ',$interval,'</div>';
echo '<div>',$p2->getPrenom(),' ',$p2->getNom(),' a ',$interval1,'</div>';


 echo "<div>exo 1-2</div>";

// var_dump(mb_strtoupper('Totoà'));

  function convertirMajRouge($string){
      $color='red';
    $string=mb_strtoupper($string);
    return '<div style="'.$color.'">'.$string.'</div>';
  }
  echo convertirMajRouge('Bonjour je suis à CDA');

  echo "<div>exo 2-2</div>";
  $capitales = array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
  function afficherTableHTML($tab){
      ksort($tab);
      echo '<table><thead><td>Pays</td><td>Capitale</thead></tr>';
      foreach ($tab as $key => $value) {
        echo '<tr><td>'.mb_strtoupper($key).'</td><td>'.$value.'</td>';
      }
      echo '</table>';
      echo '<style> tr,td{border:1px solid black;} thead{font-weight:bold}</style>';
  }
  afficherTableHTML($capitales);

  echo '<div>exo 3-2<a href="https://elan-formation.eu/" target="_blank">ELAN</a></div>';
  
  echo "<div>exo 4-2</div>";
  $capitales = array ("France"=>["Paris","https://fr.wikipedia.org/wiki/"],"Allemagne"=>["Berlin","https://fr.wikipedia.org/wiki/"],"USA"=>["Washington","https://fr.wikipedia.org/wiki/"],"Italie"=>["Rome","https://fr.wikipedia.org/wiki/"]);
  function afficherTableLink($tab){
    ksort($tab);
    echo '<table><thead><td>Pays</td><td>Capitale</thead></tr>';
    foreach ($tab as $key => $value) {
      echo '<tr><td>'.mb_strtoupper($key).'</td><td>'.$value[0].'</td><td><a href='.$value[1].' target="_blank">link</a></td>';
    }
    echo '</table>';
    echo '<style> tr,td{border:1px solid black;} thead{font-weight:bold}</style>';
}
afficherTableLink($capitales);
echo "<div>exo 5-2</div>";

function afficherInput($tab){
    foreach ($tab as $value) {
        echo '<div>'.$value.'<input type="text" placeholder="'.$value.'"></div>';
    }
}

$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);

echo "<div>exo 6-2</div>";

$elements = array("Monsieur","Madame","Mademoiselle");

function alimenterListeDeroulante($tab){
    echo '<select>';
    foreach ($tab as  $value) {
        echo '<option value="'.$value.'">'.$value.'</option>';
    }
    echo '</select>';
}
alimenterListeDeroulante($elements);

echo "<div>exo 7-2</div>";
$elements=["choix1"=>"checked","choix2"=>"unchecked","choix3"=>"unchecked"];
function genererCheckbox($tab){
    foreach ($tab as $key => $value) {
        if($value=="checked"){
          
            echo '<div><label> '.$key.'</label><input type="checkbox" value="'.$key.'" '.$value.'></div>';
        }
        else{
            echo '<div><label> '.$key.'</label><input type="checkbox" value="'.$key.'"></div>';
        }
    }
}
genererCheckbox($elements);

echo "<div>exo 8-2</div>";

function repeaatImg($img,$nbr){
    var_dump($img);
    $i=1;
    echo '<div style="display:flex;justify-content: space-around;">';
    while($i<=$nbr){
        echo '<div style="width:150px;height:150px;"><img style="max-width:100% " src="'.$img.'" alt=""></div>';
        $i++;
    }
    echo '</div>';

}
repeaatImg("chien.jpg",4);


echo "<div>exo 9-2</div>";
$elements = array("Monsieur","Madame","Mademoiselle");
$elements=["choix1"=>"checked","choix2"=>"unchecked","choix3"=>"unchecked"];
function genererRadioButton($tab){
    foreach ($tab as $key => $value) {
        if($value=="checked"){
          
            echo '<div><label>'.$key.'</label><input type="radio" value="'.$key.'" '.$value.'></div>';
        }
        else{
            echo '<div><label>'.$key.'</label><input type="radio" value="'.$key.'"></div>';
        }
    }
}
genererRadioButton($elements);


echo "<div>exo 10-2</div>";
echo "<form action=''>";
$nomsInput = array("Nom","Prénom","adresse mail","Ville","sexe");
afficherInput($nomsInput);
$elements = array("Développeur Logiciel","Designer web","Intégrateur","Chef de projet");
genererRadioButton($elements);
echo '<button>Valider</button></form>';

echo "<div>exo 11-2</div>";
function formaterDateFr($date){
    $tradDay=["mon"=>"lundi","tue"=>"mardi","wed"=>"mercredi","thu"=>"jeudi","fri"=>"vendredi","sat"=>"samedi","sun"=>"dimanche"];
    $tradMonth=["jan"=>"janvier","feb"=>"février","mar"=>"mars","apr"=>"avril","may"=>"mai","jun"=>"juin","jul"=>"juillet","aug"=>"aout","sep"=>"septembre","oct"=>"octobre","nov"=>"novembre","dec"=>"décembre"];
     $date= new DateTime($date);
     echo $tradDay[mb_strtolower (str_replace("%", "", $date->format('%D')))].' le '.str_replace("%", "",$date->format('%d')).' '. $tradMonth[mb_strtolower (str_replace("%", "", $date->format('%M')))].' '. str_replace("%","",$date->format('%Y'));
 }

formaterDateFr("2018-10-24");

echo "<div>exo 12-2</div>";

$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
foreach ($tableauValeurs as $key => $value) {
    var_dump($value);
}

echo "<div>exo 13-2</div>";
include 'Voiture.class.php';
$v1 = new Voiture("peugeot","407","5");
$v2 = new Voiture("citroene","c3","3");
$v3 = new Voiture("fiat","panda","5");

echo $v1->__toString().'<br>';
echo $v1 -> start().'<br>';
echo $v1 -> vitesse(100).'<br>';
echo $v2 -> start().'<br>';
echo $v1 -> etat().'<br>';
echo $v1 -> vitesseEnCours().'<br>';

echo $v1->vitesse('toto').'<br>';

echo "<div>exo 14-2</div>";

include 'VoitureBis.class.php';

$v1 = new VoitureElec("bmw","i3","100");
echo $v1->getInfos();
$v2 = new VoitureBis("fiat","panda");
echo $v2 -> getInfos();
echo "<div>exo 15-2</div>";

$email_a = 'elan@elan-formation.fr';
$email_b = 'contact@elan';

if (filter_var($email_a, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_a' est considérée comme valide.<br>";
}
if (filter_var($email_b, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse email '$email_b' est considérée comme valide.<br>";
} else {
    echo "L'adresse email '$email_b' est considérée comme invalide.<br>";
}

echo "<div>exo 16-2</div>";
include 'titulaire.class.php';
include 'compte.class.php';

$tit1 = new titulaire("muller","jean","20-03-1976","strasbourg");
$comp1 = new compte($tit1,"courrant",1000,"euros");
$comp2 = new compte($tit1,"diff",500,"zloti");
var_dump($comp1);
$affich=($tit1->affichInfo());
$affich_compte=($comp1->affichInfo());

echo "<div>exo cine</div>";
include 'film.class.php';
include 'real.class.php';
include 'acteur.class.php';
$real= new Realisateur("muller","jean","20-03-1969");
$acteur= new Acteur("capone","al","14-12-1973S");
$acteur1= new Acteur("toto","tata","14-12-1973S");
$film = new Film("titre","sortie","duree","synopsis", $real,$acteur);
$film1 = new Film("le chat","12-12-1989",90,"histoire d'un chat",$real,$acteur);
$film2 = new Film("le chien","01-01-2012",60,"histoire d'un chien",$real,$acteur);
$film->affichReal();
$real->affichFilm();
// var_dump($film->getRealisateur()->getNom());


?>
  