    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    slide: 'span',
    dots: true,
    arrows: true,
    prevArrow: '.slide_prev',
    nextArrow: '.slide_next',
  });

          centerMode: true,
      centerPadding: '60px',
      slidesToShow: 3,
      responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3,
        slide: 'span',
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        slide: 'span',
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
  });