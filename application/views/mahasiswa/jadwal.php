<div class="box box-info">
	<di class="box-header">
		<h3 class="box-title">Jadwal Magang</h3>
	</di>
	<div class="box-body">
		<div class="table-responsive">
			<form method="POST">
				<div class="col-md-2">
					<div class="form-group">
						<select name="id_periode_pemagang" class="form-control" onchange="submit()">
							<option value="">- Pilih Periode</option>
							<?php foreach ($periode_pemagang as $key =>$value): ?>
								<option value="<?php echo $value['id_periode_pemagang'] ?>" <?php if($id_periode_pemagang==$value['id_periode_pemagang']){echo"selected";} ?>><?php echo $value['bulan'] ?> - <?php echo $value['tahun']; ?></option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
			</form>
			<table class="table table-bordered table-striped" id="example">
				<thead>
					<tr>
						<?php foreach ($hari as $key => $nama_hari): ?>
							<th><?php echo $nama_hari ?></th>
						<?php endforeach ?>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php foreach ($jadwal as $key => $value): ?>
							<tr>
								<?php foreach ($hari as $key => $nama_hari): ?>
									<td>
										<?php if ($nama_hari==$value['hari_magang']):?>
											<?php echo $value['jam_magang'] ?>
											<?php endif ?>

										</td>
									<?php endforeach ?>
								</tr>
							<?php endforeach ?>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>