<?php

// Je me connecte à la BDD

require_once './FormulairePHP/connexionBDD.php';

$stmt = $pdo->query('select * from contact');
$result = $stmt->fetchAll();

echo '<pre>'.print_r($result).'</pre>';

foreach($result as $contact){
    echo '<br>Prénom :'.$contact['prenom'];
}


?>