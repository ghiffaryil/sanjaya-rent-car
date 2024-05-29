<?php

$Get_Id_Primary = $a_hash->decode($_GET['id'], $_GET['view']);
$result = $a_tambah_baca_update_hapus->baca_data_id("tb_pelayanan", "Id_Pelayanan", $Get_Id_Primary);
if ($result['Status'] == "Sukses") {
    $data_pelayanan = $result['Hasil'];

    $result_kategori = $a_tambah_baca_update_hapus->baca_data_id("tb_pelayanan_kategori", "Id_Pelayanan_Kategori", $data_pelayanan['Kategori']);

    if ($result_kategori['Status'] == "Sukses") {
        $data_pelayanan_kategori = $result_kategori['Hasil'];
        $Nama_Kategori = $data_pelayanan_kategori['Nama_Pelayanan_Kategori'];
    } else {
        $Nama_Kategori = "-";
    }
}
?>



<!-- Detail Start -->
<div class="container-fluid pt-5">
    <div class="container">

        <div class="section-header text-left" style="max-width: 100%;">
            <h1 class="mb-4"><?php echo $data_pelayanan['Judul_Pelayanan'] ?></h1>
            <hr>
        </div>


        <div class="row">
            <div class="col-lg-6 mb-5">
                <div class="row mx-n2 mb-3">
                    <div class="col-md-12 px-2 pb-2">
                        <img src="dashboard/media/pelayanan/cover/<?php echo $data_pelayanan['Cover_Pelayanan'] ?>?time=<?php echo $Waktu_Sekarang ?>" class="img-fluid w-60">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">

                <h5 class="text-secondary">Kategori : <?php echo $Nama_Kategori ?> </h5>
                </p>

                <h5 class="text-info">Spesifikasi : </h5>
                <p>
                <h5 class="text-secondary"><?php echo $data_pelayanan['Deskripsi'] ?> </h5>
                </p>
                <div class="row pt-3">


                    <?php
                    $fasilitas = $data_pelayanan['Fasilitas'];
                    $array_fasilitas = explode(';', $fasilitas);
                    foreach ($array_fasilitas as $item) {
                    ?>
                        <div class="px-2 py-2">
                            <i class="fa fa-check text-success mr-1"></i>
                            <span><?php echo $item ?></span>
                        </div>

                    <?php
                    }
                    ?>
                    <br>
                    <a href="" class="btn btn-block btn-danger py-3 px-5 mt-3"><i class="fa fa-phone-alt"></i>&nbsp;&nbsp;Pesan Sekarang</a>


                </div>
            </div>
        </div>
    </div>
</div>