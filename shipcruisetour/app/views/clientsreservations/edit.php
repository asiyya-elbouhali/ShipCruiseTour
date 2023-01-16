
<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="editPort" style="color: black;">
<a href="<?php echo URLROOT; ?>/ports/index" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
      <div class="card card-body bg-light mt-5">
        <h2>Edit Room</h2>
        <p>Change the details of this room</p>
        <form action="<?= URLROOT; ?>/rooms/edit/<?= $data['id']; ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
              <label>Room number:<sup>*</sup></label>
              <input type="number" name="roomnumber" class="form-control form-control-lg <?= (!empty($data['nom_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['room_number']; ?>">
              <span class="invalid-feedback"><?= $data['nom_err']; ?></span>
          </div>    
          <div class="form-group">
              <br>
              <select name="id_ship" >
                <option value="">Please choose ship</option>
                <?php foreach($data['allshiprooms'] as $room) :  ?>
                <option value="<?= $room->id; ?>" 
                               <?php if ($room->id == $data['roomship'])
                               echo "SELECTED";?>> <?= $room->nom;?></option>
                <?php endforeach ;?>
              </select>
          </div>    
          <div class="form-group">
              <label>Type:<sup>*</sup></label>
              <br>

              <select name="id_type" >
                <option value="">Please choose ship</option>
                <?php foreach($data['allroomtypes'] as $typeroom):?>
                  <option value="<?= $typeroom->id; ?>" 
                         <?php if ($typeroom->id == $data['roomtype'])
                       echo "SELECTED"; ?> > <?= $typeroom->type;?></option>
                <?php endforeach ;?>

              </select>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div> 
      </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
