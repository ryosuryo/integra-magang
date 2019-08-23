<style>
@media print{
	@page{
		size: portrait;
	}
	
	.box-info
	{
		border-top:none;
	}
}
</style>

		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title hidden-print">PROFIL</h3>
			</div>
			<div class="box-body">
				<ul class="timeline timeline-inverse" style="">
					<li>
						<div class="timeline-item" style="background: white;border:none;">
							<h3 class="timeline-header"><a href="#">Data Pribadi</a></h3>
							<br>
							<div class="row">
								<div class="col-md-3">
									<img src="<?php echo base_url("assets/img/$magang[foto_magang]") ?>" alt="" width="180" height="200" class="img-thumbnail">
								</div>
								<div class="col-md-7">
									<div class="table-responsive">
										<table class="table table-striped">
											<tr><th>Nama Lengkap</th><td><?php echo $magang['nama_magang']; ?></td></tr>
											<tr><th>TTL</th><td>-</td></tr>
											<tr><th>Alamat</th><td><?php echo $magang['alamat_magang']; ?></td></tr>
											<tr><th>Jenis Kelamin</th><td><?php echo $magang['jk_magang']; ?></td></tr>
											<tr><th>No. Hp</th><td><?php echo $magang['nohp_magang']; ?></td></tr>
											<tr><th>Email</th><td><?php echo $magang['email_magang']; ?></td></tr>
										</table>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="timeline-item" style="background: white;border:none;">
							<h3 class="timeline-header"><a href="#">Riwayat Pendidikan</a></h3> 
							<br>
							<ul>
								<li>Univ/STMIK : <?php echo $magang['kampus_magang']; ?> | Kejuruan/Prodi : <?php echo $magang['jurusan_magang']; ?></li>
								<li></li>
							</ul>
						</div>
					</li>
					<li>
						<div class="timeline-item" style="background: white;border:none;">
							<h3 class="timeline-header"><a href="#">Pengalaman</a></h3>
							<br>
							<ul>
								<li>
									Magang di PT. Integra
									<ul>
										<?php echo $magang['tgl_awal']; ?> s/d <?php echo $magang['tgl_akhir']; ?>
									</ul>
								</li>
							</ul>
						</div>
					</li>
					<li>
						<div class="timeline-item" style="background: white;border:none;">
							<h3 class="timeline-header"><a href="#">Kemampuan / Skills</a></h3>
							<br>
							<ul>
								<li>
								</li>
							</ul>
						</div>
					</li>
				</ul>
				<a href="#" class="hidden-print btn btn-sm btn-success">Cetak CV</a>
			</div>
		</div>
	


	