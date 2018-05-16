
	<div class="kuy-page">
		<div class="container-fluid">
			<div class="text-center">
				<h2>Masuk</h2>
			</div>
			<div class="row">
				<div class="col-md-6 offset-3">
					<?php echo form_open('');
					echo validation_errors();
					?>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
			        	<button type="submit" class="btn btn-login">Masuk</button>
			        </div>
			        <p>Belum Punya Akun? <a href="<?php echo base_url('p/register/')?>">Daftar</a></p>
			        <?php echo form_close('')?>
				</div>
			</div> <!-- end of row-->
		</div> <!-- end of container-fluid -->
	</div> <!-- end of kuy-sharing -->