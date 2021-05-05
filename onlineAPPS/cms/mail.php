 

<?php  include "include/db.php"; ?>
<?php  include "include/header_image.php"; ?>
<!-- Navigation -->
<?php  include "include/navigation.php"; ?>
<!-- Page Content -->
 <div class="container">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                              
                                <h3><i class="fa fa-lock fa-4x"></i></h3>
                                 <?php if (!isset($_GET['envoieeffectué']) && (!isset($_GET['erreurenvoie'])) ):?>
                                <h2 class="text-center">Contactez-moi</h2>
                                
                                <div class="panel-body">
                                    <form action="" method="post">
                                      <?php  send_message();?>
                            
                                
                                    <div class="form-group">
                                        <input type="text" name="nom" class="form-control"
                                            placeholder="Votre nom complet" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="adresse" class="form-control"
                                            placeholder="Votre adresse Electronique" required>


                                    </div>
                                

                                
                                    <div class="form-group">
                                        <input type="sujet" name="sujet" class="form-control" placeholder="Votre sujet"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Entrez votre message"
                                            id="body" maxlength="300" cols="5" rows="5"></textarea>
                                    </div>
                                
                            

                            <div class="col-lg-12 text-center">
                                <label class="checkbox-inline" style="color:red">
                                </label>
                                <button name="submit" type="submit" class="btn btn-primary">Envoyer</button>

                                <a href="index" class="btn btn-danger">Annuler</a>
                            </div>
                        </form>
                                </div><!-- Body-->
                                 <?php else:?>
                <h2 class="text-center" style="color:purple"><?php  display_message();?> </h2>
                  <?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


 
</div> 
 <!-- <script src="../cms/admin/js/textedit.js"></script> -->
    <!-- Footer -->
    