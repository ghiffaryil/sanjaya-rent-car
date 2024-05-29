<div class="container-xxl service py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="mb-5">Explore Our Services</h1>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="nav w-100 nav-pills mr-4">
                    <button onclick="changeTab(0)" class="btn btn-info w-100 p-4 mb-4" type="button">
                        <h4 class="m-0 text-white">Diagnostic Test</h4>
                    </button>
                    <button onclick="changeTab(1)" class="btn btn-info w-100 p-4 mb-4" type="button">
                        <h4 class="m-0 text-white">Engine Servicing</h4>
                    </button>
                    <button onclick="changeTab(2)" class="btn btn-info w-100 p-4 mb-4" type="button">
                        <h4 class="m-0 text-white">Tires Replacement</h4>
                    </button>
                    <button onclick="changeTab(3)" class="btn btn-info w-100 p-4 mb-0" type="button">
                        <h4 class="m-0 text-white">Oil Changing</h4>
                    </button>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="tab-content w-100">
                    <div class="tab-pane fade show active" id="tab0">
                        <!-- Your Tab 1 Content Here -->
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="dashboard/media/pelayanan/cover/2e02981eb0774e8331fe1dde9f776925_2_Foto.jpg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">15 Years Of Experience In Auto Servicing</h3>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                <p><i class="fa fa-check text-info mr-3"></i>Quality Servicing</p>
                                <p><i class="fa fa-check text-info mr-3"></i>Expert Workers</p>
                                <p><i class="fa fa-check text-info mr-3"></i>Modern Equipment</p>
                                <a href="" class="btn btn-danger py-3 px-5 mt-3">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab1">
                        <!-- Your Tab 2 Content Here -->
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="dashboard/media/pelayanan/cover/2e02981eb0774e8331fe1dde9f776925_2_Foto.jpg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">2</h3>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                <p><i class="fa fa-check text-info mr-3"></i>Quality Servicing</p>
                                <p><i class="fa fa-check text-info mr-3"></i>Expert Workers</p>
                                <p><i class="fa fa-check text-info mr-3"></i>Modern Equipment</p>
                                <a href="" class="btn btn-danger py-3 px-5 mt-3">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        <!-- Your Tab 3 Content Here -->
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="dashboard/media/pelayanan/cover/2e02981eb0774e8331fe1dde9f776925_2_Foto.jpg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">3</h3>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                <p><i class="fa fa-check text-info mr-3"></i>Quality Servicing</p>
                                <p><i class="fa fa-check text-info mr-3"></i>Expert Workers</p>
                                <p><i class="fa fa-check text-info mr-3"></i>Modern Equipment</p>
                                <a href="" class="btn btn-danger py-3 px-5 mt-3">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab3">
                        <div class="row g-4">
                            <div class="col-md-6" style="min-height: 350px;">
                                <div class="position-relative h-100">
                                    <img class="position-absolute img-fluid w-100 h-100" src="dashboard/media/pelayanan/cover/2e02981eb0774e8331fe1dde9f776925_2_Foto.jpg" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="mb-3">4</h3>
                                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                <p><i class="fa fa-check text-info mr-3"></i>Quality Servicing</p>
                                <p><i class="fa fa-check text-info mr-3"></i>Expert Workers</p>
                                <p><i class="fa fa-check text-info mr-3"></i>Modern Equipment</p>
                                <a href="" class="btn btn-danger py-3 px-5 mt-3">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function changeTab(tabIndex) {
        // Hide all tab panes
        var tabPanes = document.querySelectorAll('.tab-pane');
        tabPanes.forEach(function(tabPane) {
            tabPane.classList.remove('show', 'active');
        });

        // Show the selected tab pane
        var selectedTabPane = document.getElementById('tab' + tabIndex);
        selectedTabPane.classList.add('show', 'active');

        // Change the color of the button
        var buttons = document.querySelectorAll('.nav-pills button');
        buttons.forEach(function(button, index) {
            if (index === tabIndex) {
                button.classList.remove('btn-info');
                button.classList.add('btn-orange');
            } else {
                button.classList.remove('btn-orange');
                button.classList.add('btn-info');
            }
        });
    }


    document.addEventListener('DOMContentLoaded', function() {
        changeTab(0);
    });
</script>