

<div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                
                <div class="text-center">
                    <img src="photos/user.jpg" width="100" class="rounded-circle">
                </div>
                
                <div class="text-center mt-3">
                    <h5 class="mt-2 mb-0">Mon Profil</h5>

                     <ul class="social-list">
                        <li><i class="fa fa-facebook"></i>mail : <?= $util["mailU"] ?></li>
                        <li><i class="fa fa-facebook"></i>nom d'utilisateur : <?= $util["pseudoU"] ?></li>
                    </ul>
                    
                    <div class="buttons">
                        
                        <button class="btn btn-outline-primary px-4"><a href="./?action=deconnexion">Déconnexion</a></button>
                        <button class="btn btn-outline-primary px-4"><a href="./?action=updProfil">Modifier</a></button>
                        <button class="btn btn-outline-primary px-4" id="sup"><a href="./?action=suppression">Supprimer</a></button>
                    </div>
                    
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>
    
</div>  


