    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <div class="container-fluid pt-5 pt-xl-0">

            <!-- Profil -->
            <div class="col-12 mb-md-0 my-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h5 class="mb-0">Profil Dosen</h5>
                    </div>
                    <div class="card-body p-3">
                        <div class="avatar avatar-xxl position-relative">
                            <img src="<?= base_url(); ?>assets/img/uploads/profile/curved.jpg" alt="profile_image" class="w-300 border-radius-lg shadow-sm">
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <label>Nomor Induk Kependudukan</label>
                                <div class="mb-3">
                                    <input type="text" name="nik" class="form-control" placeholder="-" value="<?= $dosen['nik'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Nama Lengkap</label>
                                <div class="mb-3">
                                    <input type="text" name="nama" class="form-control" placeholder="-" value="<?= $dosen['nama'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Tempat Lahir</label>
                                <div class="mb-3">
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="-" value="<?= $dosen['tempat_lahir'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Tanggal Lahir</label>
                                <div class="mb-3">
                                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="-" value="<?= $dosen['tanggal_lahir'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Jenis Kelamin</label>
                                <div class="mb-3">
                                    <?php if ($dosen['jenis_kelamin'] === 'L') : ?>
                                        <input type="text" name="jenis_kelamin" class="form-control" value="Laki-laki" readonly>
                                    <?php elseif ($dosen['jenis_kelamin'] === 'P') : ?>
                                        <input type="text" name="jenis_kelamin" class="form-control" value="Perempuan" readonly>
                                    <?php else : ?>
                                        <input type="text" name="jenis_kelamin" class="form-control" placeholder="-" readonly>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Agama</label>
                                <div class="mb-3">
                                    <input type="text" name="agama" class="form-control" placeholder="-" value="<?= $dosen['agama'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Nomor Handphone</label>
                                <div class="mb-3">
                                    <input type="text" name="no_hp" class="form-control" placeholder="-" value="<?= $dosen['no_hp'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Email</label>
                                <div class="mb-3">
                                    <input type="email" name="email" class="form-control" placeholder="-" value="<?= $dosen['email'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Program Studi</label>
                                <div class="mb-3">
                                    <?php foreach ($listp as $prodi) : ?>
                                        <?php if ($prodi['id_prodi'] === $dosen['id_prodi']) : ?>
                                            <input type="text" name="id_prodi" class="form-control" placeholder="-" value="<?= $prodi['nama'] ?>" readonly>
                                        <?php endif ?>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Kewarganegaraan</label>
                                <div class="mb-3">
                                    <?php if ($dosen['kewarganegaraan'] === 'WNI') : ?>
                                        <input type="text" name="kewarganegaraan" class="form-control" value="Warga Negara Indonesia" readonly>
                                    <?php elseif ($dosen['kewarganegaraan'] === 'WNA') : ?>
                                        <input type="text" name="kewarganegaraan" class="form-control" value="Warga Negara Asing" readonly>
                                    <?php else : ?>
                                        <input type="text" name="kewarganegaraan" class="form-control" placeholder="-" readonly>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Alamat Tempat Tinggal</label>
                                <div class="mb-3">
                                    <input type="text" name="alamat" class="form-control" placeholder="-" value="<?= $dosen['alamat'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Nomor Induk Dosen</label>
                                <div class="mb-3">
                                    <input type="text" name="nidn_dosen" class="form-control" placeholder="-" value="<?= $dosen['nidn_dosen'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Status Dosen</label>
                                <div class="mb-3">
                                    <input type="text" name="status_dosen" class="form-control" placeholder="-" value="<?= $dosen['status_dosen'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <label>Status Kerja</label>
                                <div class="mb-3">
                                    <input type="text" name="status_dosen" class="form-control" placeholder="-" value="<?= $dosen['status_kerja'] ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer py-3">

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