<html>
    <body>
<main>
<?php
echo "<h2>Programmation Objet en PHP</h2>";
echo "<br/>";
echo "<p>1 - Attribution de la class</p>";
echo '<img src="images/poo-1.png">';

echo "<br/><br/>";
echo "<p>2 - Fonction Constructeur()</p>";
echo '<img src="images/poo-2.png">';

echo "<br/><br/>";
echo "<p>2 - Fonction nomcomplet()</p>";
echo '<img src="images/poo-3.png">';
echo "<br/>";
// Attributs de la class
class Personne
{ 
public $prenom;//="Alain";
public $nom;
public $age;

// Fonction Constructeur
public function __construct($prenom,$nom,$age)
{
$this -> prenom=$prenom;
$this -> nom=$nom;
$this -> age=$age;
}

// return $this->nom.' '.$this->prenom.' '.$this->age . PHP_EOL;
public function nomcomplet()
{
    return sprintf('%s %s %d', $this->nom,$this->prenom,$this->age );
}

// Fonction creer par nous
public function danser()
{
    echo $this->prenom. " est entrain de danser" . PHP_EOL;
}
}
echo "<br/>";
echo "<b>sprintf :</b> Retourne une chaine formatée";
echo "<br/>";
echo '<img src="images/poo-type-1.png">';
echo "<br><br/>";
echo "<b>Spécificateurs :</b>";
echo "<br/>";
echo '<img src="images/poo-specificateur.png">';
echo "<br/><br/>";
echo "<b>Création d'un Objet à partir de la class personne</b>";
echo "<br/>";
echo '<img src="images/poo-creation-obj.png">';
echo "<br/><br/>";

// création d'un objet à partir de la class personne ou création nlle instance de la class personne
$magne = new Personne('Magne','Jean',102);
$isaac = new Personne('Isaac','Jacques',89);

echo "<b>Affichage des Objets</b>";
echo "<br/>";
echo '<img src="images/poo-affichage.png">';
echo "<br/>";
echo "<b>PHP-EOL :</b><br/>";
echo "Constantes Prédéfinie pour la fin d'une ligne";
echo "<br/><br/>";
echo "<b>Affichages</b>";
echo "<br/>";
echo  $magne->prenom . PHP_EOL." ";
echo  $magne->nom . PHP_EOL." ";
echo  $magne->age . PHP_EOL." ans<br/>";

echo  $isaac->prenom . PHP_EOL." ";
echo  $isaac->nom . PHP_EOL." ";
echo  $isaac->age . PHP_EOL."ans <br/>";

echo "<br/>";

echo "<b>Appel des fonctions danser() et nomcomplet()</b>";
echo "<br/>";
echo '<img src="images/poo-appel-fonction.png">';
echo "<br/>";
echo "<b>On affiche et on met dans la variable \$magne la fonction danser()</b><br/>";
echo "<br/>";
echo "<b>Affichages</b><br/>";
echo"<br/>";

echo $magne->danser(). PHP_EOL;
$toutlenom=$magne->nomcomplet();
echo $toutlenom . PHP_EOL;


echo "<br/>";

?>

    

</main>
</body>
</html>