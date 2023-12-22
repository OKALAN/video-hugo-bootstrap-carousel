/**
 * Template Name: SKALETEK
 */
document.addEventListener("DOMContentLoaded", () => {
  "use strict";
  console.log("Hello world");
  /**
   * Preloader
   */
  const preloader = document.querySelector("#preloader");
  if (preloader) {
    window.addEventListener("load", () => {
      preloader.remove();
    });
  }

  /** listning accordion event */
  $("#faqlist").on("show.bs.collapse", function (e) {
    $(e.target).closest(".accordion-item").addClass("show");
  });

  $("#faqlist").on("hide.bs.collapse", function (e) {
    $(e.target).closest(".accordion-item").removeClass("show");
  });

  //auto parent height
  $(".bg-abs-ct").each(function () {
    $(this).height($(this).parent().closest("div").height());
  });

  $(".services-item").on("click", function (e) {
    e.stopPropagation();
    e.stopImmediatePropagation();
    window.location.href = $(this).find("a").attr("href");
  });

  /**
   * Sticky header on scroll
   */
  const selectHeader = document.querySelector("#header");
  if (selectHeader) {
    document.addEventListener("scroll", () => {
      window.scrollY > 100
        ? selectHeader.classList.add("sticked")
        : selectHeader.classList.remove("sticked");
    });
  }

  /**
   * Scroll top button
   */
  const scrollTop = document.querySelector(".scroll-top");
  if (scrollTop) {
    const togglescrollTop = function () {
      window.scrollY > 100
        ? scrollTop.classList.add("active")
        : scrollTop.classList.remove("active");
    };
    window.addEventListener("load", togglescrollTop);
    document.addEventListener("scroll", togglescrollTop);
    scrollTop.addEventListener(
      "click",
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      })
    );
  }

  /**
   * Mobile nav toggle
   */
  const mobileNavShow = document.querySelector(".mobile-nav-show");
  const mobileNavHide = document.querySelector(".mobile-nav-hide");

  document.querySelectorAll(".mobile-nav-toggle").forEach((el) => {
    el.addEventListener("click", function (event) {
      event.preventDefault();
      mobileNavToogle();
    });
  });

  function mobileNavToogle() {
    document.querySelector("body").classList.toggle("mobile-nav-active");
    mobileNavShow.classList.toggle("d-none");
    mobileNavHide.classList.toggle("d-none");
  }

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll("#navbar a").forEach((navbarlink) => {
    if (!navbarlink.hash) return;

    let section = document.querySelector(navbarlink.hash);
    if (!section) return;

    navbarlink.addEventListener("click", () => {
      if (document.querySelector(".mobile-nav-active")) {
        mobileNavToogle();
      }
    });
  });

  /**
   * Toggle mobile nav dropdowns
   */
  const navDropdowns = document.querySelectorAll(".navbar .dropdown > a");

  navDropdowns.forEach((el) => {
    el.addEventListener("click", function (event) {
      if (document.querySelector(".mobile-nav-active")) {
        event.preventDefault();
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("dropdown-active");

        let dropDownIndicator = this.querySelector(".dropdown-indicator");
        dropDownIndicator.classList.toggle("bi-chevron-up");
        dropDownIndicator.classList.toggle("bi-chevron-down");
      }
    });
  });

  /**
   * Initiate pURE cOUNTER
   */
  new PureCounter();

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: ".glightbox",
  });

  /**
   * Init swiper slider with 1 slide at once in desktop view
   */
  new Swiper(".slides-1", {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  /**
   * Animation on scroll function and init
   */
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false,
    });
  }
  window.addEventListener("load", () => {
    aos_init();
  });

  //sliders
  let swiper = new Swiper(".slider-tech-box", {
    spaceBetween: 40,
    slidesPerView: 6,
    centeredSlides: true,
    grabCursor: false,
    speed: 3000,
    loop: true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
  });

  $(".slider-tech-box .swiper-container").each(function (elem, target) {
    var swp = target.swiper;
    $(this).hover(
      function () {
        swiper.autoplay.stop();
      },
      function () {
        swp.autoplay.start();
      }
    );
  });

  let swiper2 = new Swiper(".comment-feedback-box", {
    grabCursor: true,
    pagination: {
      el: ".swiper-pagination",
    },
  });

  let swiper3 = new Swiper(".slider-hero", {
    grabCursor: true,
    pagination: false,
    loop: true,
    //effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },
    autoplay: {
      delay: 5000,
    },
  });

  let slider_blog_swiper = new Swiper(".slider-blog-content", {
    spaceBetween: 45,
    slidesPerView: 2,
    centeredSlides: true,
    grabCursor: true,
    //speed: 3000,
    loop: true,
  });

  var industrySlider = new Swiper(".industry-content-swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2.5,
    },
    speed: 3000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
  });

  $(".slider-blog-content .swiper-slide-box .overlay").each(function () {
    $(this).height($(this).next().height());
  });

  $(window).resize(function () {
    $(".slider-blog-content .swiper-slide-box .overlay").each(function () {
      console.log($(this).next().height());
      $(this).height($(this).next().height());
    });
  });

  function playVideo(e) {
    $("video", this).get(0).play();
  }

  function hideVideo(e) {
    $("video", this).get(0).load();
  }

  var figure = $(".feature-box-bg-img").hover(playVideo, hideVideo);

  $(".blog-item").click(function (e) {
    e.stopPropagation();
    e.stopImmediatePropagation();
    if (typeof $(this).attr("data-href") != "undefined") {
      window.location.href = $(this).attr("data-href");
    }
  });
});

var current = location.pathname;
$("nav li a").each(function () {
  var $this = $(this);
  // if the current path is like this link, make it active
  if (current.indexOf($this.attr("href")) !== -1) {
    $this.addClass("active");
  } else {
    $this.removeClass("active");
  }
});

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
