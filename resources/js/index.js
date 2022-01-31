import '../styles/main.scss';
import $ from 'jquery';
import './mobile-menu';
import './modules/header-search'
import slickInit from './modules/slick';
import scrollUp from './modules/scroll-up';
import './modules/magnific_popup';
import './modules/maska';
import './modules/button';
import './modules/menu';
import './modules/validation'
import './modules/accordion'
import './modules/active_check'
import './modules/range-slider'
import './modules/menu-filtre'



$(document).ready(function () {
    slickInit();
    scrollUp();

});
