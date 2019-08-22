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
											<tr><th>Edit</th><td><button type="button" class="hidden-print btn btn-xs btn-warning" data-toggle="modal" data-target="#Edit">Edit Data Pribadi</button></td></tr>
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
				<button type="button" class="hidden-print btn btn-sm btn-warning" data-toggle="modal" data-target="#Modal">Edit Data CV</button>
			</div>
		</div>
	

	<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Pribadi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                </div>
                <div class="modal-footer">
                </div>
                    <div id="pesan"></div>
                </div>
            </div>
        </div>

	 <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data CV</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="#" class="btn btn-warning">Edit Data Pendidikan</a>
                    <a href="#" class="btn btn-danger">Edit Data Pengalaman</a>
                    <a href="#" class="btn btn-primary">Edit Data Kemampuan</a>
                </div>
                <div class="modal-footer">
                </div>
                    <div id="pesan"></div>
                </div>
            </div>
        </div>