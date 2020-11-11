<!--  <?= $user['nama']; ?> -->

<body>
  <!--::header part start::-->
  <header class="main_menu home_menu">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="<?= base_url('home/index') ?>">
              <h4 class="text-warning">MAP SCHOOL</h4> <!-- <img src="<?= base_url() ?>template/img/logo.png" alt="logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse main-menu-item justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav align-items-center">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">Set Hak Akses</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('home/datapending') ?>">Data Pending</a>
                </li>


                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="d-none d-lg-block">
                  <a class="btn_1 text-dark" href="<?= base_url('home/Logout') ?>">Logout</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>