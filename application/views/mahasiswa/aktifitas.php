<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Aktifitas</h3>
	</div>
	<div class="box-body">
		<form method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<label>Periode Magang</label>
						<select name="id_periode_pemagang" class="form-control">
							<?php foreach ($periode_pemagang as $key => $value):?>
								<option value="<?php echo $value['id_periode_pemagang']; ?>"><?php echo $value['bulan'] ?> - <?php echo $value['tahun']; ?></option>
							<?php endforeach ?>
						</select>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<input type="text" class="form-control" name="judul_aktifitas" placeholder="Judul Aktifitas">
					</div>
					<div class="form-group">
						<textarea name="isi_aktifitas" placeholder="Isi Aktifitas" cols="30" rows="5" class="form-control ckeditor"></textarea>
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
						<h4 class="">Unggah file aktifitas</h4>
						<input type="file" name="file_aktifitas">
						<span class="text-danger">*file format : pdf,png,zip</span>
					</div>
					<div class="col-md-2">
						<button class="btn btn-block btn-primary">Simpan</button>
					</div>
				</div>


			</div>
		</form>
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal</th>
					<th>Judul</th>
					<th>Aktifitas</th>
					<th>File</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($aktifitas as $key => $value): ?>
					<tr>
						<td><?php echo $key+1; ?></td>
						<td><?php echo $value['tgl_aktifitas']; ?></td>
						<td><?php echo $value['judul_aktifitas']; ?></td>
						<td><?php echo $value['isi_aktifitas']; ?></td>
						<td>
							<a href="<?php echo base_url("assets/aktifitas/$value[file_aktifitas]"); ?>"target ="_blank"><?php echo $value['file_aktifitas']; ?></a>
						</td>
						<td>
							<a href="<?php echo base_url("mahasiswa/aktifitas/hapus/$value[id_aktifitas]") ?>" class="btn btn-danger btn-xs" onclick="return confirm ('Yakin mau hapus?');">Hapus</a>
						</td>
					</tr>

				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>