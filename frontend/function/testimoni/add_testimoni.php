<?php
header('Content-Type: application/json');

// Include necessary files and initialize database connection
include '../../../app/config/database/database.php';
include '../../../app/config/konfigurasi/konfigurasi.php';
require_once("../../../app/models/hash/hash.php");
require_once("../../../app/models/tambah_baca_update_hapus/tambah_baca_update_hapus.php");
require_once("../../../app/models/hash_password/hash_password.php");
require_once("../../../app/models/upload_file/upload_file.php");
require_once("../../../app/models/kompres_gambar/kompres_gambar.php");

$Waktu_Sekarang = date("Y-m-d H:i:s");

//PEMANGGILAN CLASS UNTUK HASH ENKRIPSI
$a_hash = new a_hash();
$a_hash_password = new a_hash_password();

//PEMANGGILAN CLASS UNTUK CRUD
$a_tambah_baca_update_hapus = new a_tambah_baca_update_hapus();

//PEMANGGILAN CLASS UNTUK CRUD
$a_upload_file = new a_upload_file();
if (
    isset($_POST['Nama']) &&
    isset($_POST['Instansi']) &&
    isset($_POST['Testimoni']) &&
    isset($_POST['Rating'])
) {
    // Sanitize and validate input
    $nama = $_POST['Nama'];
    $instansi = $_POST['Instansi'];
    $testimoni = $_POST['Testimoni'];
    $rating = $_POST['Rating'];
    $waktu_sekarang = date('Y-m-d H:i:s');

    // Insert data into the database
    $form_field = array("Nama", "Instansi", "Testimoni", "Rating", "Waktu_Simpan_Data", "Status");
    $form_value = array($nama, $instansi, $testimoni, $rating, $waktu_sekarang, "Aktif");
    $result = $a_tambah_baca_update_hapus->tambah_data("tb_testimoni", $form_field, $form_value);

    if ($result['Status'] == "Sukses") {
        $a_result_terbaru = $a_tambah_baca_update_hapus->baca_data_terbaru("tb_testimoni", "Id_Testimoni");
        if ($a_result_terbaru['Status'] == "Sukses") {
            $Id_Auto_Increment = $a_result_terbaru['Hasil'][0]['Id_Testimoni'];
        } else {
            $Id_Auto_Increment = 1;
        }

        // Handle file upload
        if (isset($_FILES['Foto']) && $_FILES['Foto']['size'] > 0 && $_FILES['Foto']['error'] == 0) {
            $post_file_upload = $_FILES['Foto'];
            $path_file_upload = $_FILES['Foto']['name'];
            $ext_file_upload = pathinfo($path_file_upload, PATHINFO_EXTENSION);
            $nama_file_upload = $a_hash->hash_nama_file($Id_Auto_Increment, "_Foto") . "_" . $Id_Auto_Increment . "_Foto";
            $folder_penyimpanan_file_upload = "../../../dashboard/media/testimoni/";
            $tipe_file_yang_diizikan_file_upload = array("png", "gif", "jpg", "jpeg");
            $maksimum_ukuran_file_upload = 3000000;

            $result_upload_file = $a_upload_file->upload_file($post_file_upload, $nama_file_upload, $folder_penyimpanan_file_upload, $tipe_file_yang_diizikan_file_upload, $maksimum_ukuran_file_upload);

            if ($result_upload_file['Status'] == "Sukses") {

                $form_field = array("Foto");
                $form_value = array("$nama_file_upload.$ext_file_upload");
                $form_field_where = array("Id_Testimoni");
                $form_criteria_where = array("=");
                $form_value_where = array("$Id_Auto_Increment");
                $form_connector_where = array("");

                $result = $a_tambah_baca_update_hapus->update_data("tb_testimoni", $form_field, $form_value, $form_field_where, $form_criteria_where, $form_value_where, $form_connector_where);
            }
        }

        $response = ["status" => "Sukses", "message" => "Terimakasih telah memberi testimoni kepada kami"];
    } else {
        $response = ["status" => "Error", "message" => "Gagal menyimpan data"];
    }
} else {
    $response = ["status" => "Error", "message" => "Data tidak lengkap"];
}

echo json_encode($response);
