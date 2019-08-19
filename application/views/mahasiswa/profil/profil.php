<style>
@media print{
	@page
	{ size: portrait;

	 }
	
	.timeline:before {
		content: '';
		position: absolute;
		top: 0;
		bottom: 0;
		width: 4px;
		background: #ddd;
		left: 31px;
		margin: 0;
		border-radius: 2px;
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
				<div class="row">
					<div class="col-md-2">
						<img src="<?php echo base_url("assets/img/$magang[foto_magang]") ?>" alt="" width="150" height="150" class="img-circle">
					</div>
					<div class="col-md-4">
						<br>
						<h2><?php echo $magang['nama_magang']; ?></h2>
					</div>
				</div>
				<br>
				<br>
				<ul class="timeline timeline-inverse" style="">
					<li>
						<div class="timeline-item" style="background: white;border:none;">
							<h3 class="timeline-header" style="border-bottom:0px;">Jenis Kelamin : <a href="#"><?php echo $magang['jk_magang']; ?></a></h3>
							<h3 class="timeline-header" style="border-bottom:0px;">No. Handphone : <a href="#"><?php echo $magang['nohp_magang']; ?></a></h3>
							<h3 class="timeline-header" style="border-bottom:0px;">E-mail : <a href="#"><?php echo $magang['email_magang']; ?></a></h3>
							<h3 class="timeline-header" style="border-bottom:0px;">Alamat : <a href="#"><?php echo $magang['alamat_magang']; ?></a></h3>
						</div>
					</li>
					<li>
						<div class="timeline-item" style="background: white;border:none;">
							<h3 class="timeline-header"><a href="#">Pendidikan</a></h3>
							<br>
							<ul>
								<li>Univ/STMIK : <?php echo $magang['kampus_magang']; ?></li>
								<li>Kejuruan/Prodi : <?php echo $magang['jurusan_magang']; ?></li>
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
				</ul>
				<a href="#" onclick="return window.print();" class="hidden-print btn btn-sm btn-success">Cetak CV</a>
			</div>
		</div>
	