<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="editShip">
<a href="<?php echo URLROOT; ?>/ships/index" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
      <div class="card card-body bg-light mt-5">
        <h2>Edit Room Type</h2>
        <p>Change the details of this ship</p>
        <form action="<?= URLROOT; ?>/roomtypes/edit/<?= $data['id']; ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label>Prix:<sup>*</sup></label>
              <input type="text" name="prix" class="form-control form-control-lg <?= (!empty($data['prix_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['prix']; ?>">
              <span class="invalid-feedback"><?= $data['prix_err']; ?></span>
          </div>     
          <div class="form-group">
          <label>Capacite:<sup>*</sup></label>
              <input type="number" name="capacite" class="form-control form-control-lg <?= (!empty($data['capacite_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['capacite']; ?>">
              <span class="invalid-feedback"><?= $data['capacite_err']; ?></span>
          </div>
          <div class="form-group">
              <label>Type:<sup>*</sup></label>
              <input type="text" name="type" class="form-control form-control-lg <?= (!empty($data['type_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['type']; ?>">
              <span class="invalid-feedback"><?= $data['type_err']; ?></span>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div>  
      </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
