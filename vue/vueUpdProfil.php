<br>
<br>
<br>

mail : <?= $util["mailU"] ?> <br />
<form action="./?action=updProfil" method="POST">
<div class="mb-3 mb-5 ml-100">
    <input class="form-control" type="text" name="pseudoU" placeholder="Nouveau pseudo" /><br />
    <input class="btn btn-primary" type="submit" value="Enregistrer" />
</div class="mb-3 mb-5 ml-100">
    <hr>
    Mettre à jour mon mot de passe : <br />
    <?= $messageMdp ?>
    <div class="mb-3 ml-100">
    <input class="form-control" type="password" name="mdpU" placeholder="Nouveau mot de passe" /><br />
    <input class="form-control" type="password" name="mdpU2" placeholder="Confirmer la saisie" /><br />
    <input class="btn btn-primary" type="submit" value="Enregistrer" />
</div class="mb-3 ml-100">
    <hr>
    
</form>


