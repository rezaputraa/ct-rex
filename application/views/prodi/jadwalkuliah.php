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
                                <img src="<?= base_url(); ?>assets/img/mahalini.jpg" alt="profile_image" class="w-100 border-radiu  s-lg shadow-sm">
                            </div>
                        </div>
                        <div class="col-auto my-auto">
                            <div class="h-100">
                                <h5 class="mb-1"><?= $prodi['nama'] ?></h5>
                                <p class="mb-0 font-weight-bold text-sm"><?= $prodi['id_prodi'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex d-inline ms-auto">
                        <p class="mx-2">Mahasiswa Aktif</p>
                        <p class="mx-2">Dosen Prodi</p>
                    </div>
                </div>
            </div>

            <!-- Form Jadwal Kuliah -->
            <div class="col-12 mb-md-0 my-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5 class="mb-0">Form Pengaturan Jadwal Kuliah</h5>
                                </div>
                                <div>
                                    <a href="<?= site_url('prodi/civitas/data-dosen-wali/tambah-wali') ?>" class="btn btn-primary btn-sm mb-0">Atur Jadwal Kuliah</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Jadwal Kuliah -->
            <div class="col-12 mb-md-0 my-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h5 class="mb-0">Jadwal Kuliah</h5>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            ID Mata Kuliah</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Nama Mata Kuliah</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Jenis </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            SKS</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Dosen Pengampu</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Hari </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Waktu </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Ruangan </th>
                                    </tr>
                                </thead>
                            </table>
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
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Universitas Muhammadiyah Bandung. All Rights Reserved.
                    </p>
                </div>
            </footer>
        </div>