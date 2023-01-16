<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="editShip"> 
<a href="<?php echo URLROOT; ?>/cruises/index" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
      <div class="card card-body bg-light mt-5">
        <h2>Edit Ship</h2>
        <p>Change the details of this ship</p>
        <form action="<?= URLROOT; ?>/cruises/edit/<?= $data['id']; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
              <label>Name:<sup>*</sup></label>
              <input type="text" name="nom" class="form-control form-control-lg <?= (!empty($data['nom_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['nom']; ?>">
              <span class="invalid-feedback"><?= $data['nom_err']; ?></span>
          </div> 
        <div class="form-group">
              <label>Price:<sup>*</sup></label>
              <input type="number" name="prix" class="form-control form-control-lg <?= (!empty($data['prix_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['prix']; ?>">
              <span class="invalid-feedback"><?= $data['prix_err']; ?></span>
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
              <label>Nights number:<sup>*</sup></label>
              <textarea name="nombrenuits" class="form-control form-control-lg <?= (!empty($data['nombrenuits_err'])) ? 'is-invalid' : ''; ?>"><?= $data['nombre_nuits']; ?></textarea>
              <span class="invalid-feedback"><?= $data['nombrenuits_err']; ?></span>
          </div>
          <div class="form-group">
              <label>Descriptif:<sup>*</sup></label>
              <textarea name="text" class="form-control form-control-lg <?= (!empty($data['descriptif_err'])) ? 'is-invalid' : ''; ?>"><?= $data['descriptif']; ?></textarea>
              <span class="invalid-feedback"><?= $data['descriptif_err']; ?></span>
          </div>
          <div class="form-group">
              <label>Depart port:<sup>*</sup></label>
              <br>
              <select name="portdepart">   
            <option value=""> please choose a port </option>
            <?php foreach($data['allports'] as $port) :?>
            <option value=" <?= $port->nom; ?>  " 
                         <?php if ($port->nom == $data['port_depart'])
                       echo "SELECTED"; ?> > <?= $port->nom;?></option>
            <?php endforeach; ?>

          </select>
          </div>
          <div class="form-group">
              <label>Date:<sup>*</sup></label>
              <input type="date" name="datedepart" class="form-control form-control-lg <?= (!empty($data['datedepart_err'])) ? 'is-invalid' : ''; ?>"><?= $data['date_depart']; ?>
              <span class="invalid-feedback"><?= $data['datedepart_err']; ?></span>
          </div>
          <div class="form-group">
              <label>Ship:<sup>*</sup></label>
              <!-- <textarea name="ship" class="form-control form-control-lg <?= (!empty($data['ship_err'])) ? 'is-invalid' : ''; ?>"><?= $data['ship']; ?></textarea>
              <span class="invalid-feedback"><?= $data['ship_err']; ?></span> -->
            <br>
              <select name="id_ship">   
            <option value=""> please choose a ship </option>
            <?php foreach($data['allships'] as $ship) :?>
            <option value="<?= $ship->id; ?>" 
                         <?php if ($ship->id == $data['id_ship'])
                       echo "SELECTED"; ?> > <?= $ship->nom;?></option>
            <?php endforeach; ?>
          </select>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div>  
      </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
