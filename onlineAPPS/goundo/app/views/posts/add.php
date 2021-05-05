<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i>Rétour</a>
      <div class="card card-body bg-light mt-5">
        <h2 class="text-center">Ajoute une info de dernière minute</h2>
        
        <form action="<?php echo URLROOT; ?>/posts/add" method="post">
          <div class="form-group">
              <label>Titre:<sup>*</sup></label>
              <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>" placeholder="Ajouter un titre...">
              <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
          </div>    
          <div class="form-group">
              <label>Contenu:<sup>*</sup></label>
              <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>" placeholder="Add some text..."><?php echo $data['body']; ?></textarea>
              <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
          </div>
          <input type="submit" class="btn btn-success" value="Envoyer">
        </form>
      </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
