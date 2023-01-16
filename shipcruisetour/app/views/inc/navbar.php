<nav class="navbar navbar-dark bg-dark navbar fixed-top">
    <div class="container-fluid logo homeSearch">
        <img src="<?php echo URLROOT ?>/img/light logo.PNG" alt="">
      <!-- <a class="navbar-brand title_navbar"  href="#">Ship Cruise Tour</a> -->
      <form class="form-inline d-flex justify-content-center md-form form-sm mt-0">
        <i class="fa fa-search fa-lg mt-1 " aria-hidden="true" style="margin-right: 10px; color: rgb(196, 196, 196); "></i>
        <input class="form-control transparent-input ml-4 form-control-sm w-90" type="text" placeholder="Search"
          aria-label="Search">
      </form>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><?php echo SITENAME; ?></h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/pages/croisieres">Croisières</a>
            </li>
            <?php if(isset($_SESSION['user_id'])) : ?>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/ships">Management</a>
              </li>
              <?php endif; ?>
            <?php if(isset($_SESSION['user_id'])) : ?>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/pages/booking">Booking</a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/clientsreservations">My Reservations </a>
              </li>
              <?php endif; ?>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Your Space
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
              <?php if(isset($_SESSION['user_id'])) : ?>
                <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/users/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                <?php else : ?>
                <li>
                <a class="dropdown-item" href="<?php echo URLROOT; ?>/users/register"> Register</a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li>
                <a class="dropdown-item" href="<?php echo URLROOT; ?>/users/login">Login</a> 
                </li>
                <?php endif; ?>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>