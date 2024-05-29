<style>

.top-bar .logo {
    display: flex;
}
    @media (max-width: 991.98px) {
        .top-bar .logo {
            text-align: center;
            display: block;
        }

        .top-bar .logo-text-main {
            display: none;
        }
    }
</style>


<div class="top-bar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="logo">
                    <img src="frontend/assets/media/logo/logo_main.jpg" alt="Logo" style="width: 50px; height:auto">
                    <a href="index.php" class="ml-4 logo-text-main">
                        <h1>Sanjaya<span>Rental</span></h1>
                        <!-- <img src="frontend/assets/media/logo/logo_main.jpg" alt="Logo"> -->
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 d-none d-lg-block">
                <div class="row">
                    <div class="col-6">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="fa fa-phone-alt"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>No. Handphone</h3>
                                <p><?php echo $data_website['Nomor_Handphone'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="top-bar-item">
                            <div class="top-bar-icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="top-bar-text">
                                <h3>Email</h3>
                                <p><?php echo $data_website['Email_Admin'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>