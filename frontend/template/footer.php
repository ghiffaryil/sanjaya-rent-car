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
                    <a href="">Tentang Kami</a>
                    <a href="">Layanan</a>
                    <a href="">Kontak</a>
                    <a href="">Testimoni</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="footer-newsletter">
                    <h2>Newsletter</h2>
                    <form method="POST">
                        <input class="form-control" placeholder="Full Name" required>
                        <input class="form-control" placeholder="Email" required>
                        <button type="submit" name="submit_add_newsletter" class="btn btn-custom">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <p>Copyright &copy; <a href="#">Sanjaya Rental Mobil</a> 2024, All Right Reserved </p>
    </div>
</div>