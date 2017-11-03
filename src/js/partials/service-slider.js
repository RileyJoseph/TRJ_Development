import $ from "jquery";
import 'slick-carousel';

export default function serviceSlider() {
  $('.service__carousel ul').slick({
    infinite: true,
    slidesToScroll: 1,
    centerMode: true,
    variableWidth: true,
    lazyLoading: true,
    prevArrow: '.service__carousel__arrows__prev',
    nextArrow: '.service__carousel__arrows__next'
  });
}