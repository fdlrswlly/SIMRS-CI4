  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
          <h3>General</h3>
          <ul class="nav side-menu">
              <li><a href=<?php echo base_url('Dashboard'); ?>><i class="fa fa-dashboard"></i> Dashboard</a>
              </li>
              <?php if (session()->get('role') == 'Admin') { ?>
                  <li><a href="<?php echo base_url('DataKelurahan/datakelurahan'); ?>"><i class="fa fa-edit"></i> Data Kelurahan</a>
                  <?php } ?>
                  <?php if (session()->get('role') == 'Operator') { ?>
                  <li><a href=<?php echo base_url('DataPasien/datapasien'); ?>><i class="fa fa-bookmark"></i> Registrasi Pasien</a>
                  </li>
              <?php } ?>
          </ul>
      </div>
  </div>
  <!-- /menu footer buttons -->
  </div>
  </div>
  <!-- top navigation -->
  <div class="top_nav">
      <div class="nav_menu">
          <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                      <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                          <?php $session = session() ?>
                          <img src="<?php echo base_url('theme'); ?>/production/images/user.png" alt=""><?php echo $session->get('username') ?>
                      </a>
                      <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href=<?php echo base_url('Login'); ?>><i class="fa fa-sign-out pull-right"></i> Logout</a>
                      </div>
                      <!--<a class="dropdown-item" href="<?php //echo base_url('/ChangePassword/change_password');
                                                            ?>"><i
                                  class="fa fa-gear pull-right"></i> Ganti Password </a>!-->
                      <!--<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href=<?php //echo base_url('/auth/login'); 
                                                        ?>><i
                                  class="fa fa-sign-in pull-right"></i> Login</a>
                      </div>!-->
                  </li>


              </ul>
          </nav>
      </div>
  </div>

  <!-- /top navigation -->