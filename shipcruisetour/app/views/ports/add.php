<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="addPort">
<a href="<?php echo URLROOT; ?>" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
      <div class="card card-body bg-light mt-3">
        <h2>Add your port</h2>
        <!-- <p>Create a post with this form</p> -->
        <form action="<?php echo URLROOT; ?>/ports/add" method="post"  enctype="multipart/form-data" class="formAddShip">
          <div class="form-group">
              <label>Port:<sup>*</sup></label>
              <input type="text" name="nom" class="form-control form-control-lg <?php echo (!empty($data['nom_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['nom']; ?>" placeholder="Add a port...">
              <span class="invalid-feedback"><?php echo $data['nom_err']; ?></span>
          </div>    
          <div class="form-group">
              <label>Country:<sup>*</sup></label>
              <input type="text" name="pays" class="form-control form-control-lg <?php echo (!empty($data['pays_err'])) ? 'is-invalid' : ''; ?>" placeholder="Add country..."><?php echo $data['pays']; ?></input>
              <span class="invalid-feedback"><?php echo $data['pays_err']; ?></span>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div>
      </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
   