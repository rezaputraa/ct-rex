<div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <div class="container-fluid pt-5 pt-xl-0">

        <!-- Absensi -->
        <div class="col-12 my-3">
            <div class="card">
                <div class="card-header p-3">
                    <div class="d-inline d-flex justify-content-between btn-sm mx-2">
                        <h5>Daftar Nilai Mata Kuliah Intelegensia Buatan Informatika 20B</h5>
                        <div class="d-flex d-inline justify-content-end mx-2">
                            <a href="#" class="btn btn-primary btn-sm"> Input Nilai</a>
                        </div>
                    </div>
                </div>
                <div class="card-body p-2 table-responsive">
                    <table class="table table-striped align-items-center mb-0" id="table">
                        <thead>
                            <tr>
                                <th rowspan="2" class="font-weight-bolder text-uppercase text-xs ps-2" style="width: 5%">
                                    No.</th>
                                <th rowspan="2" class="font-weight-bolder text-uppercase text-xs ps-2">
                                    NIM</th>
                                <th class="text-middle" rowspan="2" class="font-weight-bolder text-uppercase text-xs ps-2">
                                    Nama Mahasiswa</th>
                                <th class="text-middle" rowspan="2" class="font-weight-bolder text-uppercase text-xs ps-2">
                                    Hadir<p><span class="text-sm">15%</span></p>
                                </th>
                                <th class="text-middle" rowspan="2" class="font-weight-bolder text-uppercase text-xs ps-2">
                                    Tugas<p><span class="text-sm">15%</span></p>
                                </th>
                                <th class="text-middle" rowspan="2" class="font-weight-bolder text-uppercase text-xs ps-2">
                                    UTS<p><span class="text-sm text-middle">30%</span></p>
                                </th>
                                <th class="text-middle" rowspan="2" class="font-weight-bolder text-uppercase text-xs ps-2">
                                    UAS<p><span class="text-sm">40%</span></p>
                                </th>
                                <th colspan="2" class="text-center">Nilai Akhir</th>
                                <th rowspan="2" class="font-weight-bolder text-uppercase text-xs ps-2 text-center">
                                    Aksi</th>
                            </tr>
                            <tr>
                                <th class="font-weight-bolder text-uppercase text-xs ps-2">
                                    Angka</th>
                                <th class="font-weight-bolder text-uppercase text-xs ps-2 text-center">
                                    Huruf</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm">
                            <tr class="text-center">
                                <td>1</td>
                                <td>200102011</td>
                                <td>Renal Sukma Widiarsa</td>
                                <td>16</td>
                                <td>100</td>
                                <td>75</td>
                                <td>90</td>
                                <td>80</td>
                                <td>A</td>
                                <td class="text-center">
                                    <a class="badge bg-warning px-3 py-2" data-bs-toggle="">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <a class="badge bg-danger px-3 py-2" data-bs-toggle="tooltip" title="Hapus" onclick="deleteAlert('<?= site_url() ?>')">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
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
            <p class="mb-0 text-secondary">
                Copyright ??
                <script>
                    document.write(new Date().getFullYear())
                </script> Universitas Muhammadiyah Bandung. All Rights Reserved.
            </p>
        </div>
    </footer>
</div>