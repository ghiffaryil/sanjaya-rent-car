<!DOCTYPE html>
<html lang="en">

<?php include "frontend/template/header.php" ?>

<body>
    <!-- Top Bar Start -->
    <?php include "frontend/template/topbar.php" ?>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <?php include "frontend/template/navbar.php" ?>
    <!-- Nav Bar End -->

    <!-- Body Start -->
    <?php include "frontend/controller/controller.php" ?>
    <!-- Body End -->

    <!-- Footer Start -->
    <?php include "frontend/template/footer.php" ?>
    <!-- Footer End -->

    <!-- Back to top button -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- Pre Loader -->
    <div id="loader" class="show">
        <div class="loader"></div>
    </div>

    <!-- Libraries -->
    <?php include "frontend/template/libraries.html" ?>

</body>

</html>