<?php require APPROOT . '/views/inc/header.php'; ?>



<div class="show showCruise" >
  <a href="<?php echo URLROOT; ?>/cruises" class="btn btn-light mb-3"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
  <br>

  <?php 
 
  if($_SESSION['user_id']) : ?>
  <h1>Cruise</h1>
  <p><?= $data['prix']->prix; ?></p>
  <div><img src="<?= URLROOT;$data['image'] ?>" alt=""></div>
  <p><?= $data['nombre_nuits']->nombre_nuits; ?></p>
  <p><?= $data['port_depart']->port_depart; ?></p> 
  <p><?= $data['date_depart']->date_depart; ?></p> 
  <p><?= $data['ship']->ship; ?></p> 

    <hr>
    <a class="btn btn-dark" href="<?= URLROOT; ?>/cruises/edit/<?= $data['cruise']->id; ?>">Edit</a>

    <form class="pull-right" action="<?= URLROOT; ?>/cruises/delete/<?= $data['cruises']->id; ?>" method="post">
      <input type="submit" class="btn btn-danger" value="Delete">
    </form>
  <?php endif; ?>
 
  </div> 

  
  
<?php require APPROOT . '/views/inc/footer.php'; ?>