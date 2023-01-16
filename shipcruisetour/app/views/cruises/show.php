<?php require APPROOT . '/views/inc/header.php'; ?>



<div class="show showCruise" style="margin-top: 80px;" >
  <a href="<?php echo URLROOT; ?>/cruises" class="btn btn-light mb-3"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
  <br>
 
  <?php 
 
  if($_SESSION['user_id']) : ?>
  <h1>Cruise</h1>
  <br>
  <p><?php echo $data['cruise']->nom; ?></p>
  <p><?php echo $data['cruise']->prix; ?></p>
  <div><img src="../<?=$data['cruise']->image;?>" ></div>
  <p><?= $data['cruise']->nombre_nuits; ?></p>
  <p><?= $data['cruise']->port_depart; ?></p> 
  <p><?= $data['cruise']->date_depart; ?></p> 
  <p><?= $data['cruise']->shipnom; ?></p> 
  <p><?= $data['cruise']->descriptif; ?></p> 


    <hr> 
    <a class="btn btn-dark" href="<?= URLROOT; ?>/cruises/edit/<?= $data['cruise']->id; ?>">Edit</a>

    <form class="pull-right" 
    action="<?= URLROOT; ?>/cruises/delete/<?
    = $data['cruise']->id; ?>" method="post">
      <input type="submit"
       class="btn btn-danger" value="Delete">
    </form>
  <?php endif; ?>
 
  </div> 

  
  
<?php require APPROOT . '/views/inc/footer.php'; ?>