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

replaceHash()

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

lenisSetup()

$(window).scroll(function () {
    var sticky = $('#header'),
        scroll = $(window).scrollTop();
    if (scroll >= 100) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
});

let ip, ip_value;

function setButtonURL() {
    $zopim.livechat.window.toggle()
}
$(function () {
        $(".search").click(function () {
            $(this).parent().toggleClass("open-search")
        })
    }), $(window).scroll(function () {
        // $(window).scrollTop() >= 200 ? ($("header").addClass("sticky-header"), $(".floatbutton").addClass("sticky-floatbutton")) : ($("header").removeClass("sticky-header"), $(".floatbutton").removeClass("sticky-floatbutton"))
    }),
    function (e) {
        e(window).on("load", function () {
            e(".price-box .listscroll").mCustomScrollbar(), e(".subscription-list").mCustomScrollbar()
        })
    }(jQuery), $(document).ready(function () {
        $(".multiple-testi").owlCarousel({
            loop: !0,
            margin: 0,
            items: 2,
            dots: !1,
            responsiveClass: !0,
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1,
                    nav: !0
                },
                600: {
                    items: 1,
                    nav: !1
                },
                1000: {
                    items: 2,
                    nav: !0,
                    loop: !1
                }
            }
        })
    }), $("#phone-country,#phone-coun").intlTelInput({
        geoIpLookup: function (e) {
            $.get("https://ipinfo.io", function () {}, "jsonp").always(function (t) {
                var n = t && t.country ? t.country : "";
                e(n), ip = t.ip
            })
        },
        initialCountry: "auto",
        nationalMode: !0,
        separateDialCode: !0
    }), setTimeout(function () {
        $('input[name="cip"]').val(ip), $('input[name="pc"]').val($(".selected-dial-code").text()), $('input[name="ctry"]').val($(".country-list .country.active .country-name").text())
    }, 3e3), $("body").delegate(".country", "click", function () {
        $('input[name="pc"]').val($(this).find(".dial-code").text())
    }), $("body").delegate(".country", "click", function () {
        $('input[name="pc"]').val($(this).find(".dial-code").text());
        var e = $(".selected-flag").attr("title").toUpperCase().split(":", 1)[0];
        $('input[name="ctry"]').val(e)
    }), $(".clickbutton").click(function () {
        $(".floatbutton").toggleClass("active")
    }), $(document).ready(function () {
        jQuery.validator.addMethod("lettersonly", function (e, t) {
            return this.optional(t) || /^[a-zA-Z\s]+$/i.test(e)
        }, "Invalid Value"), 
        // $(".form_submission").each(function () {
        //     $(this).validate({
        //         rules: {
        //             name: {
        //                 required: !0,
        //                 lettersonly: !0
        //             },
        //             email: {
        //                 email: !0,
        //                 required: !0
        //             },
        //             phone: {
        //                 required: !0
        //             },
        //             msg: {
        //                 required: !0
        //             }
        //         },
        //         submitHandler: function (e) {
        //             var t = {},
        //                 n = $(e).find("[data-name]");
        //             if (0 != n.length)
        //                 for (var i = 0; i < n.length; i++) t[$(n[i]).attr("data-name")] = $(n[i]).val();
        //             $(e).find(".loader").show();
        //             var a = $(e).find('[name="name"]').val(),
        //                 o = $(e).find('[name="email"]').val(),
        //                 l = $(e).find('[name="phone"]').val(),
        //                 r = $(e).find('[name="msg"]').val(),
        //                 s = $(e).find('[name="locationURL"]').val();
        //                 // c = $(e).find('[name="domain"]').val(),
        //                 // u = $(e).find('[name="subject"]').val();
        //             $.ajax({
        //                 type: "POST",
        //                 url: "email.php?action=form_submission",
        //                 dataType: "json",
        //                 data: {
        //                     name: a,
        //                     email: o,
        //                     phone: l,
        //                     msg: r,
        //                     locationURL: s,
        //                     // domain: c,
        //                     // subject: u,
        //                     optional: t
        //                 },
        //                 success: function (t) {
        //                     window.location.href = "/thankyou.php?name=" + a.replace(/\s+/g, '-') + "&email=" + o + "&phone=" + l;
        //                     console.log(t), t.response ? ($(e).trigger("reset"), $(e).find([type = "submit"]).hide(), $(e).find(".success").html("<p>Thank you for filling out your information!</p>"), $(e).find(".success").show()) : $(e).find(".error").html("Error Occurred"), $(e).find(".loader").hide()
        //                 },
        //                 error: function (t, n, i) {
        //                     $(e).find(".error").html("Error Occurred " + i), $(e).find(".loader").hide()
        //                 }
        //             })
        //         }
        //     })
        // })
        $(".form_submission").each(function () {
            $(this).validate({
                rules: {
                    name: {
                        required: true,
                        lettersonly: true
                    },
                    email: {
                        email: true,
                        required: true
                    },
                    phone: {
                        required: true
                    },
                    msg: {
                        required: true
                    }
                },
                submitHandler: function (form) {
                    var optionalFields = {},
                        optionalInputs = $(form).find("[data-name]");
                    
                    if (optionalInputs.length > 0) {
                        for (var i = 0; i < optionalInputs.length; i++) {
                            optionalFields[$(optionalInputs[i]).attr("data-name")] = $(optionalInputs[i]).val();
                        }
                    }
        
                    $(form).find(".loader").show();
        
                    var name = $(form).find('[name="name"]').val(),
                        email = $(form).find('[name="email"]').val(),
                        phone = $(form).find('[name="phone"]').val(),
                        msg = $(form).find('[name="msg"]').val(),
                        locationURL = $(form).find('[name="locationURL"]').val();
                        // domain = $(form).find('[name="domain"]').val(),
                        // subject = $(form).find('[name="subject"]').val();
        
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
                            // domain: domain,
                            // subject: subject,
                            optional: optionalFields
                        },
                        success: function (response) {
                            if (response.response === 'success') {
                                // Reset form, hide submit button and show success message
                                $(form).trigger("reset");
                                $(form).find('[type="submit"]').hide();
                                $(form).find(".success").html("<p>Thank you for filling out your information!</p>").show();
        
                                // Redirect to thank you page
                                window.location.href = "thankyou.php?name=" + name.replace(/\s+/g, '-') + "&email=" + email + "&phone=" + phone;
                            } else {
                                // Show error message
                                $(form).find(".error").html("Error Occurred").show();
                            }
                            $(form).find(".loader").hide();
                        },
                        error: function (xhr, status, error) {
                            $(form).find(".error").html("Error Occurred: " + error).show();
                            $(form).find(".loader").hide();
                        }
                    });
                }
            });
        });        
    }),
        
    AOS.init({
		duration: 1200,        
		disable: "mobile",
	});

$(function () {
    $('.lazy').lazy({
        effect: "fadeIn",
        effectTime: 1000,
        threshold: 0
    });
});

$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
    $(e.target.hash).find('.lazy').each(function () {
        console.log(this);
        var imageSrc = $(this).attr("data-src");
        $(this).attr("src", imageSrc).removeAttr("data-src");
    });
});

$(window).scroll(function () {
    if ($(window).scrollTop() >= 300) {
        $('.inner-banner-form').addClass('fixed-section');
    } else {
        $('.inner-banner-form').removeClass('fixed-section');
    }
});

$('.techno-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})

let docTitle = document.title;
window.addEventListener("blur", () => {
    document.title = "👋 Hi! Still need a Website?";
})
window.addEventListener("focus", () => {
    document.title = docTitle;
})