<style>
    blockquote {
        border-left: 5px solid #ccc;
        padding-left: 15px;
        margin-left: 0;
        color: #666;
        font-style: italic;
        background-color: #f9f9f9;
        padding: 10px 20px;
    }

    blockquote h1 {
        font-size: 1.5em;
        font-weight: bold;
        margin: 0;
        color: #f2850f;
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