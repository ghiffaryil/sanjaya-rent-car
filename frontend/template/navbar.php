<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark" style="text-wrap: nowrap;">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <img src="frontend/assets/media/logo/logo_main.jpg" style="height: 40px;" alt="">
                </div>
                <div class="navbar-nav mr-auto">
                    <a href="index.php" class="text-uppercase nav-item nav-link <?php if (!(isset($_GET['view']))) {
                                                                        echo "active";
                                                                    } ?>">Beranda</a>
                    <a href="?view=about" class="text-uppercase nav-item nav-link <?php if ((isset($_GET['view'])) && ($_GET['view'] == "about")) {
                                                                        echo "active";
                                                                    } ?>">Tentang Kami</a>
                    <div class="nav-item dropdown">

                        <style>
                            /* CSS to change color to black when hovering */
                            .dropdown-item {
                                color: white;
                                padding: 0.5m;
                                border-bottom: 1px solid white;
                            }

                            .dropdown-item:hover {
                                color: black;
                            }
                        </style>

                        <a href="" class="nav-link text-uppercase dropdown-toggle <?php if ((isset($_GET['view'])) && (($_GET['view'] == "services") OR ($_GET['view'] == "service-detail"))) {
                                                                        echo "active";
                                                                    } ?>" data-toggle="dropdown">Layanan</a>
                        <div class="dropdown-menu" style="background: #0c5460;">
                        <a class="dropdown-item" href="?view=services">ALL</a>
                            <?php
                            $search_field_where = array("Status");
                            $search_criteria_where = array("=");
                            $search_value_where = array("Aktif");
                            $search_connector_where = array("");
                            $nomor = 0;
                            $result = $a_tambah_baca_update_hapus->baca_data_dengan_filter("tb_pelayanan_kategori", $search_field_where, $search_criteria_where, $search_value_where, $search_connector_where);

                            if ($result['Status'] == "Sukses") {
                                $data_hasil = $result['Hasil'];

                                foreach ($data_hasil as $data) {
                                    $nomor++;
                            ?>
                                    <a class="dropdown-item" href="?view=service-detail&id=<?php echo $a_hash->encode($data['Id_Pelayanan_Kategori'], "service-detail") ?>"><?php echo $data['Nama_Pelayanan_Kategori'] ?></a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <a href="?view=contact" class="text-uppercase nav-item nav-link <?php if ((isset($_GET['view'])) && ($_GET['view'] == "contact")) {
                                                                            echo "active";
                                                                        } ?>">Kontak</a>
                </div>
                <div class="ml-auto">
                    <a class="btn btn-custom" href="http://wa.me/<?php echo $data_website['Nomor_CS'] ?>">Hubungi Kami</a>
                </div>
            </div>
        </nav>
    </div>
</div>