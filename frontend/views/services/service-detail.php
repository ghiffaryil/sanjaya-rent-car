<?php

$decode_id = $a_hash->decode("$_GET[id]", "menu");
$Get_Id_Primary = $decode_id[0];

$result = $a_tambah_baca_update_hapus->baca_data_id("tb_pelayanan_kategori", "Id_Pelayanan_Kategori", $Get_Id_Primary);
if ($result['Status'] == "Sukses") {
    $data_detail_kategori = $result['Hasil'];
}
?>


<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center">
            <h3>LAYANAN PAKET</h3>
            <h1 class="mb-5"><b><?php echo $data_detail_kategori['Nama_Pelayanan_Kategori'] ?></b>
                <hr>
            </h1>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills mr-4">


                    <?php
                    $nomor = 0;
                    $search_field_where = array("Status", "Kategori");
                    $search_criteria_where = array("=", "=");
                    $search_value_where = array("Aktif", "$Get_Id_Primary");
                    $search_connector_where = array("AND", "ORDER BY Id_Pelayanan DESC");
                    $result_layanan = $a_tambah_baca_update_hapus->baca_data_dengan_filter("tb_pelayanan", $search_field_where, $search_criteria_where, $search_value_where, $search_connector_where);

                    if ($result_layanan['Status'] == "Sukses") {
                        $data_hasil = $result_layanan['Hasil'];

                        foreach ($data_hasil as $data_pelayanan) {
                    ?>
                            <button id="button_tab_<?php echo $nomor ?>" onclick="changeTab(<?php echo $nomor;?>)" class="btn btn-info w-100 p-4 mb-4" type="button">
                                <h4 class="m-0 text-white"><?php echo $data_pelayanan['Judul_Pelayanan'] ?></h4>
                            </button>

                    <?php
                            $nomor++;
                        }
                    }
                    ?>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <?php
                    $nomor = 0;
                    $search_field_where = array("Status", "Kategori");
                    $search_criteria_where = array("=", "=");
                    $search_value_where = array("Aktif", "$Get_Id_Primary");
                    $search_connector_where = array("AND", "ORDER BY Id_Pelayanan DESC");
                    $result_layanan = $a_tambah_baca_update_hapus->baca_data_dengan_filter("tb_pelayanan", $search_field_where, $search_criteria_where, $search_value_where, $search_connector_where);

                    if ($result_layanan['Status'] == "Sukses") {
                        $data_hasil = $result_layanan['Hasil'];

                        foreach ($data_hasil as $data_pelayanan) {
                    ?>
                            <div class="tab-pane fade show active" id="tab<?php echo $nomor?>">
                                <!-- Your Tab 1 Content Here -->
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100" src="dashboard/media/pelayanan/cover/<?php echo $data_pelayanan['Cover_Pelayanan'];?>" style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="mb-3"><?php echo $data_pelayanan['Judul_Pelayanan']?></h3>
                                        <p class="mb-4"><?php echo $data_pelayanan['Deskripsi']?></p>
                                        <p><small>Paket ini sudah termasuk dengan</small></p>
                                        <?php
                                $fasilitas = $data_pelayanan['Fasilitas'];
                                // Split the string into an array using the semicolon separator
                                $array_fasilitas = explode(';', $fasilitas);
                                // Loop through the array
                                foreach ($array_fasilitas as $item) {
                                ?>
                                    <div class="px-2 py-2">
                                        <i class="fa fa-check text-success mr-1"></i>
                                        <span><?php echo $item ?></span>
                                    </div>

                                <?php
                                }
                                ?>
                                <br><br>
                                        <a href="" class="btn btn-danger py-3 px-5 mt-3">Pesan Sekarang</a>
                                    </div>
                                </div>
                            </div>

                    <?php
                            $nomor++;
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function changeTab(tabIndex) {
        // Hide all tab panes
        var tabPanes = document.querySelectorAll('.tab-pane');
        tabPanes.forEach(function(tabPane) {
            tabPane.classList.remove('show', 'active');
        });

        // Show the selected tab pane
        var selectedTabPane = document.getElementById('tab' + tabIndex);
        selectedTabPane.classList.add('show', 'active');

        // Change the color of the button
        var buttons = document.querySelectorAll('.nav-pills button');
        buttons.forEach(function(button, index) {
            if (index === tabIndex) {
                button.classList.remove('btn-info');
                button.classList.add('btn-orange');
            } else {
                button.classList.remove('btn-orange');
                button.classList.add('btn-info');
            }
        });
    }


    document.addEventListener('DOMContentLoaded', function() {
        changeTab(0);
    });
</script>