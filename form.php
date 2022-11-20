<?php
session_start();
if(isset($_SESSION['resultat'])){
    echo '<p>'.$_SESSION['resultat'].'</p>';
}

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mon superbe formulaire t'as capté</title>
    <link rel="stylesheet" href="./style.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <form method="POST" action="./traitementAjout.php">
      <h1>Contactez-nous</h1>
      <div class="separation"></div>
      <div class="corps-formulaire">
        <div class="gauche">
          <div class="groupe">
            <label>Votre Prénom</label>
            <input name="prenom" type="text" autocomplete="off" />
            <i class="fas fa-user"></i>
          </div>
          <div class="groupe">
            <label>Votre adresse e-mail</label>
            <input name="mail" type="text" autocomplete="off" />
            <i class="fas fa-envelope"></i>
          </div>
          <div class="groupe">
            <label>Votre téléphone</label>
            <input name="telephone" type="text" autocomplete="off" />
            <i class="fas fa-mobile"></i>
          </div>
        </div>

        <div class="droite">
          <div class="groupe">
            <label>Message</label>
            <textarea name="message" placeholder="Saisissez ici..."></textarea>
          </div>
        </div>
      </div>

     <div class="pied-formulaire" align="center">
        <button>Envoyer le message</button>
      </div>
    </form>
  </body>
</html>



