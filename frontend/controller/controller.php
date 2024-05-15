<?php
if (isset($_GET['menu'])) {
    switch ($_GET['menu']) {

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
        case 'services-detail':
            include "frontend/views/services/service-details.php";
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
