<main>
<?php
// l OBJET est dans la class
// Création de la class sont public, privite, protected
class Personne{
 // Attributs de la class
public $prenom;//="Alain";
public $nom;
public $age;

// Méthodes sont des Fonction Constructeur
public function __construct($prenom,$nom,$age)
{
//this veut dire objet actuel
$this -> prenom=$prenom;
$this -> nom=$nom;
$this -> age=$age;
}
// fin constructeur


//$objet= new Personne('nom','prenom',2);
//echo $objet->age;

public function nomcomplet()
{
   // return $this->nom.' '.$this->prenom.' '.$this->age . PHP_EOL;
    return sprintf('%s %s %d', $this->nom,$this->prenom,$this->age );
}

// Fonction creer par nous danser
public function danser()
{
    echo $this->prenom. " est entrain de danser" . PHP_EOL;
}
}


// définir les arguments des objets avec new Personne
echo "<h3>------- Programmation Objet en PHP -------</h3>";
// création d'un objet à partir de la class personne ou création nlle instance de la class personne
$magne = new Personne('Magne','Jean',102);
$isaac = new Personne('Isaac','Jacques',89);


echo  $magne->prenom . PHP_EOL."<br/>";
echo  $magne->nom . PHP_EOL."<br/>";
echo  $magne->age . PHP_EOL."<br/>";

// en relation avec la fonction creer par nous danser
echo $magne->danser();

$toutlenom=$magne->nomcomplet();
echo $toutlenom . PHP_EOL;
echo "<br/><br/>";

echo "<b>Création de la class Voiture</b><br/>";
echo "<img src='images/poo-4.png'><br/>";
class Voiture{
    // Attributs de la class
   public $marque;
   public $couleur;

   // Méthodes sont des Fonction Constructeur
   public function __construct($marque,$couleur)
   {
   //this veut dire objet actuel
   $this -> marque=$marque;
   $this -> couleur=$couleur;
   }
   // fin constructeur

   // fonction nommée
   public function caracteristiques()
   {
      // return $this->nom.' '.$this->prenom.' '.$this->age . PHP_EOL;
       return sprintf('%s %s', $this->marque,$this->couleur);
   }
   }
   echo "<b>Dans la class Voiture on créer la Fonction </b><br/>";
   echo "<b>__construct</b><br/>";
   echo "<img src='images/poo-5.png'><br/>";

   echo "<b>Dans la class Voiture on créer une Fonction </b><br/>";
   echo "<b>nommée</b><br/>";
   echo "<img src='images/poo-6.png'><br/>";

   echo "<b>Création des Objets a partir le la class </b><br/>";
   echo "<img src='images/poo-7.png'><br/>";
// création d'un objet à partir de la class voiture les instances
$voiture1 = new Voiture('Peugeot','vert');
$voiture2 = new Voiture('Citroen','rouge');

echo "<b>Affichage avec appel de la fonction </b><br/>";
echo "<img src='images/poo-2.png'><br/>";
$toutelesmarques=$voiture1->caracteristiques();
echo $toutelesmarques ."<br/>". PHP_EOL;
$toutelesmarques=$voiture2->caracteristiques();
echo $toutelesmarques ."<br/>". PHP_EOL;
echo "<b>Affichage avec appel de la fonction autre façon</b><br/>";
echo "<img src='images/poo-3.png'><br/>";
echo $voiture1->marque." ";
echo $voiture1->couleur;

/*
CODER EN ORIENTE OBJET

La prgrammation orienté objet est beaucoup moins linéaire par rapport à la programmation 
procédurale.
Son principal avantage est d"être mieux organisé et ainsi de facilté le code et sa maintenance.
Son concept est plus difficile à utiliser que pour celui deu langage procédural qui nous est 
plus familier dans sa manière de s'excuter.
Son principe est de faire en sorte que tout ce que nous codons devienne un objet.

Qu'est qu'un objet
Un objet est tout ce que vous avez l'habitude de manipuler au qutidien par exemple
un livre, un fauteuil.

Diférence entre procédural et POO
Ce sont deux manière de prigramme. Sur le fond, utilise le même langage c'est à dire tout
ce que nous avons
appris jusqu'ici, elle se différence sur l'approche de la conception du programme ui-même.
Comme nous l'avons compris, la POO à l'avantage d'avoir un code plus claire que celui du procédural
et donc plus facile à mettre à jour. Il sera également beaucoup plus facile de le réutiliser dans
d'autre portions de code de notre application ou site internet ce qui est loin d'être négligeable.

En résumer, on peut retenir qu'il existe deux façons de programmer en PHP:
Il n'y a pas de bonne ou mauvaise manière de coder. Nous disons simplement plus votre site ou votre
appication grossira, plus vous aurez intérêt à utiliser la POO.

*** LES FONDAMENTAUX DE LA  P O O ***

Principes de POO

Principe de POO se base sur le principe que tout éléments inscrit est un objet. Le principe sera
de créer des objets, pour que nous utilisons des classes.
Une classe est donc un bloc de code culturel qui servira de moules pour la création d'un ou des objets.

-- La class --

Le principe d'une Class est de créer un objet. L aclass utilise le mot-clé class et contient un
ensemble de fonction qui servira de modèle à la création d'un Objet.
Ses fonctions porterons le nombre "méthode". Lorsque on créer une fonction à l'intérieur d'une class,
on l'appelle "méthode". En revanche le principe de fonctionnement est totalement identique.

-- Les Objets --
Maintenant que nous avons défini une class, nous pouvons alors créer un objet issu de cette class.
On dit alors qu'on instantie la class ou que l'objet est une instance de la classe.
Ces Objets seront donc construits à partir des méthodes (fonction) etdes propriées ou attributs 
(variables) de la class.

A retenir que la POO est basée sur les objets et les class.
On créer des objets à partir d'une class. Chaque objet à acces aux méthodes et aux propriétées de la class
qui est crée.

-- Création d'une class --
Par convention le nom de la clas commence par une lettre Majuscule
et chaque class sera créee dans un fichier unique.
Le fichier PHP contiendra uniquement la classe ainsi que ses attributs et ses méthodes.
Ce fichier pourra alors être appelé partout dans notre site ou applications grace notament aux instructions
de fichier que nous avons appris jusqu'ici. iclude, required ,include on.
 
Syntaxe





*/



?>

    

</main>