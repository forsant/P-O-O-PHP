<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="ajouter.php" method="POST">

    <input type="text" name="nom" >
    <input type="text" name="prenom" >
    <input type="email" name="email" >
    <input type="submit" value="envoyer">

    </from>

    <?php
    $servername='localhost';
    $user='root';
    $password='';
    $dbname="tp_php";

    $conn = new mysqli($servername,$user,$password,$dbname);
    if($conn ->connect_error){
        die("Connection failed :" .$conn->connect_error);
    }
 if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        
        $query = "INSERT INTO utilisateurs (nom, prenom, email) VALUE ('$nom','$prenom','$email')";
        echo "<br/><br/>";

     
        if($conn->query($query)=== TRUE){
            echo "Bravo ! Utilisateur ajouté avec suceès !<BR:><BR:>";
        }
        else{
            echo "Erreur : ".$query . "<br/>". $conn->error;

        }}
echo "<br/><br/";

        // Vérifie si l'élément avec la clé 'nom' dans le tableau associatif $nom est défini

        // AFFICHAGE DE LA BASE
        $sql = "SELECT * from utilisateurs";

        if($result=mysqli_query($conn, $sql)){

        while($row = mysqli_fetch_row($result))

    {   echo $row[0]." _ ";
        echo " ".$row[1]." _ ";
        echo " ".$row[2]." _ ";
        echo " ".$row[3]."<br/>";
     
    }

  
    //annule le jeu de résultats vide la mémoire
    mysqli_free_result($result);}
    // Efface les données du formulaire
    
    $conn->close();
    
    ?>
    </body>
</html>