<?php
 $servername='localhost';
 $username='root';
 $password='';
 $dbname="tp_php";

 $conn = new mysqli($servername,$username,$password,$dbname);
 if($conn ->connect_error){
     die("Connection failed :" .$conn->connect_error);
 }



        // AFFICHAGE DE LA BASE
        $query = "SELECT * from utilisateurs";
        $result = $conn->query($query);


        // num_rows est une propriété de cet objet qui représente le nombre de lignes dans le jeu de résultats.
        if($result->num_rows >0 ){


            //fetch_assoc() sur l'objet $result.
            // Cette méthode est utilisée pour récupérer la ligne suivante du jeu de résultats sous forme de tableau associatif
            while($row = $result->fetch_assoc()){
            echo
            "ID: ". $row["id"].
            " - Nom: ".$row["nom"].
            " - Prenom: ".$row["prenom"].
            " - email: " .$row["email"].
            "<br/>";
            }
        }else{
                echo "0 résultat";
            }

            
    
       
      
        //annule le jeu de résultats vide la mémoire
        // mysqli_free_result($result);}
        // Efface les données du formulaire
        
        $conn->close();    



?>