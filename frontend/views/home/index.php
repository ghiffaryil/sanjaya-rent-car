<style>
    @media (max-width: 992px) {
        .carousel .carousel-item {
            display: grid;
        }
    }

    .facts {
        min-height: 200px;
        position: relative;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center bottom;
        /* background-image: url('frontend/assets/media/img/carousel-3.jpg'); */
        background-color: #0c5460;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        /* Adjust text color as needed */
    }
</style>

<!-- Carousel Start -->
<div class="carousel">
    <div class="container-fluid">
        <div class="owl-carousel">

            <?php
            $search_field_where = array("Status");
            $search_criteria_where = array("=");
            $search_value_where = array("Aktif");
            $search_connector_where = array("");
            $nomor = 0;
            $result = $a_tambah_baca_update_hapus->baca_data_dengan_filter("tb_banner", $search_field_where, $search_criteria_where, $search_value_where, $search_connector_where);

            if ($result['Status'] == "Sukses") {
                $data_hasil = $result['Hasil'];

                foreach ($data_hasil as $data) {
                    $nomor++;
            ?>

                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="dashboard/media/banner/<?php echo $data['Foto_Banner']; ?>" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1><?php echo $data['Judul']; ?></h1>
                            <h2 class="text-white"><?php echo $data['Deskripsi']; ?></h2>

                            <br><br>
                            <a class="btn btn-custom" href="">Explore More</a>
                        </div>
                    </div>

            <?php }
            } ?>

        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="about mt-0 pt-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="section-header text-center" style="max-width:100%">
                <div>
                    <h2><?php echo $data_website['Judul_Website'] ?></h2>
                    <h5 class="text-orange"><i> "<?php echo $data_tentang_kami['Motto'] ?>" </i></h5>
                    <br>
                    <hr>
                </div>
            </div>
        </div>

        <div class="row mb-3">

            <?php
            $data_misi = $data_tentang_kami['Misi'];
            $array_data_misi = explode(';', $data_misi);
            foreach ($array_data_misi as $misi) {

                $explode_misi = explode(",", $misi);
            ?>
                <div class="col-lg-4 col-md-6 px-4">
                    <div class="row bg-light p-4">
                        <div class="col-lg-3">
                            <i class="fa fa-check-circle fa-3x text-orange flex-shrink-0"></i>
                        </div>
                        <div class="col-lg-9">
                            <h4 class="mt-2"><?php echo $explode_misi[0] ?></h4>
                        </div>

                        <div class="col-lg-12">
                            <br>
                            <p><?php echo $explode_misi[1] ?></p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>

        <div class="row align-items-center mt-5">
            <div class="col-lg-5">
                <div class="about-img">
                    <img src="dashboard/media/tentang_kami/<?php echo $data_tentang_kami['Foto_Tentang_Kami'] ?>" alt="Image">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-header text-left">
                    <p>
                        <font style="size: 60px;">Tentang Kami</font>
                    </p>
                    <h2><?php echo $data_website['Judul_Website'] ?></h2>
                </div>
                <div class="about-content">


                    <p>
                        <?php echo $data_website['Deskripsi_Lengkap'] ?>
                    </p>
                    <ul>
                        <?php
                        $search_field_where = array("Status");
                        $search_criteria_where = array("=");
                        $search_value_where = array("Aktif");
                        $search_connector_where = array("");
                        $nomor = 0;
                        $result = $a_tambah_baca_update_hapus->baca_data_dengan_filter("tb_pelayanan_kategori", $search_field_where, $search_criteria_where, $search_value_where, $search_connector_where);

                        if ($result['Status'] == "Sukses") {
                            $data_hasil = $result['Hasil'];

                            foreach ($data_hasil as $data_layanan) {
                                $nomor++;
                        ?>
                                <li class="mb-3"><i class="fas fa-check-circle"></i><?php echo $data_layanan['Nama_Pelayanan_Kategori'] ?></li>
                        <?php
                            }
                        }
                        ?>
                    </ul>
                    <a class="btn btn-custom" href="?view=contact">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Facts Start -->
<div class="facts" data-parallax="scroll" data-image-src="frontend/assets/media/img/blog-3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-map-marker-alt"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">5</h3>
                        <p>Paket Sewa</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-user"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">35</h3>
                        <p>Drivers</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-users"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">500</h3>
                        <p>Pelanggan</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="facts-item">
                    <i class="fa fa-check"></i>
                    <div class="facts-text">
                        <h3 data-toggle="counter-up">1000</h3>
                        <p>Perjalanan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<!-- Price Start  -->
<div class="price pt-0">
    <div class="container">
        <div class="section-header text-center">
            <p>Layanan Kami</p>
            <h2>Pilih paket sesuai keinginan anda</h2>
        </div>
        <div class="row">
            <?php

            $search_field_where = array("Status");
            $search_criteria_where = array("=");
            $search_value_where = array("Aktif");
            $search_connector_where = array("ORDER BY Id_Pelayanan_Kategori DESC LIMIT 3");
            $result = $a_tambah_baca_update_hapus->baca_data_dengan_filter("tb_pelayanan_kategori", $search_field_where, $search_criteria_where, $search_value_where, $search_connector_where);
            $nomor = 0;

            if ($result['Status'] == "Sukses") {
                $data_pelayanan_kategori_hasil = $result['Hasil'];
                foreach ($data_pelayanan_kategori_hasil as $data_pelayanan_kategori) {

                    $search_field_where = array("Status", "Kategori");
                    $search_criteria_where = array("=", "=");
                    $search_value_where = array("Aktif", "$data_pelayanan_kategori[Id_Pelayanan_Kategori]");
                    $search_connector_where = array("AND", "ORDER BY Harga ASC LIMIT 1");
                    $result_pelayanan = $a_tambah_baca_update_hapus->baca_data_dengan_filter("tb_pelayanan", $search_field_where, $search_criteria_where, $search_value_where, $search_connector_where);

                    $data_pelayanan_hasil = $result_pelayanan['Hasil'][0];
                    $harga_pelayanan_termurah  = $data_pelayanan_hasil['Harga'];

            ?>

                    <div class="col-md-4">
                        <div class="price-item bg-light <?php if ($nomor == 1) {
                                                            echo "featured-item p-5";
                                                        } else {
                                                            echo "mt-3";
                                                        } ?>">
                            <div class="price-header">
                                <h3><?php echo $data_pelayanan_kategori['Nama_Pelayanan_Kategori'] ?></h3>
                                <p>
                                <h5><small><i>Mulai dari</i></small></h5>
                                </p>
                                <h2><span>Rp</span><strong><?php echo substr($harga_pelayanan_termurah, 0, 3); ?></strong><span>K</span></h2>
                            </div>
                            <div class="price-body pt-0 mt-o">
                                <ul>
                                    <?php
                                    $fasilitas = $data_pelayanan_hasil['Fasilitas'];
                                    $array_fasilitas = explode(';', $fasilitas);
                                    foreach ($array_fasilitas as $item) {
                                    ?>
                                        <li>
                                            <i class="far fa-check-circle"></i>
                                            <?php echo $item ?>
                                        </li>

                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="price-footer mt-3">
                                <a class="btn btn-custom" href="">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>

            <?php
                    $nomor++;
                }
            } ?>

        </div>
    </div>
</div>
<!-- Price End -->


<!-- Location Start -->
<div class="location bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-header text-left">
                    <p>Hubungi Kami</p>
                    <h2><?php echo $data_website['Judul_Website'] ?></h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="location-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="location-text">
                                <h3>Alamat Kantor</h3>
                                <p><?php echo $data_website['Alamat_Lengkap'] ?></p>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">

                        <div class="location-item">
                            <i class="fa fa-phone"></i>
                            <div class="location-text">
                                <h3>Kontak Kami</h3>
                                <p><strong>Telp:</strong><?php echo $data_website['Nomor_Telpon'] ?></p>
                                <p><strong>HP:</strong><?php echo $data_website['Nomor_Handphone'] ?></p>
                                <p><strong>Email:</strong><?php echo $data_website['Email_Admin'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="location-form" style="background-image: linear-gradient(to bottom, #269ca2, #0c5460);">
                    <h3><small> Ingin Sewa Mobil?</small> <br> <big>Hubungi Kami!</big></h3>
                    <form method="POST">
                        <div class="control-group">
                            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" required="required" />
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" name="Nomor_Handphone" id="Nomor_Handphone" placeholder="No. Handphone" required="required" />
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" name="Pesan" id="Pesan" placeholder="Pesan" required="required"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-danger btn-block" name="submit_kirim_pesan" id="submit_kirim_pesan" type="button">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#submit_kirim_pesan').on('click', function(e) {
                e.preventDefault();

                var inputNama = $('#Nama').val();
                var inputNomorHandphone = $('#Nomor_Handphone').val();
                var inputPesan = $('#Pesan').val();

                if (
                    inputNama == '' ||
                    inputNomorHandphone == '' ||
                    inputPesan == ''
                ) {
                    alert('Harap lengkapi data');
                } else {

                    $.ajax({
                        type: 'POST',
                        url: 'frontend/function/contact/send_message_whatsapp.php',
                        data: {
                            "Nama": inputNama,
                            "Nomor_Handphone": inputNomorHandphone,
                            "Pesan": inputPesan,
                            "Nomor_CS": "<?php echo $data_website['Nomor_CS'] ?>",
                            "Pesan_CS": "<?php echo $data_website['Pesan_CS'] ?>",
                        },
                        dataType: 'json',
                        success: function(response) {

                            // alert(response.status);

                            if (response.status == "success") {
                                window.open(response.url, '_blank');
                                var inputNama = $('#Nama').val('');
                                var inputNomorHandphone = $('#Nomor_Handphone').val('');
                                var inputPesan = $('#Pesan').val('');
                            }
                        },
                    });

                }
            });
        });
    </script>
