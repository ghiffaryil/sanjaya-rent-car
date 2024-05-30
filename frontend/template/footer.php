<div class="footer pt-5">
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
                    <a href="index.php">Beranda</a>
                    <a href="?view=about">Tentang Kami</a>
                    <a href="?view=services">Layanan</a>
                    <a href="?view=contact">Kontak</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-newsletter">
                    <h2>Newsletter</h2>
                    <small>Daftarkan diri anda untuk mendapat informasi terbaru dari kami</small>
                    <form id="newsletterForm" class="mt-2">
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

            if (inputNama == '' || inputEmail == '') {
                alert('Harap lengkapi data!')
            } else {
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
            }
        });
    });
</script>