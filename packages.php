<!-- Header -->
<?php $title = "Packages | The Web O’Clock";
include 'include/header.php'; ?>

<main class="main-wrapper">
    <!-- innerBannerSec -->
    <section class="bannerSec innerBannerSec packageBannerSec">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7">
                    <h1 class="section-heading gradient-heading">Packages</h1>
                    <p>The Web O’Clock is digital consultancy helping brands expand and grow with design-oriented
                        solutions. With the perfect blend of concept and strategy, we offer our clients the creativity
                        they need to stand out.</p>
                    <!-- banner-form -->
                    <?php include 'include/banner-form.php'; ?>
                </div>
                <div class="col-lg-5 col-md-4">
                    <div class="banner-right">
                        <img data-src="images/pacakages.png" alt="pacakages" class="img-fluid lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- dedicated -->
    <?php include 'include/dedicated.php'; ?>
    <!-- pricing -->
    <!-- <section class="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-heading gradient-heading text-center">Our Packages</h2>
                    <p class="text-center">Our expert developers and designers at The Web O’Clock are proficient in
                        creating solutions that are suitable for a better tomorrow for your business. Contact us today
                        to find how more about how we can help your business reach its goals.</p>
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-tabs col-12" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="website-design-development-tab" data-toggle="tab"
                            href="#option-website-design-development" role="tab" aria-controls="website-design-development"
                            aria-selected="true">Website Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="ecommerce-solutions-tab" data-toggle="tab"
                            href="#option-ecommerce-solutions" role="tab" aria-controls="ecommerce-solutions"
                            aria-selected="true">E-Commerce Solution</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="branding-tab" data-toggle="tab" href="#option-branding" role="tab"
                            aria-controls="branding" aria-selected="true">Branding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="video-animation-tab" data-toggle="tab" href="#option-video-animation"
                            role="tab" aria-controls="video-animation" aria-selected="true">Video Animation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="search-engine-optimization-tab" data-toggle="tab"
                            href="#option-search-engine-optimization" role="tab" aria-controls="search-engine-optimization"
                            aria-selected="true">SEO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="web-content-writing-tab" data-toggle="tab"
                            href="#option-web-content-writing" role="tab" aria-controls="web-content-writing"
                            aria-selected="true">Web Content Writing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="logo-design-tab" data-toggle="tab" href="#option-logo-design" role="tab"
                            aria-controls="logo-design" aria-selected="true">Logo Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " id="animated-logo-tab" data-toggle="tab" href="#option-animated-logo"
                            role="tab" aria-controls="animated-logo" aria-selected="true">Animated Logo</a>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade col-12 show active" id="option-website-design-development" role="tabpanel"
                        aria-labelledby="website-design-development-tab">                        
                        <?php include 'include/website-pack.php'; ?>
                    </div>
                    <div class="tab-pane fade col-12 " id="option-ecommerce-solutions" role="tabpanel"
                        aria-labelledby="ecommerce-solutions-tab">                        
                        <?php include 'include/ecommerce-pack.php'; ?>
                    </div>
                    <div class="tab-pane fade col-12 " id="option-branding" role="tabpanel" aria-labelledby="branding-tab">                        
                        <?php include 'include/branding-pack.php'; ?>
                    </div>
                    <div class="tab-pane fade col-12" id="option-video-animation" role="tabpanel"
                        aria-labelledby="video-animation-tab">                        
                        <?php include 'include/video-pack.php'; ?>
                    </div>
                    <div class="tab-pane fade col-12 " id="option-search-engine-optimization" role="tabpanel"
                        aria-labelledby="search-engine-optimization-tab">                        
                        <?php include 'include/seo-pack.php'; ?>
                    </div>
                    <div class="tab-pane fade col-12 " id="option-web-content-writing" role="tabpanel"
                        aria-labelledby="web-content-writing-tab">                        
                        <?php include 'include/web-content-pack.php'; ?>
                    </div>
                    <div class="tab-pane fade col-12 " id="option-logo-design" role="tabpanel"
                        aria-labelledby="logo-design-tab">                        
                        <?php include 'include/logo-pack.php'; ?>
                    </div>
                    <div class="tab-pane fade col-12 " id="option-animated-logo" role="tabpanel"
                        aria-labelledby="animated-logo-tab">                        
                        <?php include 'include/animated-logo-pack.php'; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-circle">
            <img data-src="images/pricing-circle.png" alt="pricing-circle" class="lazy">
        </div>
        <div class="pricing-circle-bottom">
            <img data-src="images/pricing-circle-bottom.png" alt="pricing-circle-bottom" class="lazy">
        </div>
    </section> -->
    <!-- testimonials -->
    <?php include 'include/testimonials.php'; ?>
    <!-- connected -->
    <?php include 'include/connected.php'; ?>
</main>

<!-- Footer -->
<?php include 'include/footer.php'; ?>