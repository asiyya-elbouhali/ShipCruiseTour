<?php require APPROOT . '/views/inc/header.php'; ?>

 <div class="showports"></div>
 <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a  class="nav-link " href="<?= URLROOT; ?>/ships" >Ships</a>
    <a class="nav-link active" href="<?= URLROOT; ?>/ports">Ports</a>
    <a class="nav-link" href="<?= URLROOT; ?>/cruises">Cruises</a>
    <a class="nav-link " href="<?= URLROOT; ?>/rooms">Rooms</a>
    <a class="nav-link" href="<?= URLROOT; ?>/roomtypes">Room Types</a>
    <a class="nav-link " href="<?= URLROOT; ?>/clientsreservations">Clients Reservations</a>



  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0"></div>
  <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">  <table class="table bg-light ">
  <div class="col-md-6 ">
    </div>
  <?php flash('port_message'); ?>

  <div class="col-ml-6">
      <a class="btn btn-primary pull-right" href="<?php echo URLROOT; ?>/ports/add"><i class="fa fa-pencil" aria-hidden="true"></i> Add Port</a>
    </div>
  <thead class="text-center">
    <tr>
      <th scope="col">N°</th> 
      <th scope="col">Name</th>
      <th scope="col">Country</th>
    </tr>
  </thead>
  <?php foreach($data['ports'] as $port) : ?>
  <tbody class="text-center">
    <tr>
      <th scope="row" class="counterCell"></th>
      <td><?php echo $port->nom; ?></td>
      <td><?php echo $port->pays; ?></td>
      <td>  <a class="btn btn-dark" href="<?php echo URLROOT; ?>/ports/show/<?php echo $port->id; ?>">More</a>
</td>
   </tr>
  </tbody>
  <?php endforeach; ?>
</table></div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">...</div>
</div>
    


<?php require APPROOT . '/views/inc/footer.php'; ?>