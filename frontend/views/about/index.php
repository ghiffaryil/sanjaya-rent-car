<style>
    blockquote {
        border-left: 5px solid #ccc;
        padding-left: 15px;
        margin-left: 0;
        /* color: #666; */
        font-style: italic;
        background-color: #f9f9f9;
        padding: 10px 20px;
    }

    blockquote h1 {
        font-size: 1.5em;
        font-weight: bold;
        margin: 0;
        color: dark;
    }

    .star-rating {
        direction: rtl;
        display: inline-block;
        /* padding: 20px; */
    }

    .star-rating input[type="radio"] {
        display: none;
    }

    .star-rating label {
        font-size: 2em;
        color: #ddd;
        cursor: pointer;
    }

    .star-rating input[type="radio"]:checked~label {
        color: #f5c518;
    }

    .star-rating label:hover,
    .star-rating label:hover~label {
        color: #f5c518;
    }
</style>
<!-- About Start -->
<div class="about">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 text-center">
                <h1>Tentang Kami</h1>
            </div>
        </div>
        <hr>
    </div>

    <!-- Service Start -->
    <div class="container-xxl pb-5 pt-2">
        <div class="container">

            <div class="section-header text-left">
                <h3>Visi Kami</h3>
            </div>
            <div class="pb-4">
                <blockquote>
                    <h1>"<?php echo $data_tentang_kami['Visi'] ?>"</h1>
                </blockquote>
            </div>

            <div class="section-header text-left">
                <h3>Misi Kami</h3>
            </div>
            <div class="row g-4">

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
        </div>
    </div>
    <!-- Service End -->


    <div class="container">
        <div class="row align-items-center">
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
    <br><br>


    <div class="container">
        <div class="text-center">
            <button class="btn btn-info" data-toggle="modal" data-target="#testimoniModal">Buat Testimoni</button>
        </div>
    </div>

    <!-- Testimoni Modal -->
    <div class="modal fade" id="testimoniModal" tabindex="-1" role="dialog" aria-labelledby="testimoniModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="testimoniModalLabel">Buat Testimoni</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="testimoniForm">

                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="Nama" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="office" name="Instansi" placeholder="Instansi" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="testimoni" name="Testimoni" placeholder="Testimoni" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="rating">Rating</label> <br>
                            <!-- <input type="number" class="form-control" id="rating" name="Rating" min="1" max="5" required> -->
                            <div class="star-rating">
                                <input id="star5" name="Rating" type="radio" value="5"><label for="star5" title="5 stars"><i class="fas fa-star"></i></label>
                                <input id="star4" name="Rating" type="radio" value="4"><label for="star4" title="4 stars"><i class="fas fa-star"></i></label>
                                <input id="star3" name="Rating" type="radio" value="3"><label for="star3" title="3 stars"><i class="fas fa-star"></i></label>
                                <input id="star2" name="Rating" type="radio" value="2"><label for="star2" title="2 stars"><i class="fas fa-star"></i></label>
                                <input id="star1" name="Rating" type="radio" value="1"><label for="star1" title="1 star"><i class="fas fa-star"></i></label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto</label> <br>
                            <input type="file" class="" id="foto" name="Foto" required>
                        </div>

                        <button type="submit" class="btn btn-info btn-block">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<script>
    $(document).ready(function() {
        $('#testimoniForm').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                type: 'POST',
                url: 'frontend/function/testimoni/add_testimoni.php',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert(response.message);
                    if (response.status === 'Sukses') {
                        $('#testimoniModal').modal('hide');
                        window.location.reload();
                    }
                },
                error: function() {
                    alert('Maaf, terjadi kesalahan!');
                }
            });
        });
    });
</script>