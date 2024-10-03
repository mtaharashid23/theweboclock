function replaceHash() {
    document.querySelectorAll("a").forEach((a) => {
        let href = a.getAttribute("href");
        a.href = href ?
            href.startsWith("#") && href.endsWith("#") ?
            href.replace("#", "javascript:void(0)") :
            href :
            "javascript:void(0)";
    });
}

function lenisSetup() {
    const lenis = new Lenis({
        duration: 1.5,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smooth: true,
        mouseMultiplier: 1,
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            lenis.scrollTo(this.getAttribute("href"));
        });
    });

    lenis.scrollTo("top");
}

function stickyHeader() {
    window.addEventListener("scroll", function () {
        var header = document.getElementById('header');
        var scroll = window.scrollY;
        if (scroll >= 100) header.classList.add('fixed');
        else header.classList.remove('fixed');
    });
}

function setButtonURL() {
    $zopim.livechat.window.toggle();
}

function searchToggle() {
    document.querySelectorAll(".search").forEach((searchBtn) => {
        searchBtn.addEventListener("click", function () {
            this.parentNode.classList.toggle("open-search");
        });
    });
}

function setupCustomScroll() {
    window.addEventListener("load", function () {
        $(".price-box .listscroll").mCustomScrollbar();
        $(".subscription-list").mCustomScrollbar();
    });
}

function initializeCarousel() {
    const owlCarouselElements = document.querySelectorAll(".multiple-testi");
    owlCarouselElements.forEach((carousel) => {
        $(carousel).owlCarousel({
            loop: true,
            margin: 0,
            items: 2,
            dots: false,
            responsiveClass: true,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 1,
                    nav: false
                },
                1000: {
                    items: 2,
                    nav: true,
                    loop: false
                }
            }
        });
    });
}

function setupPhoneInput() {
    $("#phone-country,#phone-coun").intlTelInput({
        geoIpLookup: function (callback) {
            $.get("https://ipinfo.io", function () {}, "jsonp").always(function (response) {
                var country = response && response.country ? response.country : "";
                callback(country);
                ip = response.ip;
            });
        },
        initialCountry: "auto",
        nationalMode: true,
        separateDialCode: true
    });

    // Ensure elements exist before trying to set their values
    setTimeout(function () {
        const cipInput = document.querySelector('input[name="cip"]');
        const pcInput = document.querySelector('input[name="pc"]');
        const ctryInput = document.querySelector('input[name="ctry"]');

        const dialCodeElement = document.querySelector(".selected-dial-code");
        const countryNameElement = document.querySelector(".country-list .country.active .country-name");

        // Only set the value if the elements exist
        if (cipInput && ip) cipInput.value = ip;
        if (pcInput && dialCodeElement) pcInput.value = dialCodeElement.textContent;
        if (ctryInput && countryNameElement) ctryInput.value = countryNameElement.textContent;
    }, 3000);

    // Ensure the click handler only runs if elements are present
    document.querySelectorAll(".country").forEach((country) => {
        country.addEventListener("click", function () {
            const pcInput = document.querySelector('input[name="pc"]');
            const ctryInput = document.querySelector('input[name="ctry"]');
            const dialCode = this.querySelector(".dial-code");
            const selectedFlag = document.querySelector(".selected-flag");

            if (pcInput && dialCode) pcInput.value = dialCode.textContent;
            if (ctryInput && selectedFlag) {
                const countryName = selectedFlag.getAttribute("title").toUpperCase().split(":", 1)[0];
                ctryInput.value = countryName;
            }
        });
    });
}

function formSubmissionHandler() {
    document.querySelectorAll(".form_submission").forEach((form) => {
        $(form).validate({
            rules: {
                name: {
                    required: true,
                    // lettersonly: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true
                },
                msg: {
                    required: true
                }
            },
            // Use jQuery's submitHandler
            submitHandler: function (form) {
                var optionalFields = {};
                var optionalInputs = form.querySelectorAll("[data-name]");

                optionalInputs.forEach(input => {
                    optionalFields[input.getAttribute("data-name")] = input.value;
                });

                // Show loader
                form.querySelector(".loader").style.display = "block";

                // Gather form data
                var name = form.querySelector('[name="name"]').value;
                var email = form.querySelector('[name="email"]').value;
                var phone = form.querySelector('[name="phone"]').value;
                var msg = form.querySelector('[name="msg"]').value;

                // Ensure locationURL exists before accessing its value
                var locationURL = form.querySelector('[name="locationURL"]') ?
                    form.querySelector('[name="locationURL"]').value :
                    '';

                // AJAX request to submit form data
                $.ajax({
                    type: "POST",
                    url: "email.php?action=form_submission",
                    dataType: "json",
                    data: {
                        name: name,
                        email: email,
                        phone: phone,
                        msg: msg,
                        locationURL: locationURL,
                        optional: optionalFields
                    },
                    success: function (response) {
                        if (response.response === 'success') {
                            // Reset form on success
                            form.reset();
                            form.querySelector('[type="submit"]').style.display = 'none';
                            form.querySelector(".success").innerHTML = "<p>Thank you for filling out your information!</p>";
                            form.querySelector(".success").style.display = "block";

                            // Redirect to thank you page
                            // window.location.href = "thankyou.php?name=" + name.replace(/\s+/g, '-') + "&email=" + email + "&phone=" + phone;
                            window.location.href = "https://theweboclock.com/thankyou";
                        } else {
                            // Show error if response is not 'success'
                            form.querySelector(".error").innerHTML = "Error Occurred";
                            form.querySelector(".error").style.display = "block";
                        }
                        form.querySelector(".loader").style.display = "none";
                    },
                    error: function (xhr, status, error) {
                        // Handle AJAX error
                        form.querySelector(".error").innerHTML = "Error Occurred: " + error;
                        form.querySelector(".error").style.display = "block";
                        form.querySelector(".loader").style.display = "none";
                    }
                });
            }
        });
    });
}

function setupLazyLoading() {
    document.querySelectorAll(".lazy").forEach((lazyImage) => {
        lazyImageObserver.observe(lazyImage);
    });
}
const lazyImageObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            const lazyImage = entry.target;
            lazyImage.src = lazyImage.dataset.src;
            lazyImage.classList.remove("lazy");
            lazyImageObserver.unobserve(lazyImage);
        }
    });
});

function titleChangeOnFocusBlur() {
    const originalTitle = document.title;
    window.addEventListener("blur", () => {
        document.title = "👋 Hi! Still need a Website?";
    });
    window.addEventListener("focus", () => {
        document.title = originalTitle;
    });
}
$(function () {
    replaceHash();
    lenisSetup();
    stickyHeader();
    searchToggle();
    setupCustomScroll();
    initializeCarousel();
    setupPhoneInput();
    formSubmissionHandler();
    setupLazyLoading();
    titleChangeOnFocusBlur();
});