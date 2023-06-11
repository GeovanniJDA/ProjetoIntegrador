(function ($) {
    "use strict";

    // Header Type = Fixed
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var box = $(".header-text").height();
        var header = $("header").height();

        if (scroll >= box - header) {
            $("header").addClass("background-header");
        } else {
            $("header").removeClass("background-header");
        }
    });

    $(".loop").owlCarousel({
        center: true,
        items: 1,
        loop: true,
        autoplay: true,
        nav: true,
        margin: 0,
        responsive: {
            1200: {
                items: 5,
            },
            992: {
                items: 3,
            },
            760: {
                items: 2,
            },
        },
    });

    $("#modal_trigger").leanModal({
        top: 100,
        overlay: 0.6,
        closeButton: ".modal_close",
    });

    $(function () {
        // Calling Login Form
        $("#login_form").click(function () {
            $(".social_login").hide();
            return false;
        });

        // Calling Register Form
        $("#register_form").click(function () {
            $(".social_login").hide();
            $(".user_register").show();
            $(".header_title").text("Registro da Vitima");
            return false;
        });

        $("#register_form_agente_publico").click(function () {
            $(".user_register").hide();
            $(".agente_publico_register").show();
            $(".header_title").text("Cadastro do Agente Publico");
            return false;
        });

        // Going back to Social Forms
        $(".back_btn").click(function () {
            $(".header_title").text("Login");
            $(".social_login").show();
            $(".user_register").hide();
            $(".agente_publico_register").hide();
            $(".agente_publico_endereco").hide();
            return false;
        });

        $(".back_btn1").click(function () {
            $(".header_title").text("Cadastro do Agente Publico");
            $(".agente_publico_register").show();
            $(".agente_publico_endereco").hide();
            return false;
        });

        $(".advance_btn").click(function () {
            $(".header_title").text("Cadastro do Agente Publico");
            $(".agente_publico_endereco").show();
            $(".agente_publico_register").hide();
            return false;
        });
    });

    // const tel = document.getElementById("tel"); // Seletor do campo de telefone

    // tel.addEventListener("keypress", (e) => mascaraTelefone(e.target.value)); // Dispara quando digitado no campo
    // tel.addEventListener("change", (e) => mascaraTelefone(e.target.value)); // Dispara quando autocompletado o campo

    // const mascaraTelefone = (valor) => {
    //     valor = valor.replace(/\D/g, "");
    //     valor = valor.replace(/^(\d{2})(\d)/g, "($1) $2");
    //     valor = valor.replace(/(\d)(\d{4})$/, "$1-$2");
    //     tel.value = valor; // Insere o(s) valor(es) no campo
    // };

    // Acc
    $(document).on("click", ".naccs .menu div", function () {
        var numberIndex = $(this).index();

        if (!$(this).is("active")) {
            $(".naccs .menu div").removeClass("active");
            $(".naccs ul li").removeClass("active");

            $(this).addClass("active");
            $(".naccs ul")
                .find("li:eq(" + numberIndex + ")")
                .addClass("active");

            var listItemHeight = $(".naccs ul")
                .find("li:eq(" + numberIndex + ")")
                .innerHeight();
            $(".naccs ul").height(listItemHeight + "px");
        }
    });

    // Menu Dropdown Toggle
    if ($(".menu-trigger").length) {
        $(".menu-trigger").on("click", function () {
            $(this).toggleClass("active");
            $(".header-area .nav").slideToggle(200);
        });
    }

    // Menu elevator animation
    $(".scroll-to-section a[href*=\\#]:not([href=\\#])").on(
        "click",
        function () {
            if (
                location.pathname.replace(/^\//, "") ==
                    this.pathname.replace(/^\//, "") &&
                location.hostname == this.hostname
            ) {
                var target = $(this.hash);
                target = target.length
                    ? target
                    : $("[name=" + this.hash.slice(1) + "]");
                if (target.length) {
                    var width = $(window).width();
                    if (width < 991) {
                        $(".menu-trigger").removeClass("active");
                        $(".header-area .nav").slideUp(200);
                    }
                    $("html,body").animate(
                        {
                            scrollTop: target.offset().top + 1,
                        },
                        700
                    );
                    return false;
                }
            }
        }
    );

    $(document).ready(function () {
        $(document).on("scroll", onScroll);

        //smoothscroll
        $('.scroll-to-section a[href^="#"]').on("click", function (e) {
            e.preventDefault();
            $(document).off("scroll");

            $(".scroll-to-section a").each(function () {
                $(this).removeClass("active");
            });
            $(this).addClass("active");

            var target = this.hash,
                menu = target;
            var target = $(this.hash);
            $("html, body")
                .stop()
                .animate(
                    {
                        scrollTop: target.offset().top + 1,
                    },
                    500,
                    "swing",
                    function () {
                        window.location.hash = target;
                        $(document).on("scroll", onScroll);
                    }
                );
        });
    });

    function onScroll(event) {
        var scrollPos = $(document).scrollTop();
        $(".nav a").each(function () {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (
                refElement.position().top <= scrollPos &&
                refElement.position().top + refElement.height() > scrollPos
            ) {
                $(".nav ul li a").removeClass("active");
                currLink.addClass("active");
            } else {
                currLink.removeClass("active");
            }
        });
    }

    // Acc
    $(document).on("click", ".naccs .menu div", function () {
        var numberIndex = $(this).index();

        if (!$(this).is("active")) {
            $(".naccs .menu div").removeClass("active");
            $(".naccs ul li").removeClass("active");

            $(this).addClass("active");
            $(".naccs ul")
                .find("li:eq(" + numberIndex + ")")
                .addClass("active");

            var listItemHeight = $(".naccs ul")
                .find("li:eq(" + numberIndex + ")")
                .innerHeight();
            $(".naccs ul").height(listItemHeight + "px");
        }
    });

    // Page loading animation
    $(window).on("load", function () {
        $("#js-preloader").addClass("loaded");
    });

    // Window Resize Mobile Menu Fix
    function mobileNav() {
        var width = $(window).width();
        $(".submenu").on("click", function () {
            if (width < 767) {
                $(".submenu ul").removeClass("active");
                $(this).find("ul").toggleClass("active");
            }
        });
    }
})(window.jQuery);

