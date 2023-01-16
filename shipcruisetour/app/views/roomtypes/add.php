<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="addCruise" style="margin-top:100px;">
    <a href="<?php echo URLROOT; ?>/roomtypes" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
      <div class="card card-body bg-light mt-3">
        <h2>Add your Room Type</h2>
        <form action="<?php echo URLROOT; ?>/roomtypes/add" method="post"  enctype="multipart/form-data" class="formAddCruise">
          <div class="form-group">
              <label>Prix:<sup>*</sup></label>
              <input type="number" name="prix" class="form-control form-control-lg <?php echo (!empty($data['prix_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['prix']; ?>" placeholder="Add the Room price...">
              <span class="invalid-feedback"><?php echo $data['prix_err']; ?></span>
          </div>
          <div class="form-group">
              <label>Capacity:<sup>*</sup></label>
              <input type="number" name="capacite" class="form-control form-control-lg <?php echo (!empty($data['capacite_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['capacite']; ?>" >
              <span class="invalid-feedback"><?php echo $data['capacite_err']; ?></span>
          </div> 
          <div class="form-group">
              <label>Room Type:<sup>*</sup></label>
              <input type="text" name="type" class="form-control form-control-lg <?php echo (!empty($data['type_err'])) ? 'is-invalid' : ''; ?>" ><?php echo $data['type']; ?></input>
              <span class="invalid-feedback"><?php echo $data['type_err']; ?></span>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div> 
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
   