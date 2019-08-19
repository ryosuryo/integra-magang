<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title hidden-print">ABSENSI MAGANG</h3>
			</div>
			<div class="box-body">
                <p>Absensi setiap hari, jika tidak absen maka dianggap tidak masuk tanpa izin (Alpa)</p>
                <a href="" class="btn btn-success">Masuk</a>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                Tidak Masuk / Izin
                </button>
			</div>
		</div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Izin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="insert_alasan">
                        <input type="text" name="alasan" id="alasan" class="form-control" placeholder="alasan">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary">Kirim</button>
                </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function simpan_alasan() 
            {
                $.getJSON("<?= base_url()?>")
            }
        </script>