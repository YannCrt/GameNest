<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>GameNest</title>
        <link href="css/style.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
      </head>
    <body>
    <header>
    <a href="./?action=accueil"><img src="photos/Logo.png" alt="Logo du site"></a>
    <a href="./?action=accueil"><div id="Game">Game</div>Nest</a>
    <ul>
      <li><a href="./?action=accueil">Accueil</a></li> 
      <?php if (isLoggedOn()) { ?> 
    
    <li><a href="./?action=profil" alt="Ce lien mène vers le profil">Profil</a></li>
    <?php } else { ?>

    <li><a href="./?action=connexion" alt="Ce lien mène vers la page de connexion">Connexion</a></li>

    <?php } ?>

        </div>
    </ul>
  </header>
</html>
