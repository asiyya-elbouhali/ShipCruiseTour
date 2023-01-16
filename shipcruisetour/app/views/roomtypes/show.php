<?php require APPROOT . '/views/inc/header.php'; ?>



<div class="show showCruise" >
  <a href="<?php echo URLROOT; ?>/roomtypes" class="btn btn-light mb-3"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
  <br>

  <?php 
 
  if($_SESSION['user_id']) : ?>
  <h1>Room Type</h1>
  <p><?= $data['roomtype']->prix; ?></p>
  <p><?= $data['roomtype']->capacite; ?></p>
  <p><?= $data['roomtype']->type; ?></p> 

    <hr>
    <a class="btn btn-dark" href="<?= URLROOT; ?>/roomtypes/edit/<?= $data['roomtype']->id; ?>">Edit</a>

    <form class="pull-right" action="<?= URLROOT; ?>/roomtypes/delete/<?= $data['roomtype']->id; ?>" method="post">
      <input type="submit" class="btn btn-danger" value="Delete">
    </form>
  <?php endif; ?>
 
  </div> 

  
  
<?php require APPROOT . '/views/inc/footer.php'; ?>