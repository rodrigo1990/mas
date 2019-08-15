/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import {scrollAnimate} from './scripts/scroll-animation';
window.$ = window.jQuery = require('jquery');
require('../bootstrap-3.3.7-dist/js/bootstrap');

require('./scripts/header-functions');require('./scripts/manejoDeMenus');



if(document.getElementById('proyectos')){

	require('./scripts/switch-to-id');
}


if(document.getElementById('index')){

	

	$("#nosotros-btn").click(function(){
		scrollAnimate('nosotros')
	});



}



if(document.getElementById('formulario')){

	require('./scripts/openFormulario');
	require('./scripts/closeFormulario');



}




