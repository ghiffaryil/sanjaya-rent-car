<!-- Rent A Car Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="mb-2 text-uppercase"><b>Layanan Kami </b> <br>
                <hr>
            </h1>

        </div>

        <form action="" method="POST">
            <div class="row">
                <div class="col-lg-4">
                    <input type="text" class="form-control" name="input_search_name" placeholder="Cari mobil yang anda inginkan" value="<?php if (isset($_POST['submit_search_layanan'])) {
                                                                                                                                            echo $_POST['input_search_name'];
                                                                                                                                        } ?>">
                </div>
                <div class="col-lg-4">
                    <select name="input_search_kategori" id="" class="form-control">

                        <option value="">Semua Kategori</option>
                        <?php
                        $search_field_where = array("Status");
                        $search_criteria_where = array("=");
                        $search_value_where = array("Aktif");
                        $search_connector_where = array("");
                        $result = $a_tambah_baca_update_hapus->baca_data_dengan_filter("tb_pelayanan_kategori", $search_field_where, $search_criteria_where, $search_value_where, $search_connector_where);

                        if ($result['Status'] == "Sukses") {
                            $data_hasil = $result['Hasil'];
                            foreach ($data_hasil as $data) {
                        ?>
                                <option <?php if (isset($_POST['submit_search_layanan'])) {
                                            if ($_POST['input_search_kategori'] == $data['Id_Pelayanan_Kategori']) {
                                                echo "selected";
                                            }
                                        } ?> value="<?php echo $data['Id_Pelayanan_Kategori'] ?>"><?php echo $data['Nama_Pelayanan_Kategori'] ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="col-lg-2">
                    <select name="input_search_sort" id="input_search_sort" class="form-control">
                        <?php if (isset($_POST['submit_search_layanan'])) { ?>
                            <option value="<?php echo $_POST['input_search_sort'] ?>"><?php echo $_POST['input_search_sort'] ?></option>
                        <?php } ?>
                        <option value="Terbaru">Terbaru</option>
                        <option value="Terlama">Terlama</option>
                        <option value="Termurah">Termurah</option>
                        <option value="Termahal">Termahal</option>
                    </select>
                </div>

                <div class="col-lg-2">
                    <input type="submit" class="btn btn-info btn-block" name="submit_search_layanan" value="Cari">
                </div>

            </div>
        </form>

        <hr><br>

        <div class="row">
            <?php

            if (isset($_POST['submit_search_layanan'])) {
                if (isset($_POST['input_search_name'])) {
                    $filter_name = $_POST['input_search_name'];
                } else {
                    $filter_name = "";
                }

                if (isset($_POST['input_search_kategori'])) {
                    $filter_kategori = $_POST['input_search_kategori'];
                } else {
                    $filter_kategori = "";
                }

                if (isset($_POST['input_search_sort'])) {
                    $filter_sort = $_POST['input_search_sort'];

                    if ($filter_sort == "Terlama") {
                        $filter_sort = "ORDER BY Id_Pelayanan ASC";
                    } else if ($filter_sort == "Termahal") {
                        $filter_sort = "ORDER BY Harga DESC";
                    } else if ($filter_sort == "Termurah") {
                        $filter_sort = "ORDER BY Harga ASC";
                    } else {
                        $filter_sort = "ORDER BY Id_Pelayanan DESC";
                    }
                } else {
                    $filter_sort = "ORDER BY Id_Pelayanan DESC";
                }

                $search_field_where = array("Status", "Kategori", "Judul_Pelayanan");
                $search_criteria_where = array("=", "LIKE", "LIKE");
                $search_value_where = array("Aktif", "%$filter_kategori%", "%$filter_name%");
                $search_connector_where = array("AND", "AND", "$filter_sort");
                $result = $a_tambah_baca_update_hapus->baca_data_dengan_filter("tb_pelayanan", $search_field_where, $search_criteria_where, $search_value_where, $search_connector_where);
            } else {

                $search_field_where = array("Status");
                $search_criteria_where = array("=");
                $search_value_where = array("Aktif");
                $search_connector_where = array("ORDER BY Id_Pelayanan DESC");
                $result = $a_tambah_baca_update_hapus->baca_data_dengan_filter("tb_pelayanan", $search_field_where, $search_criteria_where, $search_value_where, $search_connector_where);
            }

            if ($result['Status'] == "Sukses") {
                $data_pelayanan_hasil = $result['Hasil'];

                foreach ($data_pelayanan_hasil as $data_pelayanan) {
                    $nomor++;

                    $result_kategori = $a_tambah_baca_update_hapus->baca_data_id("tb_pelayanan_kategori", "Id_Pelayanan_Kategori", $data_pelayanan['Kategori']);

                    if ($result_kategori['Status'] == "Sukses") {
                        $data_pelayanan_kategori = $result_kategori['Hasil'];
                        $Nama_Kategori = $data_pelayanan_kategori['Nama_Pelayanan_Kategori'];
                    } else {
                        $Nama_Kategori = "-";
                    }
            ?>
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="rent-item mb-5">
                            <img class="img-fluid mb-4" src="dashboard/media/pelayanan/cover/<?php echo $data_pelayanan['Cover_Pelayanan'] ?>" alt="" style="height: 400px; width:100%;">

                            <div class=" mb-4">
                                <h3 class="mb-4"><a href="?view=service-detail&id=<?php echo $a_hash->encode($data_pelayanan['Id_Pelayanan'], 'service-detail'); ?>">
                                        <?php echo $data_pelayanan['Judul_Pelayanan']; ?>
                                    </a>
                                </h3>
                                <small><?php echo $Nama_Kategori ?></small>
                            </div>
                            <div class="d-flex mb-4">
                                <?php
                                $fasilitas = $data_pelayanan['Fasilitas'];
                                // Split the string into an array using the semicolon separator
                                $array_fasilitas = explode(';', $fasilitas);
                                // Loop through the array
                                foreach ($array_fasilitas as $item) {
                                ?>
                                    <div class="px-2">
                                        <i class="fa fa-check text-success mr-1"></i>
                                        <span><?php echo $item ?></span>
                                    </div>

                                <?php
                                }
                                ?>

                            </div>
                            <?php
                            $text_pesan = $data_website['Pesan_CS'] . " " . $data_pelayanan['Judul_Pelayanan'] . "_" . $Nama_Kategori;
                            $pesan = str_replace(" ", "%20", $text_pesan);
                            ?>
                            <button class="btn btn-orange text-white text-bold" style="cursor:default" readonly><?php echo $a_format_angka->rupiah($data_pelayanan['Harga']); ?>/hari</button>
                            <a target="_blank" class="btn btn-info text-white text-bold" href="https://api.whatsapp.com/send/?phone=%2B62<?php echo $data_website['Nomor_CS'] ?>&text=<?php echo $pesan ?>" > Pesan Sekarang </a>
                        </div>
                    </div>

                <?php
                }
            } else {
                ?>

                <div class="col-lg-12 mb-3">
                    <div class="p-4">
                        <center>
                            <i class="fa fa-car text-info" style="font-size: 60px;"></i>
                        </center>
                        <br>
                        <center>
                            <h2>Oops, Produk tidak ditemukan!</h2>
                        </center>
                    </div>
                </div>


            <?php } ?>
        </div>
    </div>
</div>
<!-- Rent A Car End -->