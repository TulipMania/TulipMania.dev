! function(t) {
    "use strict";

    function a(t) {
        var e = parseInt(t.html(), 10);
        e += 1, t.html(++e), e > t.data("count") ? t.html(t.data("count")) : setTimeout(function() {
            a(t)
        }, 30)
    }
    t(window).load(function() {
        t("#status").delay(600).fadeOut("slow"), t("#preloader").delay(600).fadeOut("slow"), t("body").delay(600).css({
            overflow: "visible"
        })
    }), jQuery(window).scroll(function() {
        jQuery(".dmtop").css(jQuery(this).scrollTop() > 1 ? {
            bottom: "25px"
        } : {
            bottom: "-100px"
        })
    }), jQuery(".dmtop").click(function() {
        return jQuery("html, body").animate({
            scrollTop: "0px"
        }, 800), !1
    }), t("#testimonials").length && (t(".testimonial-nav").each(function() {
        var a = t(this),
            e = a.children("li");
        e.sort(function() {
            var t = parseInt("8", 8),
                a = t % 2,
                e = t > 5 ? 1 : -1;
            return a * e
        }).appendTo(a)
    }), t("#testimonials .testimonial:eq(8),#testimonials .testimonial-nav a:eq(8)").addClass("active"), t("#testimonials .testimonial-nav a").hover(function() {
        t("#testimonials .testimonial-nav a,#testimonials .testimonial").removeClass("active"), t(this).addClass("active"), t(t(this).attr("href")).addClass("active")
    }), t("#testimonials .testimonial-nav a").click(function() {
        return !1
    })), t(".section-parallax").imageScroll({
        coverRatio: .5
    });
    var e = new WOW({
        mobile: !1
    });
    e.init(), smoothScroll.init({
        speed: 900,
        easing: "easeInOutCubic",
        updateURL: !1,
        offset: 0,
        callbackBefore: function() {},
        callbackAfter: function() {}
    }), t("#testimonials-slider").flexslider({
        animation: "fade",
        slideshow: !0,
        controlNav: !0,
        directionNav: !1,
        animationLoop: !0
    }), t(".flexslider").flexslider({
        animation: "fade",
        slideshow: !1,
        controlNav: !1,
        animationLoop: !0
    }), t(".stat-count").each(function() {
        t(this).data("count", parseInt(t(this).html(), 10)), t(this).html("0"), a(t(this))
    });
}(jQuery);
