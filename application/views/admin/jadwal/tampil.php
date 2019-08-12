<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Jadwal Magang</h3>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<form method="POST" class="form-inline" onchange="submit()">
				<div class="form-group">
					<select name="id_periode" class="form-control">
						<option value="">- Pilih Periode -</option>
						<?php foreach ($periode as $key => $value): ?>
							<option value="<?php echo $value['id_periode'] ?>"<?php if($value['id_periode']==$id_periode){echo"selected";} ?>><?php echo $value['bulan']; ?>- <?php echo $value['tahun']; ?></option>
							<?php endforeach ?>
					</select>
				</div>
			</form>
			<br>
			<table class="table table-bordered table-striped" id="example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<?php foreach ($hari as $key => $nama_hari): ?>
							<th><?php echo $nama_hari ?></th>
						<?php endforeach ?>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($jadwal as $key => $value): ?>
						<tr>
							<td><?php echo $key+1; ?></td>
							<td><?php echo $value['nama_magang']; ?></td>
							<?php foreach ($hari as $key => $nama_hari): ?>
								<td>
									<?php foreach ($value['jadwal'] as $key => $isi): ?>
										<?php if ($nama_hari==$isi['hari_magang']): ?>
											<?php echo $isi['jam_magang'] ?>
										<?php endif ?>
									<?php endforeach ?>
								</td>
								<?php endforeach ?>
								<td>
									<a href="<?php echo base_url("admin/jadwal/hapus/$value[id_jadwal]") ?>" class="btn btn-danger btn-xs" onclick="return confirm ('Yakin mau hapus?');">Hapus</a>

									<a href="<?php echo base_url("admin/jadwal/edit/$value[id_jadwal]") ?>" class="btn btn-warning btn-xs">Edit</a>

								</td>

						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<a href="<?php echo base_url("admin/jadwal/tambah"); ?>" class ="btn btn-primary btn-sm">Tambah</a>
		</div>
	</div>
</div>