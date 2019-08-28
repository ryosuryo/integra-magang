
    


<div class="box box-info">
			<div class="box-header text-center ">
				<h1>ABSENSI MAGANG</h1>
			</div>
			<div class="box-body text-center">
                <p>Absensi setiap hari, jika tidak absen maka dianggap tidak masuk tanpa izin (Alpa)</p>
                 <?php
                    $id = $this->session->userdata('id_magang');
                   $cek_data = $this->db->get_where('absensi', ['id_magang' => $id, 'tanggal' => date('Y-m-d')] )->row_array();
                    if (empty($cek_data)) 
                    {
                       ?>

                       <button type="button" class="btn btn-success btn-lg" onclick="simpan_masuk()" id="simpan" >Masuk</button> &nbsp;
                        <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal">
                        Tidak Masuk / Izin
                        </button>
                <?php
                    }
                    else
                    {
                ?>

                     <button type="button" class="btn btn-success btn-lg" onclick="simpan_masuk()" id="simpan" disabled="disabled">Masuk</button> &nbsp;
                     <button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal" disabled="disabled">
                        Tidak Masuk / Izin
                        </button>
                <?php
                    }
                ?>
			</div>
</div>
<?= $this->session->flashdata('pesan_izin');?>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header text-center bg-primary">
                    <h2 class="modal-title w-100 font-weight-bold text-color-light" id="exampleModalLabel">FORM IZIN PT INTEGRA</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url()?>mahasiswa/Absensi/absen_izin">
                        <h5 div="text-2 opacity-10">Masukkan alasan Anda*</h5>
                        <input type="text" name="alasan" id="alasan" required="true" class="form-control" placeholder="Masukkan Alasan Anda">
                        <br>
                        <input type="submit" name="" id="" value="Submit" class="btn btn-success"> &nbsp;
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
                        swal("Berhasil Masuk!", "Anda sudah absen hari ini! Silahkan Refresh...", "success");
                    } 
                    else 
                    {
                        swal("Gagal absen, coba tanyakan ke pembimbing !!");
                    }
                });
            }
        
        </script>
        

