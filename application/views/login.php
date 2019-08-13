<!DOCTYPE html>
<html>
<head>
	<title>Login Magang</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap4/css/bootstrap.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/customcss/login.css') ?>">
</head>
<body>
	<form class="form-signin" method="POST" action="<?= base_url()?>Login/proses_login">
		<div class="text-center">
			<a href="index.php"><img class="mb-4" src="<?php echo base_url('assets/image/logo.png') ?>"alt="logo integra" width="autofocus"></a>
			<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
		</div>
		<label class="sr-only">Email</label>
		<input type="email" name="email_magang" class="form-control" placeholder="email" required="" autofocus="">
		<label class="sr-only">Password</label>
		<input type="password" name="password" class="form-control" placeholder="Password" required="">
		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Tetap Masuk
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit" name="masuk">Masuk</button>
		<br>
		<a href="<?php echo base_url("index.php") ?>"><p>Kembali Ke Beranda</p></a>
		<p class="mt-5 mb-3 text-muted">@Integra Inovasi Indonesia</p>
							<?php
                                $pesan = $this->session->flashdata('pesan');
                                if($pesan != NULL){
                                    echo ' <div class="alert alert-danger">'.$pesan.'</div>';
                                }

                            ?>
                           <?= $this->session->flashdata('pesan_login');?>
	</form>
	

</body>
</html>