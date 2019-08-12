<div class="box box-info">
	<div class="box-header">
		<h3 class="box-title">Tambah Anggota</h3>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url ("assets/bootstrap/css/bootstrap.css") ?>">
	</div>
	<div class="box-body">
	<div class="row">
		<div class="col-md-4">

			<form method="POST">
			<div class="form-group">
				<label>NIM</label>
				<input type="text" class="form-control" name="nim" pattern="[0-9 .]{3,20}">
			</div>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" class="form-control" name="nama">
			</div>
			<div class="form-group">
				<label>No HP</label>
				<input type="text" name="nohp" class="form-control" pattern="[0-9 .]{3,20}">

			</div>
			<button class="btn btn-primary btn-sm">Tambahkan</button>	
		</form>
			
		</div>
	</div>	
		
	</div>		
</div>