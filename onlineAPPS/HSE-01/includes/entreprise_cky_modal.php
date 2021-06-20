<?php 
include('connect.php');
include('contenus/include/function_escape.php');
if (isset($_POST['envoyer'])) {
$ent = escape($_POST['en']);
$loca = escape($_POST['lo']);
$con=$db->query("SELECT count(id) FROM entreprise WHERE nom_en='$ent'" );
$countresult=$con->fetchColumn();
if($countresult==1)
{
?>
  <script type="text/javascript">
  alert('Desolé, cette entreprise existe déjà.');
  window.location.href='listeentreprisecky.php';
  </script>
  <?php
}else{
$insert = $db->exec("INSERT INTO entreprise(nom_en,local) VALUES('$ent','$loca') ") ;

if ($insert ) {
	 
	header('Content-Type: text/html;charset= UTF-8');
}
else{

	echo "Aucune insertion effectuée";
}
}
}
 ?>
 <div class="modal fade" id="addnew">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
           
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
             <h2 class="modal-title">Ajouter une entreprise</h2>
            </div>
            <div class="modal-body">
                <form class="form-validate form-horizontal" action=""  method="POST">
                <div class="mb-3">
              <input type="text" class="form-control form-control-sm" name="en" placeholder="Ajouter une entreprise" required>
              </div>
                <br>
                    <div class="mb-3">
                    <input type="text" class="form-control form-control-sm" placeholder="Ajouter sa localité" name="lo" required>
                    </div>
                      
                     
                     <br>
                      <div class="modal-footer">
              <button type="reset" class="btn btn-danger btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> <a href="listeentrprisecky.php">Annuler</a></button>
              <button type="submit" class="btn btn-info btn-flat" name="envoyer"><i class="fa fa-save"></i>Enregistrer</button>
              </div>
              </form>
            </div>
            </div>
        </div>
        </div>
    


 

  <style type="text/css">
 .close {
    color: red; 
    opacity: 30;
}

button.close {
        background: #d73e4d;
        background:  red;
        border: 0 none !important;
        color: #fff7cc;
        display: inline-block;
        float: right;
        font-size: 34px;
        height: 35px;
        line-height: 1;
        margin: 0px 1px;
        opacity: 1;
        
        text-align: center;
        text-shadow: none;
        -webkit-transition: background 0.2s ease-in-out;
        transition: background 0.2s ease-in-out;
        vertical-align: top;
        width: 46px;
    }
</style>