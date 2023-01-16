<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="addroom" style="color: black; margin-top: 80px;">
<a href="<?php echo URLROOT; ?>/rooms/index" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
      <div class="card card-body bg-light mt-3">
        <h2>Add your room</h2>
        <!-- <p>Create a post with this form</p> -->
        <form action="<?php echo URLROOT; ?>/rooms/add" method="post"  enctype="multipart/form-data" class="formAddShip">
          <div class="form-group">

              <label>Room Number:<sup>*</sup></label>
              <input type="number" name="roomnumber" class="form-control form-control-lg <?php echo (!empty($data['roomnumber_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['roomnumber']; ?>" >
              <span class="invalid-feedback"><?php echo $data['roomnumber_err']; ?></span>
          </div>     
          <div class="form-group">
              <label>Ship:<sup>*</sup></label>
              <br>
              <select name="ship">   
              <option value=""> please choose a ship </option>
              <?php foreach($data['allshiprooms'] as $shiproom) :?>
              <option value=" <?= $shiproom->id;?>"> <?= $shiproom->nom;?></option>
              <?php endforeach; ?>

          </select>
          </div>
          <div class="form-group"> 
              <label>Room type:<sup>*</sup></label>
              <br>
              <select name="roomtype">   
              <option value=""> please choose a Room </option>
              <?php foreach($data['allroomtypes'] as $roomtype) :?>
              <option value=" <?= $roomtype->id;?>"> <?= $roomtype->type;?></option>
              <?php endforeach; ?>

          </select>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div>
      </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
   