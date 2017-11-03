import $ from "jquery";
import 'slick-carousel';

export default function slider() {
  $('.slide').slick({
    infinite: true,
    autoplay: true,
    autoplaySpeed: 4000,
    slide: 'span',
    dots: true
  });
}
