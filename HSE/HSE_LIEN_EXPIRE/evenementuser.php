<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from themifycloud.com/demos/templates/joli/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:11:33 GMT -->
<head>        
        <!-- META SECTION -->
        <title>HSE EVENEMENTS</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.png" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                  
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR --> 

         <?php include("asideuser.php") ?>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                     
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                     
                    <!-- END SIGN OUT -->
                    <!-- MESSAGES -->
                     <?php 
                  include("user.php")
                       ?>
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    
                    <!-- END TASKS -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                    
                
                <!-- START BREADCRUMB -->
                
                <!-- END BREADCRUMB -->
                
                <!-- PAGE TITLE -->
                <div class="page-title">                    
                    <div class="panel panel-default">
                                <button class="btn btn-info btn-block">
                                    <h3 class="panel-title"><strong>HSE  EVENEMENTS</strong></h3>
                                    
                                </button>
                                 </div>
                
                <!-- END PAGE TITLE -->                
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">                
                
                    <div class="row">
                        <div class="col-md-12">

                            <!-- START VALIDATIONENGINE PLUGIN -->
                            <div class="block">                                                 
                <form class="form-validate form-horizontal" action="enregistrerevents.php"  method="POST" enctype="multipart/form-data" >
                          <div class="panel panel-info">
                                            <div class="panel-heading ui-draggable-handle">
                                                <h3 class="panel-title"><strong>Ajouter un évènement</strong></h3>
                                                
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

$req = $db->query('SELECT * FROM chauffeur');
$s = $db->query('SELECT * FROM vehicule');
$e = $db->query('SELECT * FROM entreprise');
$chauffeur = $db->query('SELECT distinct(fonction_chauff) FROM chauffeur');
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
                      <label for="ccomment" class="control-label col-lg-4">Fonction Chauffeur<span class="required">*</span></label>
                         <div class="col-lg-8">
                        <select name="fc" class="form-control" id="formGender" required>
        <option value="" >Choisissez</option>
                                                  <?php 
while ($c=$chauffeur->fetch()) {
    echo '
<option value='.$c['fonction_chauff'].'>'.$c['fonction_chauff'].'</option>
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
                                                <option >Shift 1</option>
                                                <option >Shift 2</option>
                                                
                                                 
                                            </select>   

                 </div>

 </div>
     <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-4">Site<span class="required">*</span></label>
                         <div class="col-lg-8">
                       <select name= "site" class="form-control" id="formGender" required>
                                                <option value="" >Choisissez</option>
                                                <option>Site 1</option>
                                                <option >Site 2</option>
                                            
                                                
                                                 
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
                                                <option value="" >Choisissez une cause</option>
                                                <option >Dépassement dangereux</option>
                                                <option>Excès de vitesse</option>
                                                <option >Non-respect de distance de sécurité</option>
                                                <option >Fatigue (somnolence, sommeil)</option>
                                                <option >Inattention</option>
                                                <option >Mauvaise manœuvre</option>
                                                <option >Précipitation</option>
                                                <option >Non port d’EPI</option>
                                                <option >Méthode, mode opératoire inadapté</option>
                                                <option >Marche en arrière</option>
                                                <option >Non-respect du plan de circulation</option>
                                                <option >Vitesse non appropriée à la zone</option>
                                                <option >Manque ou insuffisance de l’éclairage</option>
                                                <option >Manque de formation</option>
                                                <option >Distraction au volant (téléphone, mangé, fumé etc…)</option>
                                                <option >Non-respect de consigne sécuritaire</option>
                                                <option >Encombrement de zone</option>
                                                <option >Pluie</option>
                                                <option >Poussière</option>
                                                <option >Brouillard</option>
                                                <option >Chaussé glissante</option>
                                                <option >Évènements extérieurs imprévisibles et non maitrisables</option>
                                                <option >Mauvais état de la chaussée ou plateforme</option>
                                                <option >Défaillance du matériel</option>
                                                <option >EPI défectueux ou inapproprié</option>
                                                <option >Utilisation de matériel non approprié</option>
                                            
                                                
                                                 
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
                            
                                 <div class="form-group">
                      <div class="col-lg-offset-5 col-lg-10">
                        <button class="btn btn-success" type="submit" id='submit' name= "submit">Ajouter</button>
                        <button class="btn btn-danger" type="reset">Annuler</button>
                      </div>
                    </div>      
                    </div>
                  </form>


                                 

                            
                            </div>                                               
                            <!-- END VALIDATIONENGINE PLUGIN -->

                        </div>                       
                        </div>
                    </div>


   
                    <div class="row">
                        <div class="col-md-12">

                          

                        </div>
                    </div>
                        
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        
        <!-- MESSAGE BOX-->
         
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                 
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>        
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-select.js'></script>        

        <script type='text/javascript' src='js/plugins/validationengine/languages/jquery.validationEngine-en.js'></script>
        <script type='text/javascript' src='js/plugins/validationengine/jquery.validationEngine.js'></script>        

        <script type='text/javascript' src='js/plugins/jquery-validation/jquery.validate.js'></script>                

        <script type='text/javascript' src='js/plugins/maskedinput/jquery.maskedinput.min.js'></script>
        <!-- END THIS PAGE PLUGINS -->               

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="js/settings.js"></script>
        
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/actions.js"></script>
        <!-- END TEMPLATE -->
        
        <script type="text/javascript">
            var jvalidate = $("#jvalidate").validate({
                ignore: [],
                rules: {                                            
                        login: {
                                required: true,
                                minlength: 2,
                                maxlength: 8
                        },
                        password: {
                                required: true,
                                minlength: 5,
                                maxlength: 10
                        },
                        're-password': {
                                required: true,
                                minlength: 5,
                                maxlength: 10,
                                equalTo: "#password2"
                        },
                        age: {
                                required: true,
                                min: 18,
                                max: 100
                        },
                        email: {
                                required: true,
                                email: true
                        },
                        date: {
                                required: true,
                                date: true
                        },
                        credit: {
                                required: true,
                                creditcard: true
                        },
                        site: {
                                required: true,
                                url: true
                        }
                    }                                        
                });                                    

        </script>
                   
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

    <!-- END SCRIPTS -->          
        
    </body>

<!-- Mirrored from themifycloud.com/demos/templates/joli/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Jul 2018 11:11:34 GMT -->
</html>






