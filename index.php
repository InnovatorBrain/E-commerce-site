
<!-- Bellow our slide baar section -->



<?php
$active = "Home";
include("functions.php");
include("header.php");

?>

<section class="hero-section">
    <div class="hero-items owl-carousel">

        <?php

        $get_slides = "select * from slider LIMIT 0,1";
        $run_slider = mysqli_query($con, $get_slides);

        while ($row_slides = mysqli_fetch_array($run_slider)) {

            $slide_name = $row_slides['slide_name'];
            $slide_image = $row_slides['slide_image'];
            $slide_heading = $row_slides['slide_heading'];
            $slide_text = $row_slides['slide_text'];

            echo "

            <div class='single-hero-items set-bg' data-setbg='img/$slide_image'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-5'>
                            <h1>$slide_heading</h1>
                            <p>$slide_text
                            </p>
                            <a href='shop.php' class='primary-btn'>Shop Now</a>
                        </div>
                    </div>
                    <div class='off-card'>
                        <h2>Up to <span>60%</span></h2>
                    </div>  
                </div>
            </div>
                ";
        }


        $get_slides = "select * from slider LIMIT 1,2";
        $run_slider = mysqli_query($con, $get_slides);

        while ($row_slides = mysqli_fetch_array($run_slider)) {

            $slide_name = $row_slides['slide_name'];
            $slide_image = $row_slides['slide_image'];
            $slide_heading = $row_slides['slide_heading'];
            $slide_text = $row_slides['slide_text'];

            echo "
            <div class='single-hero-items set-bg' data-setbg='img/$slide_image'>
                <div class='container'>
                    <div class='row'>
                        <div class='col-lg-5'>
                            <h1 style='color: white;'>$slide_heading</h1>
                            <p style='color: white;'>$slide_text
                            </p>
                            <a href='shop.php' class='primary-btn'>Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>";
        }

        ?>

    </div>
</section>

<!-- Banner Section Begin -->

<div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <a href='shop.php?cat_id=1'>
                    <div class="single-banner">
                        <img src="img/banner-1.png" alt="men">
                        <div class="inner-text">
                            <h4>Men’s</h4>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href='shop.php?cat_id=2'>
                    <div class="single-banner">
                        <img src="img/banner-2.png" alt="womens">
                        <div class="inner-text">
                            <h4>Women’s</h4>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-lg-4">
                <a href='shop.php?cat_id=3'>
                    <div class="single-banner">
                        <img src="img/banner-3.png" alt="kids">
                        <div class="inner-text">
                            <h4>Kid’s</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<!-- Women Banner Section Begin -->

<section class="women-banner spad">
    <div class="container-fluid">
        <div class="row">
            <!-- <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="img/women-large.jpg">
                    <h2>Women’s</h2>
                    <a href="shop.php?cat_id=2">Discover More</a>
                </div>
            </div> -->

            <div class="col-lg-10 offset-lg-1">
                <div class="filter-control">
                    <h3> Women's Collection </h3>

                </div>

                <div class="product-slider owl-carousel">

                    <?php
                    getWProduct();
                    ?>
                </div>

            </div>

        </div>
    </div>
</section>


<!-- Man Banner Section Begin -->

<section class="man-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <h3> New Products </h3>
                </div>
                <div class="product-slider owl-carousel">
                    <?php
                    getMProduct();
                    ?>

                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg m-large" data-setbg="img/men-large.jpg">
                    <h2>Men’s</h2>
                    <a href="shop.php?cat_id=1">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<center>
<div class="col col-md-12 col-lg-12"> 
<section class="brand section" style="margin-top: 40px;">
    <h4 class="section__title" style="margin-top: -50px !important;">
        Brands We Sell
    </h4>


    <div class="brand__container container grid" style="column-gap: 1.25rem; margin-top: 40px; margin-bottom:40px">
        <img src="img/logo1.png" alt="logo image" class="brand__img" style=" width: 150px;" style="margin-right: 1.25rem;">
        <img src="img/logo2.png" alt="logo image" class="brand__img" style=" width: 150px;" style="column-gap: 1.25rem;">
        <img src="img/logo3.png" alt="logo image" class="brand__img" style=" width: 150px;" style="column-gap: 1.25rem;">
        <img src="img/logo4.png" alt="logo image" class="brand__img" style=" width: 150px;" style="column-gap: 1.25rem;">
    </div>
</section>
</div>
</center>


<!-- Footer -->

<?php
include('footer.php');


if (isset($_GET['stat'])) {

    echo "
        <script>
                bootbox.alert({
                    message: 'Welcome! You are logged in.',
                    backdrop: true
                });
        </script>";
}
?>

</body>

</html>