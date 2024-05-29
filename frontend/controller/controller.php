<?php
if (isset($_GET['view'])) {
    switch ($_GET['view']) {

        case 'home':
            include "frontend/views/home/index.php";
            break;
        case 'about':
            include "frontend/views/about/index.php";
            break;
        case 'contact':
            include "frontend/views/contact/index.php";
            break;
        case 'services':
            include "frontend/views/services/index.php";
            break;
        case 'service-per-kategori':
            include "frontend/views/services/service-per-kategori.php";
            break;
        case 'service-detail':
            include "frontend/views/services/service-detail.php";
            break;
        case 'testimoni':
            include "frontend/views/testimoni/index.php";
            break;

        default:
            break;
    }
} else {

    include "frontend/views/home/index.php";
}
