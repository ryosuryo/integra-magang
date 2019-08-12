<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Data Periode</h3>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<table class="table table-bordered table-striped" id="example">
				<thead>
					<tr>
						<th>No</th>
						<th>Bulan</th>
						<th>Tahun</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($periode as $key => $value):?>
						<tr>
							<td><?php echo $key+1; ?></td>
							<td><?php echo $value['bulan']; ?></td>
							<td><?php echo $value['tahun']; ?></td>
							<td>
								<?php if ($value['status']=="Aktif"): ?>
									<label class="label label-success"><?php echo $value['status'] ?></label>
									<?php else: ?>
										<label class="label label-danger"><?php echo $value['status'] ?></label>
									<?php endif ?>
								</td>
								<td>
									<a href="<?php echo base_url("admin/periode/hapus/$value[id_periode]") ?>" class="btn btn-danger btn-xs" onclick="return confirm ('Yakin mau hapus?');">Hapus</a>

									<a href="<?php echo base_url("admin/periode/edit/$value[id_periode]") ?>" class="btn btn-warning btn-xs">Edit</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>

				<a href="<?php echo base_url("admin/periode/tambah"); ?>" class ="btn btn-primary btn-sm">Tambah</a>
			</div>

		</div>
	</div>