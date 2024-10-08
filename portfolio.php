<!-- Header -->
<?php $title = "TheWebOClock | Creative Digital Portfolio for Innovative Solutions";
$desc = "Explore TheWebOClock portfolio showcasing innovative digital solutions, web design, and creative strategies that elevate brands with cutting-edge technology and vision.";
include 'include/header.php'; ?>

<main class="main-wrapper">
    <!-- innerBannerSec -->
    <section class="bannerSec innerBannerSec packageBannerSec">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7">
                    <h1 class="section-heading gradient-heading">Portfolio</h1>
                    <p>The Web O’Clock is digital consultancy helping brands expand and grow with design-oriented
                        solutions. With the perfect blend of concept and strategy, we offer our clients the creativity
                        they need to stand out.</p>
                    <!-- banner-form -->
                    <?php include 'include/banner-form.php'; ?>
                </div>
                <div class="col-lg-5 col-md-4">
                    <div class="banner-right">
                        <img data-src="images/portfolio.png" alt="portfolio" class="img-fluid lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dedicated -->
    <?php include 'include/dedicated.php'; ?>
    <!-- portfolio pricing -->
    <section class="portfolio pricing">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="section-heading  text-center">Logos, websites,<span> book covers & more!</span></h2>
                    <p class="paragraph">
                        The Web O’Clock is a fully functional digital consultancy that holds the experience to
                        offer its customers solutions meeting all their needs.
                    </p>
                </div>
            </div>
        </div>
        <?php include 'include/portfolio.php'; ?>
    </section>
    <!-- testimonials -->
    <?php include 'include/testimonials.php'; ?>
    <!-- connected -->
    <?php include 'include/connected.php'; ?>
</main>

<!-- Footer -->
<?php include 'include/footer.php'; ?>