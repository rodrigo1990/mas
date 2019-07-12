import {scrollAnimate} from './scroll-animation';

var url = window.location.pathname; // Returns path only (/path/example.html)


switch(url) {
  case '/pelota':
     scrollAnimate('pelota');
    break;
  	case '/nutricion':
    scrollAnimate('nutricion');
    break;
 	case '/educacion':
    scrollAnimate('educacion');
    break;
	case '/arte':
    scrollAnimate('arte');
    break;
  default:
    // code block
}