
<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Data Magang</h3>
	</div>
	<div class="box-body">
		<div class="table-responsive">
			<table class="table table-striped" id="example">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Kampus</th>
						<th>Jurusan</th>
						<th>No.Handphone</th>
						<th>Alamat</th>
						<th>Surat Magang</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no=$this->uri->segment(4)+1;
					foreach ($magang as $key):?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $key->nama_magang ?></td>
						<td><?php echo $key->email_magang ?></td>
						<td><?php echo $key->kampus_magang ?></td>
						<td><?php echo $key->jurusan_magang ?></td>
						<td><?php echo $key->nohp_magang ?></td>
						<td><?php echo $key->alamat_magang ?></td>
						<td>
							<a href="<?php echo base_url("assets/SuratMagang/$key->file_magang"); ?>"target="_blank">Download</a>
						</td>
					</tr>
					
				<?php endforeach ?>
				</tbody>
			</table>
			<?php echo $this->pagination->create_links(); ?>
		</div>
		
	</div>
</div>