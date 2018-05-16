	<div class="kuy-page">
		<div class="container-fluid">
			<div class="text-center">
				<h2>Event Dibuat</h2>
			</div>
			<div class="row">
				<div class="col-md-8">
					<div class="detail">
						<h3 class="text-center">Atur Event Dibuat</h3>
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
											<?php
												if($results!=FALSE){
													$i = 1;
													foreach ($results as $rows) {
														?>
														<tr>
															<td><?php  echo $i;?></td>
															<td><?php echo $rows->name_sharing?></td>
															<td><a href="<?php echo base_url('user/partcipant-event/'.$rows->id_sharing)?>"><?php echo $this->muser->countParticipant($rows->id_sharing).' / '.$rows->target_participant;?></a></td>
															<td><?php echo date('D, d M Y',strtotime($rows->date_sharing))?></td>
															<td>
																<?php
																	if($rows->status_sharing == 0){
																		?>
																		<label class="badge badge-warning">Pending</label>
																		<?php
																	}
																	else if($rows->status_sharing == 1){
																		?>
																		<label class="badge badge-info">Aktif</label>
																		<?php
																	}
																	else if($rows->status_sharing == 2){
																		?>
																		<label class="badge badge-success">Aktif</label>
																		<?php
																	}
																	else if($rows->status_sharing == 3){
																		?>
																		<label class="badge badge-danger">Batal</label>
																		<?php
																	}
																?>
															</td>
															<td>
																<a href="<?php echo base_url('user/view-event/'.$rows->id_sharing)?>" title="Lihat Event">
																	<i class="oi" data-glyph="eye"></i>
																</a>
																<a href="<?php echo base_url('user/edit-event/'.$rows->id_sharing)?>" title="Ubah Event">
																	<i class="oi" data-glyph="pencil"></i>
																</a>
															</td>
														</tr>
														<?php
														$i++;
													}
												}
												else{
													?>
													<tr>
														<td colspan="6">Belum Ada Event yang dibuat</td>
													</tr>
													<?php
												}
											?>
										</tbody>
									</table>
								</div>
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