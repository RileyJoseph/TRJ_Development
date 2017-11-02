$(document).ready(function(){
  $('.carousel').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      autoplay: false,
      prevArrow: false,
      nextArrow: false
  });
  $('.carousel-items').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 7000,
    slidesToScroll: 1,
    lazyLoading: true,
    pauseOnHover: true
  });
});