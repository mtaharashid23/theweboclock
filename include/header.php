<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="VOGbaZ-04OCOUlUpDi8KvH-jkLVLulXe5dIrVooHFz8" />
    <link rel="shortcut icon" type="image/x-icon" href="images/Cube-images/favicon.png" />
    <?php include 'include/css.php'; ?>
    <title><?php echo isset($title) ? $title : 'Home';  ?></title>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->    
    <!-- End Google Tag Manager (noscript) -->
    <!-- header -->
    <header class="" id="header">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark">
                <a class="navbar-brand" href="/">                    
                    <img src="images/Cube-images/headerlogo.png" class="img-fluid light-logo" alt="Logo" />
                    <img src="images/Cube-images/headerlogo.png" class="img-fluid dark-logo" alt="Logo" />
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fas fa-bars"></i>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mx-md-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Services</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="logo-design">Logo Design</a>
                                <a class="dropdown-item" href="website-design-development">Website Design &
                                    Development</a>
                                <a class="dropdown-item" href="wordpress-development">Wordpress Development</a>
                                <a class="dropdown-item" href="ecommerce-solutions">Ecommerce Solutions</a>
                                <a class="dropdown-item" href="web-application-development">Web Application
                                    Development</a>
                                <a class="dropdown-item" href="mobile-app-development">Mobile App
                                    Development</a>
                                <a class="dropdown-item" href="branding">Branding</a>
                                <a class="dropdown-item" href="video-animation">Video Animation</a>
                                <a class="dropdown-item" href="search-engine-optimization">Search Engine
                                    Optimization</a>
                                <a class="dropdown-item" href="web-content-writing">Web Content Writing</a>
                                <a class="dropdown-item" href="social-media-marketing">Social Media
                                    Marketing</a>
                            </div>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="portfolio">Portfolio</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="packages">Packages</a></li>
                        <li class="nav-item"><a class="nav-link" href="combo-package">Combo Packages</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
                    </ul>
                    <ul class="navbar-nav navbar-right ml-md-auto">
                        <li class="nav-item">
                            <a href="tel:+13465023520" class="contactBtn">346-502-3520</a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="themeBtn qouteBtn" data-toggle="modal"
                                data-target="#customQuote"> Custom Quote</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>