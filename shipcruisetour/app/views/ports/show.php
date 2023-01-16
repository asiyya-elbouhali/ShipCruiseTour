<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="show showShip" >
  <a href="<?php echo URLROOT; ?>/ports" class="btn btn-light mb-3"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
  <br>

  <?php 
 
  if($_SESSION['user_id']) : ?>
  <h1><?= $data['port']->nom; ?></h1>
  <p><?= $data['port']->pays; ?></p>
    <hr>
    <a class="btn btn-dark" href="<?= URLROOT; ?>/ports/edit/<?= $data['port']->id; ?>">Edit</a>

    <form class="pull-right" action="<?= URLROOT; ?>/ports/delete/<?= $data['port']->id; ?>" method="post">
      <input type="submit" class="btn btn-danger" value="Delete">
    </form>
  <?php endif; ?>
 
  </div>

  
  
<?php require APPROOT . '/views/inc/footer.php'; ?>