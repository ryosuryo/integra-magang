<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Tambah Jadwal Magang</h3>
	</div>
	<div class="box-body">
		<form method="POST">
			<div class="form group">
				<label>Periode</label>
				<select name="id_periode" class="form-control" onchange="submit()">
					<option value="">- Pilih Periode -</option>
					<?php foreach ($periode as $key => $value):?>
					<option value="<?php echo $value['id_periode'] ?>"<?php if($id_periode==$value['id_periode']){echo "selected";} ?>><?php echo $value['bulan'] ?>- <?php echo $value['tahun']; ?></option>
				<?php endforeach ?>
				</select>
			</div>

			<div class="form-group">
				<label>Mahasiswa</label>
				<select name="id_periode_pemagang" class="form-control">
					<option value="">- Pilih Mahasiswa -</option>
					<?php foreach($magang as $key => $value): ?>
						<option value="<?php echo $value ['id_periode_pemagang'] ?>"><?php echo $value
						['nama_magang'] ?>- <?php echo $value['nim_magang']; ?></option>

						<?php endforeach ?>

				</select>
			</div>

			<div class="form-group">
				<label>Hari</label>
				<select name="hari_magang" class="form-control">
					<option value="">- Pilih hari -</option>
					<?php foreach($hari as $key => $nama_hari): ?>
						<option value="<?php echo $nama_hari ?>"><?php echo $nama_hari; ?></option>
						<?php endforeach ?>
				</select>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Waktu Mulai</label>
						<input type="time" class="form-control" name="waktu_mulai">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Waktu Selesai</label>
						<input type="time" class="form-control" name="waktu_selesai">
					</div>
				</div>
			</div>
			<button class="btn btn-primary  btn-sm" name="simpan" value="simpan">Simpan</button>
		</form>
	</div>
</div>