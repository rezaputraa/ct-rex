    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <div class="container-fluid pt-5 pt-xl-0">

            <!-- Profil -->
            <div class="col-12 my-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h5 class="mb-0">Edit Profil</h5>
                    </div>
                    <div class="card-body p-3">
                        <?= validation_errors() ?>
                        <?= form_open('dosen/update/' . $dosen['nik']) ?>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label>Nomor Induk Kependudukan</label>
                                <div class="mb-3">
                                    <input type="text" name="nik" class="form-control" placeholder="NIK" value="<?= $dosen['nik'] ?>" disabled>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Nama Lengkap</label>
                                <div class="mb-3">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?= $dosen['nama'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Tempat Lahir</label>
                                <div class="mb-3">
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?= $dosen['tempat_lahir'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Tanggal Lahir</label>
                                <div class="mb-3">
                                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="<?= $dosen['tanggal_lahir'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Jenis Kelamin</label>
                                <div class="mb-3">
                                    <select class="form-select" name="jenis_kelamin">
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                        <?php if ($dosen['jenis_kelamin'] === 'L') : ?>
                                            <option selected value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        <?php elseif ($dosen['jenis_kelamin'] === 'P') : ?>
                                            <option value="L">Laki-laki</option>
                                            <option selected value="P">Perempuan</option>
                                        <?php else : ?>
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Agama</label>
                                <div class="mb-3">
                                    <input type="text" name="agama" class="form-control" placeholder="Agama" value="<?= $dosen['agama'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Nomor Handphone</label>
                                <div class="mb-3">
                                    <input type="text" name="no_hp" class="form-control" placeholder="Nomor Handphone" value="<?= $dosen['no_hp'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Email</label>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="<?= $dosen['email'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Program Studi</label>
                                <div class="mb-3">
                                    <select class="form-select" name="id_prodi" disabled>
                                        <option selected disabled>Pilih Program Studi</option>
                                        <?php foreach ($listp as $prodi) : ?>
                                            <?php if ($prodi['id_prodi'] === $dosen['id_prodi']) : ?>
                                                <option selected value="<?= $prodi['id_prodi'] ?>">
                                                    <?= $prodi['nama'] ?>
                                                </option>
                                            <?php else : ?>
                                                <option value="<?= $prodi['id_prodi'] ?>">
                                                    <?= $prodi['nama'] ?>
                                                </option>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Kewarganegaraan</label>
                                <div class="mb-3">
                                    <select class="form-select" name="kewarganegaraan">
                                        <option selected disabled>Pilih Kewarganegaraan</option>
                                        <?php if ($dosen['kewarganegaraan'] === 'WNI') : ?>
                                            <option selected value="WNI">Warga Negara Indonesia</option>
                                            <option value="WNA">Warga Negara Asing</option>
                                        <?php elseif ($dosen['kewarganegaraan'] === 'WNA') : ?>
                                            <option value="WNI">Warga Negara Indonesia</option>
                                            <option selected value="WNA">Warga Negara Asing</option>
                                        <?php else : ?>
                                            <option value="WNI">Warga Negara Indonesia</option>
                                            <option value="WNA">Warga Negara Asing</option>
                                        <?php endif ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Alamat Tempat Tinggal</label>
                                <div class="mb-3">
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat Tempat Tinggal" value="<?= $dosen['alamat'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Nomor Induk Dosen</label>
                                <div class="mb-3">
                                    <input type="text" name="nidn_dosen" class="form-control" placeholder="Nomor Induk Dosen" value="<?= $dosen['nidn_dosen'] ?>">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Status Dosen</label>
                                <div class="mb-3">
                                    <select class="form-select" name="status_dosen">
                                        <option selected disabled>Pilih Status Dosen</option>
                                        <?php for ($i = 0; $i < count($status_dosen); $i++) : ?>
                                            <?php if ($matkul['status_dosen'] === $status_dosen[$i]) : ?>
                                                <option selected value="<?= $status_dosen[$i] ?>"><?= $status_dosen[$i] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $status_dosen[$i] ?>"><?= $status_dosen[$i] ?></option>
                                            <?php endif ?>
                                        <?php endfor ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Status Kerja</label>
                                <div class="mb-3">
                                    <select class="form-select" name="status_kerja">
                                        <option selected disabled>Pilih Status Kerja</option>
                                        <?php for ($i = 0; $i < count($status_kerja); $i++) : ?>
                                            <?php if ($matkul['status_kerja'] === $status_kerja[$i]) : ?>
                                                <option selected value="<?= $status_kerja[$i] ?>"><?= $status_kerja[$i] ?></option>
                                            <?php else : ?>
                                                <option value="<?= $status_kerja[$i] ?>"><?= $status_kerja[$i] ?></option>
                                            <?php endif ?>
                                        <?php endfor ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary mt-2 mb-0">Simpan</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer pb-3">

            <!-- Logo Medsos -->
            <div class="container mx-auto text-center my-2">
                <a href="https://www.youtube.com/channel/UCdo5vics8bEFAd9h6aghLYQ" target="_blank" class="text-secondary mx-3">
                    <i class="text-lg fa-brands fa-youtube"></i>
                </a>
                <a href="https://id-id.facebook.com/universitasmuhammadiyahbandung" target="_blank" class="text-secondary mx-3">
                    <i class="text-lg fa-brands fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/umbandung" target="_blank" class="text-secondary mx-3">
                    <i class="text-lg fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.twitter.com/umbandung" target="_blank" class="text-secondary mx-3">
                    <i class="text-lg fa-brands fa-twitter"></i>
                </a>
                <a href="https://www.tiktok.com/@umbandung" target="_blank" class="text-secondary mx-3">
                    <i class="text-lg fa-brands fa-tiktok"></i>
                </a>
            </div>

            <!-- Copyright -->
            <div class="container mx-auto text-center">
                <p class="mb-0 text-secondary text-xs">
                    Copyright ??
                    <script>
                        document.write(new Date().getFullYear())
                    </script> Universitas Muhammadiyah Bandung. All Rights Reserved.
                </p>
            </div>
        </footer>
    </div>