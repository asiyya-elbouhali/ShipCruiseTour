<?php require APPROOT . '/views/inc/header.php'; ?>


 <div class="showports"></div>
 <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-link" href="<?= URLROOT; ?>/ships" >Ships</a>
    <a class="nav-link" href="<?= URLROOT; ?>/ports">Ports</a>
    <a class="nav-link active" href="<?= URLROOT; ?>/cruises">Cruises</a>
    <a class="nav-link " href="<?= URLROOT; ?>/rooms">Rooms</a>
    <a class="nav-link" href="<?= URLROOT; ?>/roomtypes">Room Types</a>
    <a class="nav-link " href="<?= URLROOT; ?>/clientsreservations">Clients Reservations</a>


  </div>
</nav> 
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">.....</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0"><a href="<?= URLROOT; ?>/ports" >lkqDNFIOD</a></div>
  <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0"><table class="table bg-light ">
  <div class="col-md-6 ">
    </div>
  <?php flash('cruise_message'); ?>
 <?php  



?>
  <div class="col-ml-6">
      <a class="btn btn-primary pull-right" href="<?php echo URLROOT; ?>/cruises/add"><i class="fa fa-pencil" aria-hidden="true"></i> Add Cruise</a>
    </div>
  <thead class="text-center">
    <tr>
      <th scope="col">N°</th> 
      <th scope="col">Nom</th>

      <th scope="col">Prix</th>
      <th scope="col">photo</th>
      <th scope="col">Nombre de nuits</th>
      <th scope="col">Port de depart</th>
      <th scope="col">Date de depart</th>
      <th scope="col">itineraire</th>
      <th scope="col">Ship</th>
      <th scope="col">Description</th>
      


    </tr>
  </thead> 
  <!-- for debbuging  -->
  <!-- <pre>
                    <?php print_r($data) ; ?>
                    <pre> -->
                      <!-- end debbuging -->
  <?php foreach($data['cruises'] as $cruise) : ?>
  <tbody class="text-center">
    <tr>
      <th scope="row" class="counterCell"></th>
      <td><?php echo $cruise->nom; ?></td>
      <td><?php printf("%.2f",$cruise->prix ) ; ?>DH</td>
      <td><img src="./<?php echo $cruise->image; ?>" width="80px"></td>
      <td><?php echo $cruise->nombre_nuits; ?></td>
      <td><?php echo $cruise->port_depart; ?></td>
      <td><?php echo $cruise->date_depart; ?></td>
      <td><?php echo  $cruise->itineraire ?></td> 
      <td><?php echo  $cruise->shipnom ?></td> 
      <td><?php echo  $cruise->descriptif ?></td> 
      <td><a class="btn btn-dark " href="<?php echo URLROOT; ?>/cruises/show/<?php echo $cruise->id; ?>">More</a>
</td>
   </tr>
  </tbody>
  <?php endforeach; ?>
</table></div>

<div class="pag">
                  <nav aria-label="Page navigation ">
                  <ul class="pagination">
                    <li class="page-item">
                    <?php for($i = 1 ; $i <= 5 ; $i++): ?>

                      <a class="page-link" href="<?= URLROOT?>/cruises?page=<?=$i-1;?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <?php for($i = 1 ; $i <= 11 ; $i++): ?>
                    <li class="page-item"><a class="page-link" href="<?= URLROOT?>/cruises?page=<?=$i;?>"><?= $i;?></a></li>
                    <?php endfor ;?>
                  

                    <li class="page-item">
                      <a class="page-link" href="<?= URLROOT?>/cruises?page=<?=$i+1;?>" aria-label="Next">
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