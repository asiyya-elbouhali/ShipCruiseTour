<?php require APPROOT . '/views/inc/header.php'; ?>



<div class="reservations">
<h1> My Reservations</h1>

<table class="table table-light ">
  <thead>
    <tr>
      <th scope="col">N°</th>
      <th scope="col">Cruise</th>
      <th scope="col">Reservation Date</th>
      <th scope="col">Depart Date</th>
      <th scope="col">Room</th>
      <!-- <th scope="col">Qty</th> -->
      <th scope="col">Price</th>
      <th scope="col"></th>


    </tr>
  </thead>
  <tbody>
        <?php foreach($data['AllClientReservations'] as $AllClientReservations):?>
    <tr>
      <th scope="row" class="counterCell"></th>
      <td><?= $AllClientReservations->cruiseName;?></td>
      <td><?= $AllClientReservations->date;?></td>
      <td><?= $AllClientReservations->cruiseDepart;?></td>
      <td><?= $AllClientReservations->roomType;?></td>
      <td><?php printf('%.2f',$AllClientReservations->prix );?>$</td>
      <td style="width: 2%;"> 
      <form class="btn btn-danger pull-right" action="<?= URLROOT; ?>/clientsreservations/delete/<?= $AllClientReservations->id_reservation?>" method="post">
      <input type="submit" class="btn btn-danger" value="Cancel">
    </form>
</td>
    </tr> 
    <?php endforeach; ?>
  </tbody>
</table>



<div class="pag">
<nav aria-label="Page navigation ">
  <ul class="pagination">
    <li class="page-item">
    <?php for($i = 1 ; $i <= 10 ; $i++): ?>

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














<?php require APPROOT . '/views/inc/header.php'; ?>