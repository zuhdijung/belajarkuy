	<div class="kuy-page">
		<div class="container-fluid">
			<div class="text-center">
				<h2>Event Dibuat</h2>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="detail">
						<h3 class="text-center">List Event</h3>
						<div class="row">
							<div class="col-md-12">
								<div style="margin-bottom: 25px;">
									<a href="<?php echo base_url('user/add-event/')?>"><button class="btn btn-login">Buat Event</button></a>
								</div>
								<div class="table-responsive">
									<table class="table table-stripped">
										<thead>
											<tr>
												<th>#</th>
												<th>Event</th>
												<th>Peserta</th>
												<th>Tanggal</th>
												<th>Status</th>
												<th>Aksi</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Workshop MJWJ: Editing Video</td>
												<td><a href="#" title="List Peserta">12 / 50</a></td>
												<td>10 Juli 2018</td>
												<td>Aktif</td>
												<td>
													<a href="#">Edit</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
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