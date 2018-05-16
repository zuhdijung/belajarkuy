<script src='<?php echo base_url('asset/tinymce/js/tinymce/tinymce.min.js')?>'></script>
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
									<input type="text" name="name_sharing" class="form-control">
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
									<textarea class="form-control textarea"></textarea>
								</div>
								<div class="form-group">
									<label>Target Peserta</label>
									<input type="number" name="target_participant" class="form-control" min=1>
								</div>
								<div class="form-group">
									<label>Ada Harga Tiket Masuk?</label><br />
									<label><input type="radio" name="ticket_paid" value="0" disabled=""> Ada</label>
									<label><input type="radio" name="ticket_paid" value="1" checked=""> Tidak</label>
								</div>
								<div class="form-group">
									<label>Harga Tiket (Jika Gratis isi 0)</label>
									<input type="number" name="ticket_price" placeholder="Harga Tiket" class="form-control" min=0 value="0" disabled="">
									<input type="hidden" name="ticket_price" value="0">
								</div>
								<div class="form-group">
									<button class="btn btn-login" type="submit">Simpan</button>
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
<script>
  tinymce.init({
    selector: '.textarea'
  });
  </script>