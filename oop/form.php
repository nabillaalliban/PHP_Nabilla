<?php

class Form
{
    public function display()
    {
        echo '
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Informasi</h5>
                    <p class="card-text">Apabila anda telah melakukan pendaftaran, silahkan klik tombol "Cek Status Pendaftaran"</p>
                    <a href="#" class="btn btn-primary mb-2">Cek Status Pendaftaran</a>
                    <a href="#" class="btn btn-warning mb-2">Kembali ke Home</a>
                    <a href="#" class="btn btn-danger">Situs Resmi SMK ASSALAAM</a>
                </div>
            </div>

            <form method="post" action="submit.php">
                <h5>Data Diri Calon Pendaftar (Form yang bertanda * wajib di isi)</h5>
                <div class="form-group">
                    <label>Jurusan *</label>
                    <select class="form-control" name="jurusan" required>
                        <option>Pilih Jurusan</option>
                        <option>RPL</option>
                        <option>TKRO</option>
                        <option>TBSM</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Lengkap *</label>
                    <input type="text" class="form-control" name="nama_lengkap" required>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin *</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="Laki-Laki" required>
                        <label class="form-check-label" for="laki">Laki - Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan" required>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Tempat Lahir *</label>
                    <input type="text" class="form-control" name="tempat_lahir" required>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir *</label>
                    <input type="date" class="form-control" name="tanggal_lahir" required>
                </div>
                <div class="form-group">
                    <label>Nomor HP siswa yang bisa dihubungi *</label>
                    <input type="text" class="form-control" name="no_hp" required>
                </div>
                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <h5>Alamat Calon Pendaftar</h5>
                <div class="form-group">
                    <label>Provinsi *</label>
                    <select class="form-control" name="provinsi" required>
                        <option>Pilih Provinsi</option>
                        <option>Jawa Barat</option>
                        <option>Jawa Tengah</option>
                        <option>Jawa Timur</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Kab / Kota *</label>
                    <select class="form-control" name="kab_kota" required>
                        <option>Pilih Kota dahulu</option>
                        <option>Bandung</option>
                        <option>Ciamis</option>
                        <option>Cirebon</option>
                        <option>Garut</option>
                        <option>Bekasi</option>
                        <option>Cianjur</option>
                        <option>Depok</option>
                        <option>TasikMalaya</option>
                        <option>Sukabumi</option>
                        <option>Pamelmbang</option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>Kecamatan *</label>
                    <select class="form-control" name="kecamatan" required>
                        <option>Pilih Kecamatan dahulu</option>
                        <option>Arjasari</option>
                        <option>Cangkuang</option>
                        <option>Ciwidey</option>
                        <option>Cikancung</option>
                        <option>Cimeunyan</option>
                        <option>Dayeuhkolot</option>
                        <option>Cimaung</option>
                        <option>Katapang</option>
                        <option>Margahayu</option>
                        <option>Margaasih</option>
                        

                    </select>
                </div>
                <div class="form-group">
                    <label>Desa / Kelurahan *</label>
                    <select class="form-control" name="desa_kelurahan" required>
                        <option>Pilih Desa dahulu</option>
                        <option>Desa Cimenyan</option>
                        <option>Desa Cileunyi Wetan</option>
                        <option>Desa Cilengkrang</option>
                        <option>Desa Jelekong</option>
                        <option>Desa Ciparay </option>
                        <option>Desa Pameungpeuk</option>
                        <option>Desa Margahayu Selatan</option>
                        <option>Desa Bojongsoang</option>
                        <option>Desa Rancamanyar</option
                        <option>Desa Banjaran</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat *</label>
                    <textarea class="form-control" name="alamat" required></textarea>
                </div>
                <div class="form-group">
                    <label>Kode Pos</label>
                    <input type="text" class="form-control" name="kode_pos">
                </div>
                <h5>Data Asal Sekolah</h5>
                <div class="form-group">
                    <label>Nama Asal Sekolah *</label>
                    <input type="text" class="form-control" name="nama_asal_sekolah" required>
                </div>
                <div class="form-group">
                    <label>Alamat Sekolah *</label>
                    <input type="text" class="form-control" name="alamat_asal_sekolah" required>
                </div>
                <h5>Data Orang Tua</h5>
                <div class="form-group">
                    <label>Nama Lengkap Ayah / Ibu / Wali *</label>
                    <select class="form-control" name="hubungan" required>
                        <option>Ayah</option>
                        <option>Ibu</option>
                        <option>Wali</option>
                    </select>
                    <input type="text" class="form-control mt-2" name="nama_orangtua" required>
                </div>
                <div class="form-group">
                    <label>Pekerjaan Ayah / Ibu / Wali *</label>
                    <input type="text" class="form-control" name="pekerjaan" required>
                </div>
                <div class="form-group">
                    <label>Nomor HP yang bisa dihubungi *</label>
                    <input type="text" class="form-control" name="no_hp_orangtua" required>
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap *</label>
                    <textarea class="form-control" name="alamat_orangtua" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Simpan & Daftar</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>
        ';
    }
}
