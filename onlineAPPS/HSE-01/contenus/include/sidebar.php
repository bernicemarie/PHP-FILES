

 
<div class="col-md-4">


    <!-- Blog Search Well -->
    <div class="well">
        <h4>Recherchez par numéro rapport</h4>
        <form action="search.php" method="post">
            <div class="input-group">
                <input name="search" type="text" class="form-control">
                <span class="input-group-btn">
                    <button name="submit" class="btn btn-default" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.input-group -->
    </div>

    <!--  Login -->
    <?php if(isset($_SESSION['nom'])): ?>
    <h4 class="text-center">Vous êtes connecté(e) en tant que <br><?php echo $_SESSION['nom']?></h4>
    <a href="../logout_aside.php" class="btn btn-danger">Déconnectez-Vous ?</a>
    <br>
    <?php else: ?>
    <div class="well">
        <h2 class="text-center btn-primary">Connectez-vous</h2>
        <form action="../connexion.php" method="POST">
            <div class="form-group">
                <input name="user" type="text" class="form-control" placeholder="Entrez votre identifiant"
                    required>
            </div>
            <div class="input-group">
                <input name="pass" type="password" class="form-control" id="myInput" placeholder="Entrez votre mot de pass"
                    required>
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit" name="envoyer">Valider</button>
                    
                </span>

            </div>
            <div class="btn-primary">
            <input type="checkbox" onclick="myFunction()"> Voir mon mot de pass
            </div>
           
            <br>
            
        </form>
        <!-- /.input-group -->
    </div>

    <?php endif; ?>


    <br>

    

    <!-- Side Widget Well -->
    <div class="well" >
         <h2 class="text-center btn-primary">UMS-HSE</h2>
    </div>

</div>

