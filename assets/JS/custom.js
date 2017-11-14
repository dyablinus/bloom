$(document).ready(function() {
    "use strict";
    $(window).on('scroll', function() {
        var scrollTop = $(window).scrollTop();
        var height = $(window).height();

        $('.welcome-image-area').css({
            'opacity': ((height - scrollTop) / height)
        });
    });
    var bodyheight = $(window).height();
          $("#home,#intro").height(bodyheight);
     $(window).resize(function() {
          var bodyheight = $(window).height();
          $("#home").height(bodyheight);
       }); 
    /*
     * ----------------------------------------------------------------------------------------
     *  CHANGE MENU BACKGROUND JS
     * ----------------------------------------------------------------------------------------
     */

    var headertopoption = $(window);
    var headTop = $('.header-top-area');

    headertopoption.on('scroll', function() {
        if (headertopoption.scrollTop() > 200) {
            headTop.addClass('menu-bg');
        } else {
            headTop.removeClass('menu-bg');
        }
    });

    /*----------------------------------------------
	 -----------Mobile Nav Function  --------------------
	 -------------------------------------------------*/
    var menu_js = $("#menu");
    menu_js.on('click', function() {
        if ($(window).width() <= 767) {
            $('.navigation').slideToggle('normal');
        }
        return false;
    })
    $('.navigation>ul> li >a').on('click', function() {
        if ($(window).width() <= 767) {
            $('.navigation>ul> li').removeClass('on');
            $('.navigation>ul> li> ul').slideUp('normal');
            if ($(this).next().next('ul').is(':hidden') == true) {
                $(this).parent('li').addClass('on');
                $(this).next().next('ul').slideDown('normal');
            }
        }
    });
    
    $('.nav a').on('click', function(){
    	  if ($(window).width() <= 767) {
    $('.btn-navbar').click(); //bootstrap 2.x
    $('.navbar-toggle').click() //bootstrap 3.x by Richard
    }
});
    /*----------------------------------------------
    -----------carousel   --------------------
    -------------------------------------------------*/
    var testimonial_owl = $(".testimonial_owl");
    testimonial_owl.owlCarousel({

        animateIn: 'fadeInRight',
        animateOut: 'zoomOutLeft',
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: true,
        navText: ["<i class='ion-ios-arrow-thin-left'></i>", "<i class='ion-ios-arrow-thin-right'></i>"],
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
    
    /*----------------------------------------------
    -----------Wow js  --------------------
    -------------------------------------------------*/    
	new WOW().init(); 
	/* Youtube video background */
	 if ($("#video").length) {
	var myPlayer = $("#video").YTPlayer();
	}
    /*----------------------------------------------
    	 -----------Counter Function  --------------------
    	 -------------------------------------------------*/
    var counter = $('.counter');
    if (counter.length) {
        $('.counter').appear(function() {
            counter.each(function() {
                var e = $(this),
                    a = e.attr("data-count");
                $({
                    countNum: e.text()
                }).animate({
                    countNum: a
                }, {
                    duration: 8e3,
                    easing: "linear",
                    step: function() {
                        e.text(Math.floor(this.countNum) + "%");
                    },
                    complete: function() {
                        e.text(this.countNum + "%");
                    }
                });
            });
        });
    }
    /*
     * ----------------------------------------------------------------------------------------
     *  SMOTH SCROOL JS
     * ----------------------------------------------------------------------------------------
     */

    $('a.smoth-scroll').on("click", function(e) {
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top - 50
        }, 1000);
        e.preventDefault();
    });
    /*----------------------------------------------
	 -----------Light Function  --------------------
	 -------------------------------------------------*/
    var fLight = $(".fancylight");
    if (fLight.length) {
        fLight.fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic',
            helpers: {
                media: {}
            }
        });
    }
    /*
     * ----------------------------------------------------------------------------------------
     *  PRELOADER JS
     * ----------------------------------------------------------------------------------------
     */

    var prealoaderOption = $(window);
    prealoaderOption.on("load", function() {
        var preloader = jQuery('.loader-wrapper');
        var preloaderArea = jQuery('.preloader-area');
        preloader.fadeOut();
        preloaderArea.delay(350).fadeOut('slow');
    });

    /*----------------------------------------------
	 -----------Masonry Function  --------------------
	 -------------------------------------------------*/
    var container_masonry = $(".container-masonry");
    container_masonry.imagesLoaded(function() {
        container_masonry.isotope({
            itemSelector: '.nf-item',
            transitionDuration: '1s',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-sizer'
            }
        });
    });

    /*----------------------------------------------
     -----------Masonry filter Function  --------------------
     -------------------------------------------------*/
    var container_filter = $(".container-filter");
    container_filter.on("click", ".categories", function() {
        var a = $(this).attr("data-filter");
        container_masonry.isotope({
            filter: a
        });

    });
    /*----------------------------------------------
     -----------Masonry filter Active Function  --------------------
     -------------------------------------------------*/
    container_filter.each(function(e, a) {
        var i = $(a);
        i.on("click", ".categories", function() {
            i.find(".active").removeClass("active"), $(this).addClass("active");
        });
    });
    /*
     * ----------------------------------------------------------------------------------------
     *  TYPE EFFECT JS
     * ----------------------------------------------------------------------------------------
     */

    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 1000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

        var that = this;
        var delta = 150 - Math.random() * 100;

        if (this.isDeleting) {
            delta /= 2;
        }

        if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
        }

        setTimeout(function() {
            that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i = 0; i < elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.02em solid #fff}";
        document.body.appendChild(css);
    };
    /*
     * ----------------------------------------------------------------------------------------
     *  PARALLAX JS
     * ----------------------------------------------------------------------------------------
     */

    var parallaxeffect = $(window);
    parallaxeffect.stellar({
        responsive: true,
        positionProperty: 'position',
        horizontalScrolling: false
    });


});
