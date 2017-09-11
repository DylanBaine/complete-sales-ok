
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vuetify from 'vuetify';


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('auth-nav', require('./components/AuthNav.vue'));
Vue.component('master-header', require('./components/MasterHeader.vue'));
Vue.component('featured-trailer', require('./components/FeaturedTrailer.vue'));
Vue.component('paralax-break', require('./components/ParalaxBreak.vue'));

Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    methods: {
    	runPralaxBreak(){
    		$(document).ready(function(){

	    		var windowHeight = $(window).height();
	    		var scrollTop = $(window).scrollTop();
	    		var element = $('#paralax');
	    		var elementFromtop = (element.offset().top) - (element.height() * 1.7);
	    		var badImag = $('figure.bad-imag');
	    		var goodImage = $('.good-img');
	    		var badWidth = (scrollTop * 20) / (windowHeight + 100) + "vw";

	    		if(scrollTop > elementFromtop){
	    			goodImage.css({
	    				'width': badWidth
	    			});
	    			console.log(badWidth + " " + elementFromtop);
	    		}

    		});
		}, 
		moveFeaturedTitleUp(){

		}
    },
    created(){
    	window.addEventListener('scroll', this.runPralaxBreak);
    },
    destroyed(){
    	window.addEventListener('scroll', this.runPralaxBreak);
    }
});
 