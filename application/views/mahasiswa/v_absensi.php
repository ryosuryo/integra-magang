<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title hidden-print">ABSENSI MAGANG</h3>
			</div>
			<div class="box-body">
                <p>Absensi setiap hari, jika tidak absen maka dianggap tidak masuk tanpa izin (Alpa)</p>
                <button type="button" class="btn btn-success" onclick="simpan_masuk()">Masuk</button>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                Tidak Masuk / Izin
                </button>
			</div>
</div>
<?= $this->session->flashdata('pesan_izin');?>
        
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
                    <form method="post" action="<?= base_url()?>mahasiswa/Absensi/absen_izin">
                        <input type="text" name="alasan" id="alasan" required="true" class="form-control" placeholder="alasan">
                        <br>
                        <input type="submit" name="" id="" value="Submit" class="btn btn-success">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
                    <div id="pesan"></div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function simpan_masuk()
            {
                $.getJSON("<?= base_url()?>mahasiswa/Absensi/absen_masuk",function(hasil){
                    if (hasil['status']==1) 
                    {
                        alert("Berhasil absen");
                    } 
                    else 
                    {
                        alert("Gagal absen, coba tanyakan ke pembimbing !!");
                    }
                });
            }
        </script>