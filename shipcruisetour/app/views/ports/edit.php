<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="editPort">
<a href="<?php echo URLROOT; ?>/ports/index" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
      <div class="card card-body bg-light mt-5">
        <h2>Edit Port</h2>
        <p>Change the details of this port</p>
        <form action="<?= URLROOT; ?>/ports/edit/<?= $data['id']; ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label>Name:<sup>*</sup></label>
              <input type="text" name="nom" class="form-control form-control-lg <?= (!empty($data['nom_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['nom']; ?>">
              <span class="invalid-feedback"><?= $data['nom_err']; ?></span>
          </div>     
          <div class="form-group">
              <label>Country:<sup>*</sup></label>
              <input type="text" name="pays" class="form-control form-control-lg <?php echo (!empty($data['pays_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['pays']; ?>"><?php echo $data['pays']; ?></input>
              <span class="invalid-feedback"><?php echo $data['pays_err']; ?></span>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div> 
      </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
