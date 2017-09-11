@extends('layouts.app')

@section('content')

    <master-header 
	    header="Welcome to my site!" 
	    sub="This is a cool website! We have a lot of cool stuff. Come have a look at our new, cutting edge, technology. You wont regret it... We promise." 
	    bg="https://placeimg.com/1000/480/any">
		
    </master-header>

    <section id="featured-trailers" class="container">

    	<header class="flex-center">

			<a href="https://pencilrocketcreative.com"><v-btn info raised class="absolute top-right">See More trailers</v-btn></a>

    		<div class="header-inner col-md-9">
    			<h2>Featured Trailers</h2>
    			<p class="col-md-9 col-md-offset-3">
    				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur omnis qui repellendus mollitia nulla, dicta cum ad et architecto atque autem asperiores porro fugit voluptas voluptates sunt aperiam similique minus.
    			</p>
    		</div>
    	</header>
    	
		<featured-trailer 
			img="https://placeimg.com/300/200/arch" 
			title="This is a really nice product!" 
			summary="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod, tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor.." 
			link="https://pencilrocketcreative.com"
			price="$3,582">

		</featured-trailer>

		<featured-trailer 
			img="https://placeimg.com/300/200/nature" 
			title="This is a really nice product!" 
			summary="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod, tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor.." 
			link="https://pencilrocketcreative.com"
			price="$4,342">

		</featured-trailer>

		<featured-trailer 
			img="https://placeimg.com/300/200/people" 
			title="This is a really nice product!" 
			summary="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod, tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor.." 
			link="https://pencilrocketcreative.com"
			price="$3,369">

		</featured-trailer>	


    </section>

    <section id="paralax">

    	<paralax-break 
	    	headline="Our aluminum trailers are 75% lighter than normal steal trailers. They can last 60% longer than any other trailer on the market. This means that buying one of our trailers is an investment. They hold their value." 
	    	cta="Learn more about our aluminum trailers."
	    	cta_link="https://pencilrocketcreative.com"
	    	good_img="https://www.wired.com/wp-content/uploads/2017/08/nluFhCaU.jpg"
	    	bad_img="https://www.wired.com/wp-content/uploads/2017/08/Bayou_02.jpg">

    	</paralax-break>
    	
    </section>

    <section id="product-list" class="container">
    	<header class="flex-center">

			<a href="#"><v-btn info raised class="absolute top-right">See More trailers</v-btn></a>

    		<div class="header-inner col-md-9 text-right">
    			<h2>All of our products.</h2>
    			<p class="col-md-9 col-md-offset-3">
    				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur omnis qui repellendus mollitia nulla, dicta cum ad et architecto atque autem asperiores porro fugit voluptas voluptates sunt aperiam similique minus.
    			</p>
    		</div>
    	</header>  

		<featured-trailer 
			img="https://placeimg.com/300/200/people" 
			title="This is a really nice product!" 
			summary="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod, tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor.." 
			link="https://pencilrocketcreative.com"
			price="from: $3,369">

		</featured-trailer>	

		<featured-trailer 
			img="https://placeimg.com/300/200/people" 
			title="This is a really nice product!" 
			summary="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod, tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor.." 
			link="https://pencilrocketcreative.com"
			price="from: $3,369">

		</featured-trailer>	

		<featured-trailer 
			img="https://placeimg.com/300/200/people" 
			title="This is a really nice product!" 
			summary="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod, tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor.." 
			link="https://pencilrocketcreative.com"
			price="from: $3,369">

		</featured-trailer>	



    </section>


@stop
