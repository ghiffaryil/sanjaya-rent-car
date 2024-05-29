<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="footer-contact">
                    <h2>Get In Touch</h2>
                    <p><i class="fa fa-map-marker-alt"></i><?php echo $data_website['Alamat_Lengkap'] ?></p>
                    <p><i class="fa fa-phone-alt"></i><?php echo $data_website['Nomor_Handphone'] ?></p>
                    <p><i class="fa fa-envelope"></i><?php echo $data_website['Email_Admin'] ?></p>
                    <div class="footer-social">
                        <a target="_blank" class="btn" href="<?php echo $data_website['Url_Facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" class="btn" href="<?php echo $data_website['Url_Instagram'] ?>"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" class="btn" href="<?php echo $data_website['Url_Youtube'] ?>"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-link">
                    <h2>Menu</h2>
                    <a href="?view=about">Tentang Kami</a>
                    <a href="?view=services">Layanan</a>
                    <a href="?view=contact">Kontak</a>
                    <a href="?view=testimonials">Testimoni</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-newsletter">
                    <h2>Newsletter</h2>
                    <form id="newsletterForm">
                        <input id="Nama" class="form-control" placeholder="Full Name" name="Nama" required>
                        <input id="Email" class="form-control" placeholder="Email" name="Email" required>
                        <button type="submit" id="submit_add_newsletter" class="btn btn-custom">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <p>Copyright &copy; <a href="#">Sanjaya Rental Mobil</a> 2024, All Right Reserved </p>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#submit_add_newsletter').on('click', function(e) {
            e.preventDefault();

            var inputNama = $('#Nama').val();
            var inputEmail = $('#Email').val();

            $.ajax({
                type: 'POST',
                url: 'frontend/function/newsletter/add_newsletter.php',
                data: {
                    "Nama": inputNama,
                    "Email": inputEmail
                },
                dataType: 'json',
                success: function(response) {
                    alert(response.message);

                    if (response.status == "success") {
                        var inputNama = $('#Nama').val('');
                        var inputEmail = $('#Email').val('');
                    }
                },
                error: function() {
                    alert('Maaf, terjadi Kesalahan!');
                }
            });
        });
    });
</script>
<?php
// if (isset($_POST['submit_add_newsletter'])) {

//     $search_field_where = array("Status", "Email");
//     $search_criteria_where = array("=", "=");
//     $search_value_where = array("Aktif", "$_POST[Email]");
//     $search_connector_where = array("AND", "");

//     $result = $a_tambah_baca_update_hapus->baca_data_dengan_filter("tb_newsletter", $search_field_where, $search_criteria_where, $search_value_where, $search_connector_where);

//     if ($result['Status'] == "Sukses") {
//         echo "<script>alert('Email anda telah terdaftar');</script>";
//     } else {

//         $form_field = array("Nama", "Email", "Waktu_Simpan_Data", "Status");
//         $form_value = array("$_POST[Nama]", "$_POST[Email]", "$Waktu_Sekarang", "Aktif");

//         $result = $a_tambah_baca_update_hapus->tambah_data("tb_newsletter", $form_field, $form_value);

//         if ($result['Status'] == "Sukses") {
//             echo "<script>alert('Anda telah mendaftar untuk berlangganan');</script>";
//         }
//     }
// }
?>