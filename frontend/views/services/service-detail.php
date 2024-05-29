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

                <h5 class="text-secondary"> <?php echo $Nama_Kategori ?> </h5>

                <p>
                <h5 class="text-info">Spesifikasi : </h5>
                <p>
                <h5 class="text-secondary"><?php echo $data_pelayanan['Deskripsi'] ?> </h5>
                </p>
                <div class="row pt-3">
                    <div class="col-lg-12">
                        <?php
                        $fasilitas = $data_pelayanan['Fasilitas'];
                        $array_fasilitas = explode(';', $fasilitas);
                        foreach ($array_fasilitas as $item) {
                        ?>
                            <div class="px-2 py-3">
                                <i class="fa fa-check-circle text-info mr-2"></i>
                                <span><?php echo $item ?></span>
                            </div>

                        <?php
                        }
                        ?>

                    </div>
                </div>

                <div class="row pt-3">
                    <div class="col-lg-12">
                    <?php
                    $text_pesan = $data_website['Pesan_CS'] . " " . $data_pelayanan['Judul_Pelayanan'] . "_" . $Nama_Kategori;
                    $pesan = str_replace(" ", "%20", $text_pesan);
                    ?>
                    <a class="btn btn-orange text-white text-bold" style="cursor:default" readonly><?php echo $a_format_angka->rupiah($data_pelayanan['Harga']); ?>/hari</a>
                    <a target="_blank" class="btn btn-info text-white text-bold" href="https://api.whatsapp.com/send/?phone=%2B62<?php echo $data_website['Nomor_CS'] ?>&text=<?php echo $pesan ?>"> Pesan Sekarang </a>
                </div>
            </div>
        </div>
    </div>
</div>