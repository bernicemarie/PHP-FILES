 <?php 
include('connect.php');
include('contenus/include/function_escape.php');
if (isset($_POST['envoyer'])) {
$seb = escape($_POST['nseb']);
$imma = escape($_POST['im']);


$con=$db->query("SELECT count(id) FROM vehicule WHERE nom_seb='$seb'" );
$countresult=$con->fetchColumn();
if($countresult==1)
{

?>
  <script type="text/javascript">
  alert('Desolé, ce numéro de Seb existe déjà.');
  window.location.href='listeseb.php';
  </script>
  <?php
}else{

 
$insert = $db->exec("INSERT INTO vehicule(nom_seb,modele) VALUES('$seb','$imma') ") ;

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
             <h2 class="modal-title">Ajouter un seb</h2>
            </div>
            <div class="modal-body">
                <form class="form-validate form-horizontal" action=""  method="POST">
                <div class="mb-3">
              <input type="text" class="form-control form-control-sm" name="nseb" placeholder="Ajouter numéro" required>
              </div>
                <br>
                    <div class="mb-3">
                    <input type="text" class="form-control form-control-sm" placeholder="Ajouter le modèle" name="im" required>
                    </div>
                      
                     
                     <br>
                      <div class="modal-footer">
              <button type="reset" class="btn btn-danger btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> <a href="listeseb.php">Annuler</a></button>
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