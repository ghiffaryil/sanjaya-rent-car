<!DOCTYPE html>
<html lang="en">

<?php include "frontend/template/header.php" ?>

<body>

    <?php

    include "app/config/function/init.php";

    $result_website = $a_tambah_baca_update_hapus->baca_data_id("tb_pengaturan_website", "Id_Pengaturan_Website", "1");
    $data_website = $result_website['Hasil'];

    $result_tentang_kami = $a_tambah_baca_update_hapus->baca_data_id("tb_tentang_kami", "Id_Tentang_Kami", "1");
    $data_tentang_kami = $result_tentang_kami['Hasil'];
    ?>



    <!-- Top Bar Start -->
    <?php include "frontend/template/topbar.php" ?>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <?php include "frontend/template/navbar.php" ?>
    <!-- Nav Bar End -->

    <!-- Body Start -->
    <?php include "frontend/controller/controller.php" ?>
    <!-- Body End -->

    <!-- Footer Start -->
    <?php include "frontend/template/footer.php" ?>
    <!-- Footer End -->

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <!-- Libraries -->
    <?php include "frontend/template/libraries.html" ?>

</body>

</html>