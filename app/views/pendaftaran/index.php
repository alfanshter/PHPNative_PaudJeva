<div class="content mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">

                    <div class="card-body">
                        <div class="container">
                            <center>
                                <h2>Pendaftaran</h2>
                            </center>
                            <p> <b>*Harap diisi dengan benar dan teliti</b></p>

                            <h3 align="end"> <b>Data Siswa</b></h3>
                            <?php
                            Flasher::Message();
                            ?>
                            <form role="form" action="<?= base_url; ?>/pendaftaran/daftarsiswa" method="POST" enctype="multipart/form-data">
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
                                    <input required type="text" id="nama" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Username</span>
                                    <input required type="text" id="username" name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Masukkan Username Siswa">
                                </div>
                                <p style="font-weight: bold;font-size: 9pt;"> *Dengan Mengirim, berarti menyetujui untuk mengikuti segala ketentuan dan tata tertib
                                    yang sudah di berlakukan oleh Paud Assbiyan.</p>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Tempat/tanggal lahir</span>
                                    <input required type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    <input type="date" id="ttl" name="ttl">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Jenis Kelamin</span>
                                    <select class="form-select" aria-label="Default select example" id="jk" name="jk">
                                        <option selected>Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">NIK</span>
                                    <input required type="number" id="nik" name="nik" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Alamat</span>
                                    <input required type="text" id="alamat" name="alamat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Agama</span>
                                    <select class="form-select" aria-label="Default select example" id="agama" name="agama" required>
                                        <option selected>islam</option>
                                        <option value="kristen">kristen</option>
                                    </select>

                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Jenis Tinggal</span>
                                    <input required type="text" id="jenis_tinggal" name="jenis_tinggal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Alat transportasi</span>
                                    <input required type="text" id="alat_transportasi" name="alat_transportasi" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nomor Telepon</span>
                                    <input type="number" required id="nomor_telepon" name="nomor_telepon" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Status Dalam Keluarga</span>
                                    <input required type="text" id="status_dalam_keluarga" name="status_dalam_keluarga" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Apakah siswa penerima KPS ?</span>
                                    <select class="form-select" aria-label="Default select example" id="penerima_kps" name="penerima_kps">
                                        <option selected>YA</option>
                                        <option value="TIDAK">TIDAK</option>
                                    </select>
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nomor KPS</span>
                                    <input type="text" id="no_kps" name="no_kps" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Foto </span>
                                    <input type="file" id="foto" name="foto">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Foto KK</span>
                                    <input type="file" id="foto_kk" name="foto_kk">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Foto Akte</span>
                                    <input type="file" id="foto_akte" name="foto_akte">
                                </div>


                                <h3 align="end"><b>Data Ayah</b> </h3>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
                                    <input required id="nama_ayah" name="nama_ayah" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Tempat/tanggal lahir</span>
                                    <input required type="text" id="tempat_lahir_ayah" name="tempat_lahir_ayah" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    <input type="date" id="ttl_ayah" name="ttl_ayah">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">NIK</span>
                                    <input required id="nik_ayah" name="nik_ayah" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Pendidikan Terakhir</span>
                                    <input required id="pendidikan_ayah" name="pendidikan_ayah" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Pekerjaan</span>
                                    <input required id="pekerjaan_ayah" name="pekerjaan_ayah" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Status</span>
                                    <select id="status_ayah" name="status_ayah" class="form-select" aria-label="Default select example">
                                        <option selected>Masih Hidup</option>
                                        <option value="meninggal">Meninggal</option>
                                    </select>
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Penghasilan</span>
                                    <input required id="penghasilan_ayah" name="penghasilan_ayah" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <br><br>

                                <h3 align="end"><b>Data Ibu</b> </h3>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Nama</span>
                                    <input required type="text" id="nama_ibu" name="nama_ibu" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Tempat/tanggal lahir</span>
                                    <input required type="text" id="tempat_lahir_ibu" name="tempat_lahir_ibu" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                    <input type="date" id="ttl_ibu" name="ttl_ibu">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">NIK</span>
                                    <input required id="nik_ibu" name="nik_ibu" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Pendidikan Terakhir</span>
                                    <input required type="text" id="pendidikan_ibu" name="pendidikan_ibu" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Pekerjaan</span>
                                    <input required type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Status</span>
                                    <select class="form-select" aria-label="Default select example" id="status_ibu" name="status_ibu">
                                        <option selected>Masih Hidup</option>
                                        <option value="meninggal">Meninggal</option>
                                    </select>
                                </div>

                                <div class="input-group input-group-sm mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">Penghasilan</span>
                                    <input required id="penghasilan_ibu" name="penghasilan_ibu" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <p>*Dengan Mengirim, berarti menyetujui untuk mengikuti segala ketentuan dan tata tertib
                                    yang sudah di berlakukan oleh Paud Assbiyan.</p>
                            </form>
                            <br>












                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });

        $(document).on("click", "#pilih_gambar", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
        });
    </script>
</div>