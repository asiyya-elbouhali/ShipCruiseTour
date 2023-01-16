<?php require APPROOT . '/views/inc/header.php'; ?>





























 <div class="showports"></div>
 <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link active" >Ships</a>
    <a class="nav-link" href="<?= URLROOT; ?>/ports">Ports</a>
    <a class="nav-link" href="<?= URLROOT; ?>/cruises">Cruises</a>
    <a class="nav-link " href="<?= URLROOT; ?>/rooms">Rooms</a>
    <a class="nav-link " href="<?= URLROOT; ?>/clientsreservations">Clients Reservations</a>

  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
  <table class="table bg-light ">
  <div class="col-md-6 ">
    <!-- <h1>Ships</h1> -->
    </div>
  <?php flash('ship_message'); ?>

  <div class="col-ml-6">
      <a class="btn btn-primary pull-right" href="<?php echo URLROOT; ?>/ships/add"><i class="fa fa-pencil" aria-hidden="true"></i> Add Ships</a>
    </div>
  <thead class="text-center">
    <tr>
      <th scope="col">N°</th> 
      <th scope="col">Name</th>
      <th scope="col">photo</th>
      <th scope="col">Places number</th>
      <th scope="col">Rooms number</th>
    </tr>
  </thead>
  <?php foreach($data['ships'] as $ship) : ?>
  <tbody class="text-center">
    <tr>
      <th scope="row" class="counterCell"></th>
      <td><?php echo $ship->nom; ?></td>
      <td><img src="./<?php echo $ship->image; ?>" width="80px"></td>
      <td><?php echo $ship->nombre_places; ?></td>
      <td><?php echo $ship-> nombre_chambres; ?></td>
      <td>  <a class="btn btn-dark" href="<?php echo URLROOT; ?>/ships/show/<?php echo $ship->id; ?>">More</a>
</td>
   </tr>
  </tbody>
  <?php endforeach; ?>
</table>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"><a href="<?= URLROOT; ?>/ports" >lkqDNFIOD</a></div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">...</div>
  <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab" tabindex="0">...</div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>