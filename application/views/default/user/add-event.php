	<div class="kuy-page">
		<div class="container-fluid">
			<div class="text-center">
				<h2>Buat Event</h2>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="detail">
						<h3 class="text-center">Form Event Baru</h3>
						<div class="row">
							<div class="col-md-8 offset-md-2">
								<?php echo form_open(''); ?>
								<div class="form-group">
									<label>Nama Event</label>
									<input type="text" name="name_sharing" placeholder="Nama Event" class="form-control">
								</div>
								<div class="form-group">
									<label>Tanggal Event</label>
									<input type="text" name="date_sharing" class="form-control datepicker" id="">
								</div>
								<div class="form-group">
									<label>Flyer / Poster</label>
									<input type="file" name="userfile" class="form-control">
								</div>
								<div class="form-group">
									<label>Deskripsi Event</label>
									<textarea class="form-control"></textarea>
								</div>
								<div class="form-group">
									<label>Target Peserta</label>
									<input type="number" name="target_participant" placeholder="Target Peserta" class="form-control" min=1>
								</div>
								<div class="form-group">
									<label>Ada Harga Tiket Masuk?</label><br />
									<label><input type="radio" name="ticket_paid" value="0"> Ada</label>
									<label><input type="radio" name="ticket_paid" value="1"> Tidak</label>
								</div>
								<div class="form-group">
									<label>Harga Tiket (Jika Gratis isi 0)</label>
									<input type="number" name="name_sharing" placeholder="Harga Tiket" class="form-control" min=0>
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