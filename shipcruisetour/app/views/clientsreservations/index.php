<?php require APPROOT . '/views/inc/header.php'; ?>

 <div class="showrooms" style="margin-top: 83px;"></div>
 <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a  class="nav-link " href="<?= URLROOT; ?>/ships" >Ships</a>
    <a class="nav-link " href="<?= URLROOT; ?>/ports">Ports</a>
    <a class="nav-link" href="<?= URLROOT; ?>/cruises">Cruises</a>
    <a class="nav-link " href="<?= URLROOT; ?>/rooms">Rooms</a>
    <a class="nav-link " href="<?= URLROOT; ?>/roomtypes">Room Types</a>
    <a class="nav-link active" href="<?= URLROOT; ?>/clientsreservations">Clients Reservations</a>



  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0"></div>
 
  <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">.....</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"><a href="<?= URLROOT; ?>/ports" >lkqDNFIOD</a></div>
  <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0"><table class="table bg-light ">
  <div class="tab-pane fade " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">  <table class="table bg-light ">
  <div class="col-md-6 ">
    </div>
  <!-- <?php flash('room_message'); ?> -->

  <div class="col-ml-6">
      <a class="btn btn-primary pull-right" href="<?php echo URLROOT; ?>/clientsreservations/add"><i class="fa fa-pencil" aria-hidden="true"></i> Add room</a>
    </div>
  <thead class="text-center">
    <tr>
      <th scope="col">N°</th> 
      <th scope="col">Client</th>
      <th scope="col">Cruise</th>
      <th scope="col">Date</th>
      <th scope="col">Room Type</th>
      <!-- <th scope="col">Qty</th> -->
      <th scope="col">Price</th>



    </tr> 
  </thead>
  <?php foreach($data['clientsreservations'] as $clientreservation):?>
  <tbody class="text-center">
    <tr>
      <th scope="row" class="counterCell"></th>
      <td><?= $clientreservation->client;?></td>
      <td><?= $clientreservation->cruise;?></td>
      <td><?= $clientreservation->date;?></td>
      <td><?= $clientreservation->roomType;?></td>
      <!-- <td><?= 0?></td> -->
      <td> <?php printf("%.2f",$clientreservation->prix ) ; ?>DH</td>
      <!-- <td>  <a class="btn btn-danger" href="<?php echo URLROOT; ?>/clientsreservations/delete/<?= $clientreservation->date;?>">Cancel</a>
</td> -->
   </tr>
  </tbody>
  <?php endforeach; ?>
</table></div>
<div class="pag">
                  <nav aria-label="Page navigation ">
                  <ul class="pagination">
                    <li class="page-item">
                    <?php for($i = 1 ; $i <= 5 ; $i++): ?>

                      <a class="page-link" href="<?= URLROOT?>/clientsreservations?page=<?=$i-1;?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <?php for($i = 1 ; $i <= 11 ; $i++): ?>
                    <li class="page-item"><a class="page-link" href="<?= URLROOT?>/clientsreservations?page=<?=$i;?>"><?= $i;?></a></li>
                    <?php endfor ;?>
                  

                    <li class="page-item">
                      <a class="page-link" href="<?= URLROOT?>/clientsreservations?page=<?=$i+1;?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                    <?php endfor ;?>
                  </ul>
                  </nav>
                </div>
</div>
    


<?php require APPROOT . '/views/inc/footer.php'; ?>