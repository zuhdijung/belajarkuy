	<div class="kuy-page">
		<div class="container-fluid">
			<div class="text-center">
				<h2>Ubah Profil</h2>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="detail">
						<h3 class="text-center">Form Ubah Profil</h3>
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<?php echo form_open_multipart(''); ?>
								<div class="text-center">
									<img src="{image_user}" style="width: 150px">
								</div>
								<div class="form-group">
									<label>Ganti Gambar Profil</label>
									<input type="file" name="userfile" class="form-control">
								</div>
								<div class="form-group">
									<label>Username</label>
									<input type="text" name="username" placeholder="Username" value="{username}" disabled="" class="form-control">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="text" name="email" placeholder="Username" value="{email}" class="form-control">
								</div>
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="name" placeholder="Nama Lengkap" value="{name}" class="form-control">
								</div>
								<div class="form-group">
									<button class="btn btn-login" type="submit">Ubah</button>
								</div>
								<?php 
								echo validation_errors();
								echo form_close(''); ?>
							</div>
						</div>
					</div> <!-- end of detail -->
				</div>
				<div class="col-md-4">
					<?php $this->load->view('default/user/nav');?>
				</div>
			</div> <!-- end of row-->
		</div> <!-- end of container-fluid -->
	</div> <!-- end of kuy-sharing -->