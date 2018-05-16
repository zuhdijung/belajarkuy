	<div class="kuy-page">
		<div class="container-fluid">
			<div class="text-center">
				<h2>Dashboard</h2>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="detail">
						<h3 class="text-center">Statistik</h3>
						<div class="row">
							<div class="col-md-3 text-center">
								<a href="<?php echo base_url('user/event')?>">
									<img src="<?php echo base_url('asset/images/event.png') ?>" class="img-fluid"><br />
									0 Event / Sharing
								</a>
							</div>
							<div class="col-md-3 text-center">
								<a href="<?php echo base_url('user/idea')?>">
									<img src="<?php echo base_url('asset/images/idea.png') ?>" class="img-fluid"><br />
									0 Ide Baik
								</a>
							</div>
							<div class="col-md-3 text-center">
								<a href="<?php echo base_url('user/participant')?>">
									<img src="<?php echo base_url('asset/images/user-group.png') ?>" class="img-fluid"><br />
									0 Peserta
								</a>
							</div>
							<div class="col-md-3 text-center">
								<a href="<?php echo base_url('user/payment')?>">
									<img src="<?php echo base_url('asset/images/money.png') ?>" class="img-fluid"><br />
									Rp 0
								</a>
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