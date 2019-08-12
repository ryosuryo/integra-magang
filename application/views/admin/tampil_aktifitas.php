<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Aktifitas</h3>
	</div>
	<div class="box-body">
		<table class="table table-bordered" id="example">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($aktifitas as $key => $value): ?>
					<tr>
						<td><?php echo $key+1; ?></td>
						<td><?php echo $value['nama_magang']; ?></td>
						
						<td>
							<a href="#<?php echo $key+1; ?>" class="btn btn-info btn-xs" data-toggle="modal">Aktifitas</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>

<?php foreach ($aktifitas as $key => $value):?>
	<div id="<?php echo $key+1; ?>" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal Content -->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Aktifitas</h4>
				</div>
				<div class="modal-body table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Tanggal</th>
								<th>Judul</th>
								<th>Aktifitas</th>
								<th>File</th>
								
							</tr>
						</thead>
						<tbody>
							<?php foreach ($value['detail'] as $key => $value):?>
								<tr>
									<td><?php echo $key+1;  ?></td>
									<td><?php echo $value['nama_magang'];  ?></td>
									<td><?php echo $value['tgl_aktifitas'];  ?></td>
									<td><?php echo $value['judul_aktifitas'];  ?></td>
									<td><?php echo $value['isi_aktifitas'];  ?></td>
									<td><a href="<?php echo base_url("assets/aktifitas/$value[file_aktifitas]"); ?>"><?php echo $value['file_aktifitas'] ?></a>
									</td>
									
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach ?>