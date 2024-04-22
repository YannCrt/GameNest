<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer Mon Profil</title>
    <link rel="stylesheet" href="css/supprimer.css">
   
</head>
<body>
 
<br>
<br>
<br>
            <form action="./?action=suppression" method="POST">
            <div class="mb-3 ml-10">
                <label for="mailU">Adresse e-mail :</label>
                <input type="mailU" id="mailU" name="mailU" required>
</div class="mb-3 ml-10"> 
                <?php if (isset($error)) { ?>
                    <div class="error"><?php echo $error; ?></div>
                <?php } ?>
                <div class="mb-3 ml-10">
                <input type="submit" class="btn btn-primary" value="Supprimer">
                </div class="mb-3 ml-10">
            </form>
        </div>
</body>
</html>


