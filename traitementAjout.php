<?php

session_start();

echo '<pre>'. print_r($_POST).'</pre>';
if(isset($_POST['prenom'])){
    // verification avant enregistrement
    $nomTropLong = false;
    if(strlen($_POST['prenom']) >25 ) $nomTropLong = true;


    if(!$nomTropLong) {
        require_once './connexionBDD.php';

        // je determine mon modele de requete
        $sql = "insert into Contact values (null, :prenom, :adressemail, :telephone, :message)";

        $stmt = $pdo->prepare($sql);
        $result = $stmt ->execute(
            [
            // nom de la colonne je recupere le post de l'input ( son name="")
            ':prenom'=> $_POST['prenom'],
            ':adressemail'=> $_POST['mail'],
            ':telephone'=> $_POST['telephone'],
            ':message'=> $_POST['message']
            ]
        );

        var_dump($stmt->debugDumpParams());

        $_SESSION['resultat'] = 'enregistrement effectué avec succès';
    }  
    
    else
    {
        $_SESSION['resultat'] = 'nom trop long';
    }
        
}

header('location:form.php');




?>