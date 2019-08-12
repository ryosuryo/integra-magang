<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Pemagang Baru</h3>
	</div>
	<div class="box-body">
		<form method="POST">
			<div class="table-responsive">
				<table class="table table-bordered" id="example">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Universitas</th>
							<th>No.HP</th>
							<th>Dokumen</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($magang as $key => $value): ?>
							<tr>
								<td><?php echo $key+1; ?></td>
								<td><?php echo $value['nama_magang']; ?></td>
								<td><?php echo $value['email_magang']; ?></td>
								<td><?php echo $value['kampus_magang']; ?></td>
								<td><?php echo $value['nohp_magang']; ?></td>
								<td>
									<a href="<?php echo base_url("assets/dokumen/$value[file_magang]"); ?>"target="_blank">Download</a>
								</td>
								<td>

									<select name="status_magang[<?php echo $value['id_magang']; ?>]"class="form-control" onchange="submit()">
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
		<br>
		<hr>
		<br>
		<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	</div>
</div>
</div>
