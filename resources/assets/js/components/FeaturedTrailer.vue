<template>
	
	<div class="featured-trailer col-md-4">
		<v-card raised>
			<v-card-media :src="img" height="200px">
			</v-card-media>
			<v-card-title primary-title>
				<div>
					<h3 class="headline mb-0">{{title}}</h3>
					<p>{{summary}}</p>
				</div>
			</v-card-title>
			<v-card-actions>
				<a :href="link"><v-btn>See More</v-btn></a>
				<v-chip class="primary white--text">{{price}}</v-chip>
			</v-card-actions>
		</v-card>	
	</div>

</template>

<script>
	export default {
		props: [
			'img',
			'title',
			'summary',
			'link',
			'price'
		],
		mounted(){
			console.log('featured-trailer is mounted')
		}
	}

</script>