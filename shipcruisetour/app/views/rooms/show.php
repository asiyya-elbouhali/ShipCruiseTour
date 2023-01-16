<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="show showShip" >
  <a href="<?php echo URLROOT; ?>/rooms" class="btn btn-light mb-3"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
  <br>

  <?php 
 
  if($_SESSION['user_id']) : ?>
  <h1><?= $data['room']->room_number; ?></h1>
  <p><?= $data['room']->shipnom; ?></p>
  <p><?= $data['room']->roomtype; ?></p>

    <hr>
    <a class="btn btn-dark" href="<?= URLROOT; ?>/rooms/edit/<?= $data['room']->id; ?>">Edit</a>

    <form class="pull-right" action="<?= URLROOT; ?>/rooms/delete/<?= $data['room']->id; ?>" method="post">
      <input type="submit" class="btn btn-danger" value="Delete">
    </form>
  <?php endif; ?>
 
  </div>

  
  
<?php require APPROOT . '/views/inc/footer.php'; ?>