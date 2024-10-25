<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-3">
                <div class="footer-info">
                    <a href="/" class="footerLogo">                        
                        <img data-src="images/Cube-images/headerlogo.png" alt="Footer Logo" class="img-fluid lazy">
                    </a>
                    <p>We produce high quality code by following best practices laid out by industry giants and
                        staying up to date on the latest evolution in technology frameworks.</p>
                    <!-- <a class="widget"
                        href="javascript:void(0)">
                        <img style="height: 150px; width: 150px;"
                            src="https://cdn.thumbtackstatic.com/fe-assets-web/media/pages/profile/standard-widgets/pro-svg/orange/2022.svg" />
                        <script
                            src="https://www.thumbtack.com/profile/widgets/scripts/?service_pk=461801698898403334&widget_id=profile">
                        </script>
                    </a> -->
                </div>
            </div>
            <div class="col-md-7 col-lg-5">
                <div class="footer-links">
                    <h6>Service</h6>
                    <div class="footer-links-ul">
                        <ul>
                            <li><a href="logo-design">Logo Design</a></li>
                            <li><a href="website-design-development">Website Design & Development</a></li>
                            <li><a href="wordpress-development">Wordpress Development</a></li>
                            <li><a href="ecommerce-solutions">Ecommerce Solutions</a></li>
                            <li><a href="web-application-development">Web Application Development</a></li>
                        </ul>
                        <ul>
                            <li><a href="mobile-app-development">Mobile App Development</a></li>
                            <li><a href="branding">Branding</a></li>
                            <li><a href="video-animation">Video Animation</a></li>
                            <li><a href="search-engine-optimization">Search Engine Optimization</a></li>
                            <li><a href="web-content-writing">Web Content Writing</a></li>
                            <li><a href="social-media-marketing">Social Media Marketing</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md col-lg col-sm-6">
                <div class="footer-links full-option">
                    <h6>Company</h6>
                    <ul>
                        <li><a href="about">About Us</a></li>
                        <!-- <li><a href="packages">Packages</a></li>
                        <li><a href="combo-package">Combo Packages</a></li> -->
                        <li><a href="contact">Contact us</a></li>
                        <li><a href="privacy">Privacy Policy</a></li>
                        <li><a href="terms-condition">Terms & Condition</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md col-lg col-sm-6">
                <div class="footer-links full-option">
                    <h6>About</h6>
                    <ul>
                        <li><a href="mailto:info@theweboclock.com">info@theweboclock.com</a>
                        <li><a href="tel:+18044606259">+1 (804) 460-6259</a>
                        <li><a href="https://maps.app.goo.gl/D4savQncSooZBZpH6" target="_blank">5 S 1st St, Richmond, VA 23219, United States</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <p class="copyright-text text-left">© The Web O’Clock . All Rights Reserved.

                </div>
                <div class="col-md-6 col-sm-6">
                    <p class="copyright-text text-right">Privacy | Terms of Use</span></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Modal -->
<div class="modal fade" id="customQuote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Fill out this brief form to get your <span>DISCOUNT RESERVED</span></h5>
            </div>
            <div class="modal-body">
                <div class="banform">
                    <div class="ban-form popup-form">
                        <form class="cmxform form_submission" id="popupform" method="POST">
                            <!-- Custom Fields -->
                            <input type="hidden" id="location" name="locationURL" value="https://theweboclock.com/">
                            <script type="text/javascript">
                                document.getElementById('location').value = window.location.href;
                            </script>                    
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input id="popusername" name="name" minlength="2" type="text"
                                            placeholder="Enter your name *" required />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input id="popcemail" type="email" name="email" placeholder="Enter email here *"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <input id="phone-coun" name="phone" type="text" placeholder="Phone Number *"
                                            maxlength="10" required />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <textarea name="msg" id="" rows="7" placeholder="Talk About Your Project"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="fldset">
                                        <button class="themeBtn btn btnTheme" type="submit">Connect With Us</button>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="error mt-3 alert alert-danger text-left mb-0" style="display: none">
                                    </div>
                                    <div class="success mt-3 alert alert-success text-left mb-0" style="display: none">
                                    </div>
                                    <div class="loader" style="display: none">
                                        <img alt="loader" src="images/loader.gif">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<?php include 'include/js.php'; ?>

</html>