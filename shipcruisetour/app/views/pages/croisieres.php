<?php require APPROOT . '/views/inc/header.php'; ?>





<div class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h4>Discover Our Weekly Offers</h4>
              <h2>Amazing Prices &amp; More</h2>
              <div class="border-button"><a href="about.html">Discover More</a></div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="search-form">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">







            
              <form id="search-form" name="gs" method="post" role="search" 
              action="<?= URLROOT?>/pages/croisieres">
                <div class="row">
                  <div class="col-lg-3"> 
                    <h4>Sort Cruises By:</h4>
                  </div>
                  <!-- <?php var_dump($data['shipsOptions']) ?> -->
                  <div class="col-lg-2">
                      <fieldset>
                          <select name="ship" class="form-select" aria-label="Default select example" id="chooseLocation" onChange="this.form.click()">
                              <option selected>Ship</option>
                              <?php foreach( $data['shipsOptions'] as $ship ) : ?>

                              <option value="<?= $ship->shipnom;?>"><?= $ship->shipnom;?></option>
                              <?php endforeach;  ?>
                          </select>
                      </fieldset> 
                  </div>
                  <div class="col-lg-2">
                      <fieldset>
                          <select name="port" class="form-select" aria-label="Default select example" id="choosePrice" onChange="this.form.click()">
                              <option selected>Port</option>
                              <?php foreach( $data['portsOptions'] as $port ) : ?>

                              <option value="<?= $port->portsChoices;?>"><?= $port->portsChoices;   ?></option>
                              <?php endforeach;  ?>
                          </select>
                      </fieldset>
                  </div>
                  <div class="col-lg-2">

                    <fieldset>
                        <select name="date" class="form-select" aria-label="Default select example">
                            <option selected>Months</option>
                            <?php foreach( $data['datesOptions'] as $date ) : ?>

                            <option value="<?= $date->month;   ?>"><?= $date->month;?></option>
                            <?php endforeach;  ?>
                        </select>
                    </fieldset>
                </div>
                  <div class="col-lg-3">                        
                      <fieldset>
                           <input  class="border-button" value="Search Results" type="submit">
                      </fieldset>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>

      <div class="amazing-deals">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="section-heading text-center">
                <h2>Best Weekly Offers In Each City</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
              </div>
            </div>

        <?php foreach( $data['cruises'] as $cruise ) : 
          if($data['reservedPlaces'] > $data['cruisePlaces']){
          ?>
          
            <div class="col-lg-6 col-sm-6">
              <div class="item">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="image">
                    <img src="../<?php echo $cruise->image; ?>" >
                    </div>
                  </div>
                  <div class="col-lg-6 align-self-center">
                    <div class="content">
                      <span class="info">*Limited Places</span>
                      <h4><?php echo $cruise->nom;?></h4>
                      <div class="row">
                        <div class="col-6">
                          <i class="fa fa-clock"></i>
                          <span class="list"><?php echo $cruise->nombre_nuits; ?> Nights</span>
                        </div>
                        <div class="col-6">
                          <i class="fa fa-map"></i>
                          <span class="list"><?php printf("%.2f",$cruise->prix ) ; ?>$</span>
                        </div>
                      </div>
                      <p><?php echo $cruise->descriptif; ?></p>
                      <div class="main-button">
                        <a class="btn disabled" href="<?= URLROOT; ?>/pages/booking/<?= $cruise->id; ?>"
                          >Make a Reservation</a>
                      </div>
                    </div>
                  </div>
                </div> 
              </div>
            </div>
            <?php 
          }else{
            ?>
            <div class="col-lg-6 col-sm-6">
              <div class="item">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="image">
                    <img src="../<?php echo $cruise->image; ?>" >
                    </div>
                  </div>
                  <div class="col-lg-6 align-self-center">
                    <div class="content">
                      <span class="info">*Limited Places</span>
                      <h4><?php echo $cruise->nom;?></h4>
                      <div class="row">
                        <div class="col-6">
                          <i class="fa fa-clock"></i>
                          <span class="list"><?php echo $cruise->nombre_nuits; ?> Nights</span>
                        </div>
                        <div class="col-6">
                          <i class="fa fa-map"></i>
                          <span class="list"><?php printf("%.2f",$cruise->prix ) ; ?>$</span>
                        </div>
                      </div>
                      <p><?php echo $cruise->descriptif; ?></p>
                      <div class="main-button">
                        <a  href="<?= URLROOT; ?>/pages/booking/<?= $cruise->id; ?>" onclick="reservation()" id="testReservation" <?php if( $data['reservedPlaces'] > $data['cruisePlaces']){ echo ('aria-disabled');} ; ?> >Make a Reservation</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }
          endforeach;  ?>
           
         
              <div class="pag">
                  <nav aria-label="Page navigation ">
                  <ul class="pagination">
                    <li class="page-item">
                    <?php for($i = 1 ; $i <= 5 ; $i++): ?>

                      <a class="page-link" href="<?= URLROOT?>/pages/croisieres?page=<?=$i-1;?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <?php for($i = 1 ; $i <= 11 ; $i++): ?>
                    <li class="page-item"><a class="page-link" href="<?= URLROOT?>/pages/croisieres?page=<?=$i;?>"><?= $i;?></a></li>
                    <?php endfor ;?>
                  

                    <li class="page-item">
                      <a class="page-link" href="<?= URLROOT?>/pages/croisieres?page=<?=$i+1;?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                    <?php endfor ;?>
                  </ul>
                  </nav>
                </div>

          </div>
        </div>
      </div>











      <!-- <script>


            let testReservation = document.getElementById("testReservation");
            testReservation.addEventListener("click",function(e){
              alert("oooooooooooooooooooo");
              e.preventDefault();

            });
                function reservation(e){
                  // if(<?php $data['reservedPlaces'] > $data['cruisePlaces'] ?>){
               
              

                e.preventDefault();
                alert('Sorry This cruise is full!')
               
            
                }
            //  }
            
      </script> -->












<?php require APPROOT . '/views/inc/footer.php'; ?>


