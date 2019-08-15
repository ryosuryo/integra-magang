<div class="row">
	<div class="col-md-4">
	<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title">Filter</h3>
			</div>
			<div class="box-body">
				<form action="<?= base_url()?>admin/Aktifitas/cari" method="POST">
					<div class="form-group">
						<label for="">Nama Mahasiswa</label>
						<select name="nama_magang" id="nama_magang" class="form-control">
							<option value="">Semua</option>
							<?php
								foreach ($mahasiswa as $mh) {
									echo '<option value="'.$mh->nama_magang.'">'.$mh->nama_magang.'</option>';
								}
							?>
						</select><br>
						<input type="submit" class="btn btn-warning">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-8">
	<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Aktifitas</h3>
	</div>
	<div class="box-body">
		<form method="POST" action="<?= base_url()?>admin/Aktifitas/ubah_status_aktifitas">
		<div class="table-responsive">
		<table class="table table-striped" id="example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Tanggal</th>
						<th>Kegiatan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($aktifitas as $key => $value): ?>
						<tr>
							<td><?php echo $key+1; ?></td>
							<td><?php echo $value['nama_magang']; ?></td>
							<td><?php echo $value['tgl_aktifitas']; ?></td>
							<td><?php echo $value['isi_aktifitas']; ?></td>
							<td>
								
								<select name="status_aktifitas[<?php echo $value['id_aktifitas']?>]" class="form-control" onchange="submit()">
									<option><?php echo $value['status_aktifitas']; ?></option>
									<option value="Pending">Pending</option>
									<option value="Diterima">Diterima</option>
									<option value="Ditolak">Ditolak</option>
								</select>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
		</form>
	</div>
	</div>
	</div>
</div>





