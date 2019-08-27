<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title hidden-print">Data CV</h3>
			</div>
			<div class="box-body">
				<ul class="timeline timeline-inverse">
					<li>
						<div class="timeline-item" style="background: white;border:none;">
							<h3 class="timeline-header"><a href="#">Data Pribadi</a></h3>
							<br>
							<div class="row">
								<div class="col-md-3">
									<img src="<?php echo base_url("assets/img/$cv_magang[foto_magang]") ?>" alt="" width="180" height="200" class="img-thumbnail">
								</div>
								<div class="col-md-7">
									<div class="table-responsive">
										<table class="table table-borderless">
											<tr><th>Nama Lengkap</th><td><?php echo $cv_magang['nama_magang']; ?></td></tr>
											<tr><th>Tempat, Tgl Lahir</th><td><?php echo $cv_magang['ttl_magang']; ?></td></tr>
											<tr><th>Alamat</th><td><?php echo $cv_magang['alamat_magang']; ?></td></tr>
											<tr><th>Jenis Kelamin</th><td><?php echo $cv_magang['jk_magang']; ?></td></tr>
											<tr><th>No. Hp</th><td><?php echo $cv_magang['nohp_magang']; ?></td></tr>
											<tr><th>Email</th><td><?php echo $cv_magang['email_magang']; ?></td></tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="timeline-item" style="background: white;border:none;">
							<h3 class="timeline-header"><a href="#">Data Lanjutan</a></h3>
							<br>
							<div class="row">
								<div class="col-md-12">
									<?php echo $cv_magang['data']; ?>
								</div>	
							</div>
						</div>
					</li>
				</ul>
				<a href="<?= base_url()?>mahasiswa/Profil" class="hidden-print btn btn-sm btn-danger">Kembali</a>
			</div>
		</div>