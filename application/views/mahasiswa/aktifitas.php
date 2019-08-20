<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Laporan Aktifitas</h3>
	</div>
	<div class="box-body">
		<form method="POST" action="<?= base_url()?>mahasiswa/Aktifitas/tambah_aktifitas">
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<label>Tanggal</label>
						<input type="date" class="form-control" name="tgl_aktifitas" required="true">
					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<label>Kegiatan</label>
						<textarea name="isi_aktifitas" placeholder="Isi Aktifitas" cols="30" rows="5" class="form-control" required="true"></textarea>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<input type="submit" class="btn btn-success">
					</div>
				</div>
			</div>
		</form>
		<hr>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Aktifitas</th>
					<th>Status</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($aktifitas as $key => $value): ?>
					<tr>
						<td><?php echo $key+1; ?></td>
						<td><?php echo $value['tgl_aktifitas']; ?></td>
						<td><?php echo $value['isi_aktifitas']; ?></td>
						<td><?php echo $value['status_aktifitas']; ?></td>
						<td>
							<a href="<?php echo base_url("mahasiswa/aktifitas/hapus/$value[id_aktifitas]") ?>" class="btn btn-danger btn-xs" onclick="return confirm ('Yakin mau hapus?');">Hapus</a>
						</td>
					</tr>

				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>