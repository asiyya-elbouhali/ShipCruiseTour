<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="addCruise" style="margin-top:100px;">
    <a href="<?php echo URLROOT; ?>/cruises" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
      <div class="card card-body bg-light mt-3">
        <h2>Add your cruise</h2>
        <!-- <p>Create a cruise with this form</p> -->
        <form action="<?php echo URLROOT; ?>/cruises/add" method="post"  enctype="multipart/form-data" class="formAddCruise">
        <div class="form-group">
              <label>Nom:<sup>*</sup></label>
              <input type="text" name="nom" class="form-control form-control-lg <?php echo (!empty($data['nom_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['nom']; ?>" placeholder="Add the cruise Name...">
              <span class="invalid-feedback"><?php echo $data['nom_err']; ?></span>
          </div>
        <div class="form-group">
              <label>Prix:<sup>*</sup></label>
              <input type="number" name="prix" class="form-control form-control-lg <?php echo (!empty($data['prix_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['prix']; ?>" placeholder="Add the cruise price...">
              <span class="invalid-feedback"><?php echo $data['prix_err']; ?></span>
          </div>
          <div class="form-group">
              <label>Photo:<sup>*</sup></label>
              <input type="file" name="image" class="form-control form-control-lg <?php echo (!empty($data['image_err'])) ? 'is-invalid' : ''; ?>" value="<?= $data['image']; ?>" >
              <span class="invalid-feedback"><?php echo $data['nom_err']; ?></span>
          </div> 
          <div class="form-group">
              <label>Number of nights:<sup>*</sup></label>
              <input type="number" name="nombrenuits" class="form-control form-control-lg <?php echo (!empty($data['nombrenuits_err'])) ? 'is-invalid' : ''; ?>" ><?php echo $data['nombre_nuits']; ?></input>
              <span class="invalid-feedback"><?php echo $data['nombrenuits_err']; ?></span>
          </div>
          <div class="form-group">
              <label>Descriptif:<sup>*</sup></label>
              <input type="text" name="descriptif" class="form-control form-control-lg <?php echo (!empty($data['descriptif_err'])) ? 'is-invalid' : ''; ?>" ><?php echo $data['descriptif']; ?></input>
              <span class="invalid-feedback"><?php echo $data['descriptif_err']; ?></span>
          </div>
          <div class="form-group">
          <div class="addPort" id="addPortBtn">
           <button>  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M5 21h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2zm2-10h4V7h2v4h4v2h-4v4h-2v-4H7v-2z"></path></svg></button>
          </div>
          <div class="" id="addPort">
              <label>Choisi l'itinéraire:<sup>*</sup></label>
              <hr>
              <select id="portSelected"  name="itineraire" >
          <option value=""  disabled selected hidden> </option>
            <?php foreach($data['ports'] as $port) :?>
            <option id="portOption" value="<?= $port->nom;?>"> <?= $port->nom;?></option>
            <?php endforeach; ?>
          </select>
          <input type="hidden" id="itineraireValue" name="itineraire" value="">
          </div>
          </div>
         
          <div class="form-group" id="addPort">
              <label>Port de depart:<sup>*</sup></label>
              <hr>
              <select  name="port_depart" >
          <option value=""  disabled selected hidden> choose depart port </option>
            <?php foreach($data['ports'] as $port) :?>
            <option value="<?= $port->id;?>"> <?= $port->nom;?></option>
            <?php endforeach; ?>
          </select>
          </div>
         
          <div class="form-group">
              <label>Date de depart:<sup>*</sup></label>
              <input type="date" name="datedepart" min="<?php echo $data['date']; ?>" class="form-control form-control-lg <?php echo (!empty($data['datedepart_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['date_depart']; ?></input>
              <span class="invalid-feedback"><?php echo $data['datedepart_err']; ?></span>
              </div>
        
          <div class="form-group">
          <select name="id_ship">   
       <option value=""> please choose a ship </option>
            <?php foreach($data['ships'] as $ship) :?>
            <option value=" <?= $ship->id;?>"> <?= $ship->nom;?></option>
            <?php endforeach; ?>

          </select>
          </div>
          <input type="submit" class="btn btn-success" value="Submit">
        </form>
      </div> 
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>



<script>
  const add = document.getElementById('addPort');
  const port = document.getElementById('portOption');

  document.getElementById('addPortBtn').addEventListener('click', (e) => {
    e.preventDefault();

     
  var selectElement = document.getElementById("portSelected");
  var selectedOptionValue = selectElement.selectedOptions[0].textContent;
    add.innerHTML += 
    `<h6>Port:</h6><div class="itineraire">`+ selectedOptionValue+`</div>`;
    const itineraire = document.getElementsByClassName('itineraire');
          for(let i=0;i<itineraire.length;i++){
            // console.log(itineraire[i].textContent);
            const itineraireValues=itineraire[i].textContent;
            console.log(itineraireValues);
            document.getElementById('itineraireValue').value += itineraireValues + '-';
          };
          });
          
         
          
          
</script>
   