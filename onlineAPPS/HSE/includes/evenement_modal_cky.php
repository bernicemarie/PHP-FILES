<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php 
include('connect.php');
include('contenus/include/function_escape.php');
if (isset($_POST['envoyer'])) {
$matricule = escape($_POST['mati']);
$seb = escape($_POST['seb']);
$entreprise = escape($_POST['entreprise']);
$evenement = escape($_POST['event']);
$shift = escape($_POST['shift']);
$site = escape($_POST['site']);
$date= escape($_POST['dat']);
$heure= escape($_POST['heure']);
$lieu= escape($_POST['lieu']);
$victime= escape($_POST['victime']);
$cause= escape($_POST['cause']);
$degat= escape($_POST['degat']);
$immatriculation= escape($_POST['immatriculation']);
$description= escape($_POST['description']);
$imme= $_POST['ai'];
$preventi= escape($_POST['ap']);
$lieux= escape($_POST['lieux']);
$observation= escape($_POST['observation']);
$insert = $db->exec("INSERT INTO events(matricule,nom_seb,entreprise,evenement,shift,site,dat,heure,lieu,victime,cause,degat,description,action_immed,action_prevent,immatriculation,lieux,observation) 
    VALUES('$matricule','$seb','$entreprise',
    '$evenement','$shift','$site',
    '$date','$heure',
    '$lieu','$victime',
    '$cause','$degat','$description',
    '$imme','$preventi','$immatriculation','$lieux','$observation') ") ;

if ($insert ) {
     $last_id = $db->lastInsertId();
$im='img/image/'.$last_id.'.jpg';     
if(isset($_FILES['photo'])){
move_uploaded_file($_FILES['photo']['tmp_name'], $im);

}
    
}
else{
  echo "Aucune insertion effectuée, contactez votre Administrateur";

    //header('location:indexuser.php?msg=Insertion bien effectuée');
}
}
 
 ?>


<div class="modal fade" id="addnew">
    <div class="modal-dialog">
       <div class="container">
        <div class="modal-content">
          	<div class="modal-header">
            	<button   type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Ajouter un évènement</b></h4>
          	</div>
            
             
          	<div class="modal-body">
                                                   
              <form class="form-validate form-horizontal" action=""  method="POST" enctype="multipart/form-data" >
                          <div class="panel panel-info">
                                            <div class="panel-heading ui-draggable-handle">
                                                 
                                                
                                            </div>
                  <div class="col-md-6">  
  <div class="row">
                 
          <div class="block">


                
                <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Entreprise<span class="required">*</span></label>
                      <div class="col-lg-8">
                        <select name= "entreprise"  class="form-control" id="formGender" required onchange="champ_visible(this.value);">

        <?php 
include('connect.php');

$req = $db->query('SELECT * FROM chauffeurcky');
$s = $db->query('SELECT * FROM vehiculecky');
$e = $db->query('SELECT * FROM entreprise');
$chauffeur = $db->query('SELECT distinct(fonction_chauff) FROM chauffeurcky');
 ?>
   <option value="" >Choisissez</option>
 <?php 
while ($result=$e->fetch()) {
    echo '
<option value='.$result['nom_en'].'  >'.$result['nom_en'].'</option>
    ';

}

         ?>
                                    
                                               
     </select>        
                      </div>
                    </div>

             <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Vehicule <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <select name= "seb" class="form-control" id="formGender" required>
          <option value="" >Choisissez</option>
                                                <?php 
while ($seb=$s->fetch()) {
    echo '
<option value='.$seb['nom_seb'].'  >'.$seb['nom_seb'].'</option>
    ';

}

         ?>
                                                 
                                            </select>   
                      </div>
                    </div>

                    
               <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-4">Matricule Chauffeur<span class="required">*</span></label>
                         <div class="col-lg-8">
                         <select name= "mati" class="form-control" id="formGender" required>
          <option value="">Choisissez</option>
                                                  <?php 
while ($ent=$req->fetch()) {
    echo '

<option value='.$ent['matricule'].'  >'.$ent['matricule'].'</option>
    ';

}

         ?>    
                </select>     

                 </div>

 </div>

    
 <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-4">Type Evenement<span class="required">*</span></label>
                         <div class="col-lg-8">
                        <select name= "event"  class="form-control" id="formGender" required>
                                                <option value="">Choisissez</option>
                                                <option>Accident avec arret</option>
                                                <option>Depart de feux/Incendie</option>
                                                <option>Accident sans arret</option>
                                                <option>Incident</option>
                                                <option>Fatalité</option>
                                                 
                                            </select>        

                 </div>

 </div>
    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-4">Shift<span class="required">*</span></label>
                         <div class="col-lg-8">
                       <select name= "shift" class="form-control" id="formGender" required>
                                                <option value="" >Choisissez</option>
                                                <option value="Jour" >Jour</option>
                                                <option value="Nuit" >Nuit</option>
                                                
                                                 
                                            </select>   

                 </div>

 </div>
     <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-4">Site<span class="required">*</span></label>
                         <div class="col-lg-8">
                       <select name= "site" class="form-control" id="formGender" required>
                                                <option value="">Choisissez</option>
                                                <option value="Conakry" >Conakry</option>
                                                <option value="Boke" >Boke</option>
                                                 
                                            </select>   

                              </div>

                            </div>
                              <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Date <span class="required">*</span></label>
                      <div class="col-lg-8">
                       <input name= "dat" type="date" class=" form-control" value="23/05/2019" required />
                      </div>
                    </div>

                      <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Heure <span class="required">*</span></label>
                      <div class="col-lg-8">
                         <input name="heure" type="time" class=" form-control" required />
                      </div>
                    </div>
                                   <div id="immat" style="visibility:hidden; display:none;">
                           <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Immatriculation Affrété<span class="required"> *</span></label>
                      <div class="col-lg-8">
                         <input name="immatriculation" type="text" class=" form-control"/>
                      </div>
                    </div>
                    </div>

     

 </div>
                    </div>
                    </div>



                  <div class="col-md-6">  
  <div class="row">
                 
                    <div class="block">
                  <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Image<span class="required">* 
                        </span></label>
                      <div class="file-field">
                    <div class="btn btn-info btn-sm float-left">
                   <input name="photo" type="file" required="" >
                   </div>
                    </div>
                    </div>
                      <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Action Corrective <span class="required">*</span></label>
                      <div class="col-lg-8">
                       <input name= "ai" type="text" class=" form-control"  required />
                      </div>
                    </div>

                      <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Action Préventive <span class="required">*</span></label>
                      <div class="col-lg-8">
                         <input name="ap" type="text" class=" form-control" required />
                      </div>
                    </div>




                      <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Lieu  <span class="required">*</span></label>
                      <div class="col-lg-8">
                       <input name="lieu" type="text" class=" form-control" required />
                      </div>
                    </div>


                      <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Victime <span class="required"></span></label>
                      <div class="col-lg-8">
                       <input name="victime" type="text" class=" form-control" />
                      </div>
                    </div>
                <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-4">Cause<span class="required">*</span></label>
                         <div class="col-lg-8">
                       <select name= "cause" class="form-control" id="formGender" required>
                       <option value="" >Choisissez</option>
                                                <option >Matière</option>
                                                <option >Milieu</option>
                                                <option >Main d'oeuvre</option>
                                                <option >Methode</option>
                                                <option >Materiel</option>
                                              
                                            </select>   

                              </div>

                            </div>
        <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Degat <span class="required">*</span></label>
                      <div class="col-lg-8">
                       <input name="degat" type="text" class=" form-control" required/>
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Description <span class="required">*</span></label>
                      <div class="col-lg-8">
                        <textarea name="description" type="text" class=" form-control" rows="3" maxlength="180" required> </textarea>
                      </div>
                    </div>
                          <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-4">Observation <span class="required"></span></label>
                      <div class="col-lg-8">
                        <textarea name="observation" type="text" class=" form-control" rows="3" maxlength="180"></textarea>
                      </div>
                    </div>
                   </div>
                    </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-offset-5 col-lg-7">

<div class="form-group ">
                       
                      <div class="col-lg-8">
                         <input name="lieux" type="hidden" value="<?php echo $_SESSION['lieux']; ?>" class=" form-control"/>
                      </div>
                    </div>


                         
                      </div>
                    </div>
                    </div>
<div class="row">
                            
                                 <div class="modal-footer">
              <button type="reset" class="btn btn-danger btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> <a href="data.php">Annuler</a></button>
              <button type="submit" class="btn btn-info btn-flat" name="envoyer"><i class="fa fa-save"></i>Enregistrer</button>
              </div>
                    </div>
                  </form>
            	 
                
                
          	</div>
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
 <script>
function champ_visible(val)
{
  if(val!='UMS') 
  {
    document.getElementById('immat').style.visibility='visible';
    document.getElementById('immat').style.display='block';
  } else  {
    document.getElementById('immat').style.visibility='hidden';
    document.getElementById('immat').style.display='none';
  }
}
</script>
