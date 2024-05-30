<?php

header('Content-Type: application/json');
if (
    isset($_POST['Nama']) &&
    isset($_POST['Nomor_Handphone']) &&
    isset($_POST['Pesan']) &&
    isset($_POST['Nomor_CS']) &&
    isset($_POST['Pesan_CS'])
) {
    $pesan = $_POST['Pesan_CS'] . "_" . $_POST['Nama'] . "_" . $_POST['Nomor_Handphone'] . "_" . $_POST['Pesan'];
    $format_whatsapp_message = str_replace(" ", "%20", $pesan);

    $url = "https://api.whatsapp.com/send/?phone=%2B62" .$_POST['Nomor_CS'] . "&text=" . $format_whatsapp_message;


    echo json_encode(array("message" => "Pesan berhasil dikirim.", "status" => "success", "url" => $url));

} else {
    echo json_encode(array("message" => "Pesan berhasil dikirim.", "status" => "success", "url" => ""));
}

exit();
?>
