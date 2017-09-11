<template>

	<header id="master-header" class="flex-center row position-ref" :style="{backgroundImage: 'url(' + bg + ')'}">
		
		<div class="absolute full-height col-md-6"></div>

		 <div class="header-inner col-md-9">
		 	<h1>{{header}}</h1>
		 	<p class="col-sm-6 col-sm-offset-6 text-right">{{sub}}</p>
		 </div>
		
	</header>
	
</template>

<script>
	export default {
		props: [
			'header',
			'sub',
			'bg'
		],
		mounted(){
			console.log('master-header is mounted');		
		}
	}
</script>