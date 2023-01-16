<?php require APPROOT . '/views/inc/header.php'; ?>



<div class="show showShip" >
  <a href="<?php echo URLROOT; ?>/ships" class="btn btn-light mb-3"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
  <br>

  <?php 
 
  if($_SESSION['user_id']) : ?>
  <h1><?= $data['ship']->nom; ?></h1>
  <p><?= $data['ship']->nombre_places; ?></p>
  <p><?= $data['ship']->nombre_chambres; ?></p> 
    <hr>
    <a class="btn btn-dark" href="<?= URLROOT; ?>/ships/edit/<?= $data['ship']->id; ?>">Edit</a>

    <form class="pull-right" action="<?= URLROOT; ?>/ships/delete/<?= $data['ship']->id; ?>" method="post">
      <input type="submit" class="btn btn-danger" value="Delete">
    </form>
  <?php endif; ?>
 
  </div>

  
  
<?php require APPROOT . '/views/inc/footer.php'; ?>