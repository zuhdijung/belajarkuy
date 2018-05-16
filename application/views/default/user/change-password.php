	<div class="kuy-page">
		<div class="container-fluid">
			<div class="text-center">
				<h2>Ganti Password</h2>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="detail">
						<h3 class="text-center">Form Ganti Password</h3>
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<?php echo form_open(''); ?>
								<div class="form-group">
									<label>Password Lama</label>
									<input type="password" name="old" class="form-control">
								</div>
								<div class="form-group">
									<label>Password Baru</label>
									<input type="password" name="new" class="form-control">
								</div>
								<div class="form-group">
									<label>Konfirmasi Password Baru</label>
									<input type="password" name="confirm" class="form-control">
								</div>
								<div class="form-group">
									<button class="btn btn-login" type="submit">Ganti</button>
								</div>
								<?php 
								echo validation_errors();
								echo form_close(''); ?>
							</div>
						</div>
					</div> <!-- end of detail -->
				</div>
				<div class="col-md-4">
					<div class="detail">
						<div class="row">
							<div class="col-md-3">
								<img src="<?php echo base_url('asset/images/user-male.png') ?>" class="img-fluid">
							</div>
							<div class="col-md-9">
								<h3>{name}</h3>
								<p>{status}</p>
								<a href="<?php echo base_url('user/logout/')?>"><button class="btn btn-login">Keluar</button></a>
							</div>
						</div>
					</div>
					<div class="detail" style="margin-top: 20px;">
						<?php $this->load->view('default/user/nav');?>
					</div>
				</div>
			</div> <!-- end of row-->
		</div> <!-- end of container-fluid -->
	</div> <!-- end of kuy-sharing -->