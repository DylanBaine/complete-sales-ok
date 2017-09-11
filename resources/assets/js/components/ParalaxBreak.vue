<template>
	
	<div class="inner">
		
		<div class="cont flex-center">		
			<figure class="bad-img absolute" :style="{backgroundImage: 'url(' + bad_img + ')'}"></figure>
			<figure class="good-img absolute" :style="{backgroundImage: 'url(' + good_img + ')'}"></figure>

			<figcaption class="col-md-9">
				<h4>{{headline}}</h4>
				<br>
				<a :href="cta_link"><v-btn info raised>{{cta}}</v-btn></a>
			</figcaption>
		</div>
		
	</div>

</template>

<script>
	export default {
		props: [
			'headline',
			'cta',
			'cta_link',
			'good_img',
			'bad_img'
		],
		mounted(){
			console.log('paralx-break is mounted');
		}
	}

</script>