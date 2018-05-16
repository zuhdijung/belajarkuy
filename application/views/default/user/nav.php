<div class="detail">
						<div class="row">
							<div class="col-md-3">
								<?php
									$result = $this->mod->getDataWhere('user','id_user',$this->session->userdata('id_user'));
									if($result['image_user'] == ''){
										?>
										<img src="<?php echo base_url('asset/images/user-male.png') ?>" class="img-fluid">
										<?php
									}
									else{
										?>
										<img src="<?php echo base_url($result['image_user']) ?>" class="img-fluid">
										<?php
									}
								?>
							</div>
							<div class="col-md-9">
								<h3>{name}</h3>
								<p>{status}</p>
								<a href="<?php echo base_url('user/logout/')?>"><button class="btn btn-login">Keluar</button></a>
							</div>
						</div>
					</div>
					<div class="detail" style="margin-top: 20px;">
						<div><a href="<?php echo base_url('user/dashboard')?>">Dashboard</a></div>
						<div><a href="<?php echo base_url('user/edit-profile')?>">Ubah Profile</a></div>
						<div><a href="<?php echo base_url('user/change-password')?>">Ganti Password</a></div>
						<div><a href="<?php echo base_url('user/event')?>">Event</a></div>
						<div><a href="<?php echo base_url('user/idea')?>">Ide Baik</a></div>
						<div><a href="<?php echo base_url('user/particpant')?>">Peserta</a></div>
						<div><a href="<?php echo base_url('user/payment')?>">Pembayaran</a></div>
					</div>