
<!DOCTYPE html>
<html lang="en">

<?php
$this->load->view("css.php")
?>


<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <?php
    $this->load->view("menu_header.php")
    ?>
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Tentang Kami</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                <li class="breadcrumb-item"><a href="#">Tentang Kami</a></li>
            </ol>
        </div>
    </div>
    <!-- Abvout Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">Tentang Kami</h4>
                        <p class="mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cum velit temporibus
                            repudiandae ipsa, eaque perspiciatis cumque incidunt tenetur sequi reiciendis.
                        </p>

                    </div>
                </div>

            </div>
        </div>
    </div>




    <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <?php
    $this->load->view("js.php")
    ?>
</body>

</html>
