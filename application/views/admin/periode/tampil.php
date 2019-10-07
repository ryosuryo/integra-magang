
<div class="row">
	<div class="col-md-3">
	<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title">Filter</h3>
			</div>
			<div class="box-body">
				<form action="<?= base_url()?>admin/Periode/cari" method="POST">
					<div class="form-group">
						<label for="">Tahun</label>
						<select name="Tahun" id="Tahun" class="form-control">
							<option value="">Semua</option>
							<?php
								foreach ($periode as $p) {
									echo '<option value="'.date("Y", strtotime($p->tgl_awal)).'">'.date("Y", strtotime($p->tgl_awal)).'</option>';
								}
							?>
						</select><br>
						<input type="submit" name="submit" class="btn btn-warning">
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-9">
	<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Data Periode</h3>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<table class="table table-striped" id="example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama pemagang</th>
						<th>Tanggal Mulai</th>
						<th>Tanggal Selesai</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
						$no=$this->uri->segment(4)+1;
						foreach ($periode as $p) {
							echo '<tr>
									<td>'.$no++.'</td>
									<td>'.$p->nama_magang.'</td>
									<td>'.date("d-F-Y", strtotime($p->tgl_awal)).'</td>
									<td>'.date("d-F-Y", strtotime($p->tgl_akhir)).'</td>
								</tr>';
						}
					?>
				</tbody>
			</table>
			<?php echo $this->pagination->create_links(); ?>
			</div>

		</div>
	</div>