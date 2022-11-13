    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <div class="container-fluid py-3">

            <!-- Header -->
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('<?= base_url(); ?>assets/img/gedungdash.jpg'); background-position-y: 100%;">
                <span class="mask bg-gradient-info opacity-5"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <div class="d-flex justify-content-between">
                    <div class="row gx-4">
                        <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                                <img src="<?= base_url(); ?>assets/img/mahalini.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                            </div>
                        </div>
                        <div class="col-auto my-auto">
                            <div class="h-100">
                                <h5 class="mb-1"><?= $_SESSION['nama'] ?></h5>
                                <p class="mb-0 font-weight-bold text-sm"><?= $_SESSION['access'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="ms-auto">
                        <a href="<?= site_url('logout'); ?>" class="ms-5 me-2"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                    </div>
                </div>
            </div>

            <!-- Profil -->
            <div class="col-12 mb-md-0 my-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-0">Profil Mahasiswa</h6>
                            </div>

                            <div class="col-md-4 text-end">
                                <a href="<?= site_url('prodi/profile/edit/' . $_SESSION['id_prodi']) ?>">
                                    <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                                </a>
                            </div>
                            <div class="avatar avatar-xxl position-relative">
                                <img src="<?= base_url(); ?>assets/img/mahalini.jpg" alt="profile_image" class="w-300 border-radius-lg shadow-sm">
                            </div>
                            <div class="card-body p-3">
                                <div class="row pt-0">
                                    <div class="col-md-6 ps-2 my-1">
                                        <strong class="text-dark text-sm">Nama Lengkap:</strong> &nbsp; <?= $_SESSION['nama'] ?>
                                    </div>
                                    <div class="col-md-6 ps-2 my-1">
                                        <strong class="text-dark text-sm">Nomor Induk Mahasiswa:</strong> &nbsp; <?= $_SESSION['nim'] ?>
                                    </div>
                                    <div class="col-md-6 ps-2 my-1">
                                        <strong class="text-dark text-sm">Tempat Tanggal Lahir:</strong> &nbsp; <?= $_SESSION['tempat_lahir'] . ', ' . $_SESSION['tanggal_lahir'] ?>
                                    </div>
                                    <div class="col-md-6 ps-2 my-1">
                                        <strong class="text-dark text-sm">Jenis Kelamin:</strong> &nbsp; <?= ucfirst($_SESSION['jenis_kelamin']) ?>
                                    </div>
                                    <div class="col-md-6 ps-2 my-1">
                                        <strong class="text-dark text-sm">Agama:</strong> &nbsp; <?= $_SESSION['agama'] ?>
                                    </div>
                                    <div class="col-md-6 ps-2 my-1">
                                        <strong class="text-dark text-sm">Nomor Handphone:</strong> &nbsp; <?= $_SESSION['no_hp'] ?>
                                    </div>
                                    <div class="col-md-6 ps-2 my-1">
                                        <strong class="text-dark text-sm">Email:</strong> &nbsp; <?= $_SESSION['email'] ?>
                                    </div>
                                    <div class="col-md-6 ps-2 my-1">
                                        <strong class="text-dark text-sm">Program Studi:</strong> &nbsp; <?= $_SESSION['id_prodi'] ?>
                                    </div>
                                    <div class="col-md-6 ps-2 my-1">
                                        <strong class="text-dark text-sm">Tahun Angkatan:</strong> &nbsp; <?= $_SESSION['tahun_angkatan'] ?>
                                    </div>
                                    <div class="col-md-6 ps-2 my-1">
                                        <strong class="text-dark text-sm">Kewarganegaraan:</strong> &nbsp; <?= $_SESSION['kewarganegaraan'] ?>
                                    </div>
                                    <div class="col-md-6 ps-2 my-1">
                                        <strong class="text-dark text-sm">Nomor Induk Kependudukan:</strong> &nbsp; <?= $_SESSION['nik'] ?>
                                    </div>
                                    <div class="col-md-6 ps-2 my-1">
                                        <strong class="text-dark text-sm">Alamat:</strong> &nbsp; <?= $_SESSION['alamat'] . ', ' . $_SESSION['kelurahan'] . ', ' . $_SESSION['kecamatan'] . ', ' . $_SESSION['kabupaten'] . ', ' . $_SESSION['provinsi'] . ', ' . $_SESSION['kode_pos'] ?>
                                    </div>
                                    <div class="col-md-6 ps-2 my-1">
                                        <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                        <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                            <i class="fab fa-facebook fa-lg"></i>
                                        </a>
                                        <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                            <i class="fab fa-twitter fa-lg"></i>
                                        </a>
                                        <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                            <i class="fab fa-instagram fa-lg"></i>
                                        </a>
                                    </div>
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
            <div class="col-lg-8 mx-auto text-center my-2">
                <a href="https://www.youtube.com/channel/UCdo5vics8bEFAd9h6aghLYQ" target="_blank" class="text-secondary me-xl-4 me-4">
                    <i class="text-lg fa-brands fa-youtube"></i>
                </a>
                <a href="https://id-id.facebook.com/universitasmuhammadiyahbandung" target="_blank" class="text-secondary me-xl-4 me-4">
                    <i class="text-lg fa-brands fa-facebook"></i>
                </a>
                <a href="https://www.instagram.com/umbandung" target="_blank" class="text-secondary me-xl-4 me-4">
                    <i class="text-lg fa-brands fa-instagram"></i>
                </a>
                <a href="https://www.twitter.com/umbandung" target="_blank" class="text-secondary me-xl-4 me-4">
                    <i class="text-lg fa-brands fa-twitter"></i>
                </a>
                <a href="https://www.tiktok.com/@umbandung" target="_blank" class="text-secondary me-xl-4 me-4">
                    <i class="text-lg fa-brands fa-tiktok"></i>
                </a>
            </div>

            <!-- Copyright -->
            <div class="col-lg-8 mx-auto text-center">
                <p class="mb-0 text-secondary">
                    Copyright ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script> Universitas Muhammadiyah Bandung. All Rights Reserved.
                </p>
            </div>
        </footer>
    </div>