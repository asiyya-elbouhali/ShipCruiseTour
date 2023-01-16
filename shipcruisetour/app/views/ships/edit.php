<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="editShip">
<a href="<?php echo URLROOT; ?>/ships/index" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
      <div class="card card-body bg-light mt-5">
        <h2>Edit Ship</h2>
        <p>Change the details of this ship</p>
        <form action="<?= URLROOT; ?>/ships/edit/<?= $data['id']; ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label>Name:<sup>*</sup></label>
              <input type="text" name="nom" class="form-control form-control-lg <?= (!empty($data['nom_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['nom']; ?>">
              <span class="invalid-feedback"><?= $data['nom_err']; ?></span>
          </div>     
          <div class="form-group">
              <label>Photo:<sup>*</sup></label>
              <input type="file" name="image" class="form-control form-control-lg <?php echo (!empty($data['image_err'])) ? 'is-invalid' : ''; ?>">
              <div>
                 <img src="<?= URLROOT."/".$data['image'] ?>" width="200px"/>
            </div> 
              <span class="invalid-feedback"><?php echo $data['image_err']; ?></span>
          </div> 
          <div class="form-group">
              <label>Places number:<sup>*</sup></label>
              <textarea name="nombreplaces" class="form-control form-control-lg <?= (!empty($data['nombreplaces_err'])) ? 'is-invalid' : ''; ?>"><?= $data['nombre_places']; ?></textarea>
              <span class="invalid-feedback"><?= $data['nombreplaces_err']; ?></span>
          </div>
          <div class="form-group">
              <label>Rooms number:<sup>*</sup></label>
              <textarea name="nombrechambres" class="form-control form-control-lg <?php echo (!empty($data['nombrechambres_err'])) ? 'is-invalid' : ''; ?>"><?= $data['nombre_chambres']; ?></textarea>
              <span class="invalid-feedback"><?php echo $data['nombrechambres_err']; ?></span>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div> 
      </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
