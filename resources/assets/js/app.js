
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
Vue.component('featured', require('./components/FeaturedTrailer.vue'));
Vue.component('paralax-break', require('./components/ParalaxBreak.vue'));
Vue.component('auth-nav', require('./components/AuthNav.vue'));
Vue.component('layout', require('./components/Layout.vue'));
Vue.component('item', require('./components/Item.vue'));

Vue.use(Vuetify);

const app = new Vue({
    el: '#app',
    data: {
    	hidden: true,
    	editFrontPage: false,
    	editSiteInfo: true,
    	editSEO: true
    },
    methods: {

    	homeForm(){
    		this.editFrontPage = false;
    		this.editSiteInfo = true;
    		this.editSEO = true;
    	},
    	infoForm(){
    		this.editFrontPage = true;
    		this.editSiteInfo = false;
    		this.editSEO = true;    		
    	}

		},
    created(){
    },
    destroyed(){
    }
});

$(window).scroll(function(){

	var windowHeight = $(window).height();
	var scrollTop = $(window).scrollTop();
	var element = $('#paralax');
	var elementFromtop = (element.offset().top - 100) * -1;
	var badImag = $('figure.bad-imag');
	var goodImage = $('.good-img');
	var badWidth = ((scrollTop) + (elementFromtop) ) / 6 + "vw";

	if(scrollTop > elementFromtop){
		goodImage.css({
			'width': badWidth
		});
		console.log("el from top = " + elementFromtop);
		console.log("bad width = " + badWidth);
	}

}); 

$(document).ready(function(){

	$('#hero-image').change(function(){
	    $('#header-image-form').css({ 
	        'background' : 'url(' + window.URL.createObjectURL(this.files[0]) + ')',
	        'background-size': 'cover',
	        'background-position': 'center',
	        'backgroung-repeat': 'no-repeat',
	        'height': '200px'
	         });

	    console.log(window.URL.createObjectURL(this.files[0]));
	});

	$('#good-image').change(function(){
	    $('#good-image-form').css({ 
	        'background' : 'url(' + window.URL.createObjectURL(this.files[0]) + ')',
	        'background-size': 'cover',
	        'background-position': 'center',
	        'backgroung-repeat': 'no-repeat',
	        'height': '200px'
	         });

	    console.log(window.URL.createObjectURL(this.files[0]));
	});

	$('#bad-image').change(function(){
	    $('#bad-image-form').css({ 
	        'background' : 'url(' + window.URL.createObjectURL(this.files[0]) + ')',
	        'background-size': 'cover',
	        'background-position': 'center',
	        'backgroung-repeat': 'no-repeat',
	        'height': '200px'
	         });
	});

	$('#main-image').change(function(){
	    $('#main-image-form').css({ 
	        'background' : 'url(' + window.URL.createObjectURL(this.files[0]) + ')',
	        'background-size': 'cover',
	        'background-position': 'center',
	        'backgroung-repeat': 'no-repeat',
	        'height': '300px'
	    	}); 

	    console.log(window.URL.createObjectURL(this.files[0]));
	});	

	$('#second-image').change(function(){
	    $('#second-image-form').css({ 
	        'background' : 'url(' + window.URL.createObjectURL(this.files[0]) + ')',
	        'background-size': 'cover',
	        'background-position': 'center',
	        'backgroung-repeat': 'no-repeat',
	        'height': '300px'
	    	}); 

	    console.log(window.URL.createObjectURL(this.files[0]));
	});	

	$('#third-image').change(function(){
	    $('#third-image-form').css({ 
	        'background' : 'url(' + window.URL.createObjectURL(this.files[0]) + ')',
	        'background-size': 'cover',
	        'background-position': 'center',
	        'backgroung-repeat': 'no-repeat',
	        'height': '300px'
	    	}); 

	    console.log(window.URL.createObjectURL(this.files[0]));
	});	

	$('#fourth-image').change(function(){
	    $('#fourth-image-form').css({ 
	        'background' : 'url(' + window.URL.createObjectURL(this.files[0]) + ')',
	        'background-size': 'cover',
	        'background-position': 'center',
	        'backgroung-repeat': 'no-repeat',
	        'height': '300px'
	    	});

	    console.log(window.URL.createObjectURL(this.files[0]));
	});		

}); 