<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MASUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<?php echo form_open('p/login') ?>
        <div class="form-group">
        	<label>Username</label>
        	<input type="text" name="username" class="form-control" placeholder="Masukkan Username">
        </div>
        <div class="form-group">
        	<label>Password</label>
        	<input type="password" name="password" class="form-control" placeholder="Masukkan Password Pengguna">
        </div>
        <div class="form-group">
        	<button type="submit" class="btn btn-login">Masuk</button>
        </div>
        <p>Belum Punya Akun? <a href="#" data-toggle="modal" data-target="#registerModal">Daftar</a></p>
        <?php echo form_close('')?>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg fixed-top navbar-light <?php if($this->uri->segment(1) != '') echo "bg-orange"?>">
	  <a class="navbar-brand" href="#"><img src="<?php echo base_url('asset/images/logo-belajarkuy.png')?>" alt="Logo Belajar Kuy"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <!-- <div class="navbar-nav">
	      
	      <a class="nav-item nav-link" href="#" data-toggle="modal" data-target="#loginModal">MASUK</a>
	    </div> -->
      <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('')?>">DEPAN <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('sharing')?>">SHARING</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('idea')?>">IDE BAIK</a>
      </li>
      <?php
        if($this->session->userdata('login_user') == FALSE){
      ?>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal">MASUK</a>
      </li>
      <?php
        }
        else{
          ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PROFIL
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="<?php  echo base_url('user/dashboard')?>">Dashboard</a>
              <a class="dropdown-item" href="<?php  echo base_url('user/edit-profile')?>">Ubah Profil</a>
              <a class="dropdown-item" href="<?php  echo base_url('user/change-password')?>">Ganti Password</a>
              <a class="dropdown-item" href="<?php  echo base_url('user/event')?>">Event</a>
              <a class="dropdown-item" href="<?php  echo base_url('user/idea')?>">Ide Baik</a>
              <a class="dropdown-item" href="<?php  echo base_url('user/participant')?>">Peserta</a>
              <a class="dropdown-item" href="<?php  echo base_url('user/payment')?>">Pembayaran</a>
              <a class="dropdown-item" href="<?php  echo base_url('user/logout')?>">Keluar</a>
            </div>
          </li>
          <?php
        }
      ?>
    </ul>
	  </div>
	</nav>

	<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DAFTAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<?php echo form_open('p/register') ?>
        <div class="form-group">
        	<label>Username</label>
        	<input type="text" name="username" class="form-control" placeholder="Masukkan Username">
        </div>
        <div class="form-group">
        	<label>Password</label>
        	<input type="password" name="password" class="form-control" placeholder="Masukkan Password Pengguna">
        </div>
        <div class="form-group">
        	<label>Konfirmasi Password</label>
        	<input type="password" name="confirm" class="form-control" placeholder="Masukkan Konfirmasi Password">
        </div>
        <div class="form-group">
        	<label>Email</label>
        	<input type="text" name="email" class="form-control" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
        	<button type="submit" class="btn btn-login">Daftar</button>
        </div>
        <p>Sudah Punya Akun? <a href="#" data-dismiss="modal" data-target="#registerModal">Login</a></p>
        <?php echo form_close('')?>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>