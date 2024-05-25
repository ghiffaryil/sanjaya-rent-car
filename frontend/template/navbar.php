<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="index.php" class="nav-item nav-link active">Beranda</a>
                    <a href="?view=about" class="nav-item nav-link">Tentang Kami</a>
                    <div class="nav-item dropdown">
                        <a href="?view=services" class="nav-link dropdown-toggle" data-toggle="dropdown">Layanan</a>
                        <div class="dropdown-menu">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="single.html" class="dropdown-item">Detail Page</a>
                            <a href="team.html" class="dropdown-item">Team Member</a>
                            <a href="booking.html" class="dropdown-item">Schedule Booking</a>
                        </div>
                    </div>
                    <a href="?view=contact" class="nav-item nav-link">Kontak</a>
                </div>
                <div class="ml-auto">
                    <a class="btn btn-custom" href="http://wa.me/<?php echo $data_website['Nomor_CS']?>">Hubungi Kami</a>
                </div>
            </div>
        </nav>
    </div>
</div>