</div>
<!-- Location End -->

<!-- Testimonial Start -->
<div class="testimonial">
    <div class="container">
        <div class="section-header text-center">
            <p>Testimoni</p>
            <h2>Apa kata mereka?</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">

            <?php
            $search_field_where = array("Status");
            $search_criteria_where = array("=");
            $search_value_where = array("Aktif");
            $search_connector_where = array("");
            $nomor = 0;
            $result = $a_tambah_baca_update_hapus->baca_data_dengan_filter("tb_testimoni", $search_field_where, $search_criteria_where, $search_value_where, $search_connector_where);

            if ($result['Status'] == "Sukses") {
                $data_hasil = $result['Hasil'];

                foreach ($data_hasil as $data_testimoni) {
                    $nomor++;
            ?>
                    <div class="testimonial-item">
                        <img src="dashboard/media/testimoni/<?php echo $data_testimoni['Foto']; ?>" alt="Image">
                        <div class="testimonial-text">
                            <h3><?php echo $data_testimoni['Nama']; ?></h3>
                            <h4><?php echo $data_testimoni['Instansi']; ?></h4>
                            <p><?php echo $data_testimoni['Testimoni']; ?></p>
                        </div>
                    </div>

            <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Blog Start -->
<div class="blog bg-light">
    <div class="container">
        <div class="section-header text-center">
            <p>Galeri</p>
            <h2>Galeri Kami</h2>
        </div>
        <div class="row">

            <?php
            $search_field_where = array("Status");
            $search_criteria_where = array("=");
            $search_value_where = array("Aktif");
            $search_connector_where = array("ORDER BY Id_Galeri DESC LIMIT 4");
            $nomor = 0;
            $result = $a_tambah_baca_update_hapus->baca_data_dengan_filter("tb_galeri", $search_field_where, $search_criteria_where, $search_value_where, $search_connector_where);

            if ($result['Status'] == "Sukses") {
                $data_hasil = $result['Hasil'];

                foreach ($data_hasil as $data_galeri) {
                    $nomor++;
            ?>
                    <div class="col-lg-3">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="dashboard/media/galeri/<?php echo $data_galeri['Foto_Galeri']; ?>" alt="Image">
                                <div class="meta-date">
                                    <?php echo $data_galeri['Judul_Galeri']; ?>
                                </div>
                            </div>
                            <div class="blog-text">
                                <h3><a href="#"><?php echo $data_galeri['Judul_Galeri']; ?></a></h3>
                                <p>
                                    <?php echo $data_galeri['Keterangan']; ?>
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><a><i class="fa fa-user"></i>Admin</a></p>
                                <p><a><i class="fa fa-calendar"></i><?php echo tanggal_dan_waktu_24_jam_indonesia($data_galeri['Waktu_Simpan_Data']); ?></a></p>
                            </div>
                        </div>
                    </div>

            <?php
                }
            }
            ?>

        </div>
    </div>
</div>
<!-- Blog End -->