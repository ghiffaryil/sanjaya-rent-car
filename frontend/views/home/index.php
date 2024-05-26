<style>
    @media (max-width: 992px) {
        .carousel .carousel-item {
            display: grid;
        }
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
<div class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="dashboard/media/tentang_kami/<?php echo $data_tentang_kami['Foto_Tentang_Kami'] ?>" alt="Image">
                </div>
            </div>
            <div class="col-lg-6">
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
                                <li><i class="far fa-check-circle"></i><?php echo $data_layanan['Nama_Pelayanan_Kategori'] ?></li>
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
<div class="facts" data-parallax="scroll" data-image-src="frontend/assets/media/img/facts.jpg">
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


<!-- Price Start 
<div class="price">
    <div class="container">
        <div class="section-header text-center">
            <p>Washing Plan</p>
            <h2>Choose Your Plan</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="price-item">
                    <div class="price-header">
                        <h3>Basic Cleaning</h3>
                        <h2><span>$</span><strong>25</strong><span>.99</span></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="far fa-check-circle"></i>Seats Washing</li>
                            <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                            <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                            <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                            <li><i class="far fa-times-circle"></i>Window Wiping</li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <a class="btn btn-custom" href="">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-item featured-item">
                    <div class="price-header">
                        <h3>Premium Cleaning</h3>
                        <h2><span>$</span><strong>35</strong><span>.99</span></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="far fa-check-circle"></i>Seats Washing</li>
                            <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                            <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                            <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                            <li><i class="far fa-times-circle"></i>Window Wiping</li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <a class="btn btn-custom" href="">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="price-item">
                    <div class="price-header">
                        <h3>Complex Cleaning</h3>
                        <h2><span>$</span><strong>49</strong><span>.99</span></h2>
                    </div>
                    <div class="price-body">
                        <ul>
                            <li><i class="far fa-check-circle"></i>Seats Washing</li>
                            <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                            <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                            <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                            <li><i class="far fa-check-circle"></i>Window Wiping</li>
                        </ul>
                    </div>
                    <div class="price-footer">
                        <a class="btn btn-custom" href="">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
Price End -->


<!-- Location Start -->
<div class="location">
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
                    <form>
                        <div class="control-group">
                            <input type="text" class="form-control" placeholder="Nama" required="required" />
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" placeholder="No. Handphone" required="required" />
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" placeholder="Pesan" required="required"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-custom" type="submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Location End -->


<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Meet Our Team</p>
            <h2>Our Engineers & Workers</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="frontend/assets/media/img/team-1.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Donald John</h2>
                        <p>Engineer</p>
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="frontend/assets/media/img/team-2.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Adam Phillips</h2>
                        <p>Engineer</p>
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="frontend/assets/media/img/team-3.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>Thomas Olsen</h2>
                        <p>Worker</p>
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">
                        <img src="frontend/assets/media/img/team-4.jpg" alt="Team Image">
                    </div>
                    <div class="team-text">
                        <h2>James Alien</h2>
                        <p>Worker</p>
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


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
<div class="blog">
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