<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="addShip">
<a href="<?php echo URLROOT; ?>" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
      <div class="card card-body bg-light mt-3">
        <h2>Add your ship</h2>
        <!-- <p>Create a post with this form</p> -->
        <form action="<?php echo URLROOT; ?>/ships/add" method="post"  enctype="multipart/form-data" class="formAddShip">
          <div class="form-group">
              <label>Ship:<sup>*</sup></label>
              <input type="text" name="nom" class="form-control form-control-lg <?php echo (!empty($data['nom_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['nom']; ?>" placeholder="Add a title...">
              <span class="invalid-feedback"><?php echo $data['nom_err']; ?></span>
          </div>
          <div class="form-group">
              <label>Photo:<sup>*</sup></label>
              <input type="file" name="image" class="form-control form-control-lg <?php echo (!empty($data['image_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['image']; ?>" >
              <span class="invalid-feedback"><?php echo $data['nom_err']; ?></span>
          </div> 
          <div class="form-group">
              <label>Number of rooms:<sup>*</sup></label>
              <input type="number" name="nombrechambres" class="form-control form-control-lg <?php echo (!empty($data['nombrechambres_err'])) ? 'is-invalid' : ''; ?>" placeholder="Add some text..."><?php echo $data['nombrechambres']; ?></input>
              <span class="invalid-feedback"><?php echo $data['nombrechambres_err']; ?></span>
          </div>
          <div class="form-group">
              <label>Number of places:<sup>*</sup></label>
              <input type="number" name="nombreplaces" class="form-control form-control-lg <?php echo (!empty($data['nombreplaces_err'])) ? 'is-invalid' : ''; ?>" placeholder="Add some text..."><?php echo $data['nombreplaces']; ?></input>
              <span class="invalid-feedback"><?php echo $data['nombreplaces_err']; ?></span>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div>
      </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
   