<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Pemagang Baru</h3>
	</div>
	<div class="box-body">
		<form method="POST" action="<?= base_url()?>admin/Welcome/beritahu">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Email</th>
							<th>Dokumen</th>
							<th>Status</th>
							<th>Catatan (opsional)</th>

						</tr>
					</thead>
					<tbody>
						<?php foreach ($magang as $key => $value): ?>
							<tr>
								<td><?php echo $key+1; ?></td>
								<td><?php echo $value['nama_magang']; ?></td>
								<td><?php echo $value['email_magang']; ?></td>
								<td>
									<a href="<?php echo base_url("assets/dokumen/$value[file_magang]"); ?>"target="_blank">Download</a>
								</td>
								<td>

									<select name="status_magang[<?php echo $value['id_magang']; ?>]"class="form-control">
										<option value="Pending">Pending</option>
										<option value="Diterima">Diterima</option>
										<option value="Ditolak">Ditolak</option>
									</select>
								</td>
								<td><input type="text" name="catatan[<?php echo $value['id_magang']; ?>]" class="form-control"></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<input type="submit" name="submit" class="btn btn-danger">
		</form>
		
	</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>