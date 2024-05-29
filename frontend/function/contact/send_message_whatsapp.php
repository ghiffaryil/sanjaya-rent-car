// function_send_message_whatsapp.php
<?php
function send_message_whatsapp($data_website, $input_nama, $input_nomor_handphone, $input_pesan) {
    $pesan = $data_website['Pesan_CS'] . ", " . $input_nama . "_" . $input_nomor_handphone . "_" . $input_pesan;
    $normalized_pesan = str_replace(" ", "%20", $pesan);

    $url = "https://api.whatsapp.com/send/?phone=%2B62" . $data_website['Nomor_CS'] . "&text=" . $normalized_pesan;
    echo "<script>window.open('$url', '_blank');</script>";
}
?>
