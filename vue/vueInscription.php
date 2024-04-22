<br>
<br>
<br>
<span id="alerte"><?= $msg ?></span>
<div class="container">
<form action="./?action=inscription" method="POST">
  <div class="mb-3 ml-10">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" class="form-control" name="mailU" id="Email de connexion" aria-describedby="emailHelp" placeholder="mail">
    <div id="emailHelp" class="form-text">Nous volons vos données</div>
  </div>
  <div class="mb-3 ml-100">
    <label for="exampleInputPassword1" class="form-label">mot de passe</label>
    <input type="password" class="form-control" name="mdpU" id="exampleInputPassword1"  placeholder="Mot de passe">
  </div>
  <div class="mb-3 ml-100">
    <label for="exampleInputPassword1" class="form-label">Pseudo</label>
    <input type="text" class="form-control" name="pseudoU" id="exampleInputEmail1"  placeholder="Pseudo">
  </div>
  <button type="submit" class="btn btn-primary" value="S'inscrire">S'inscire</button>
</form>
</div>



