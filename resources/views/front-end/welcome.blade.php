@extends('layouts.app')

@section('content')

    <master-header 
	    header="{{$home->top_hero_headline}}" 
	    sub="{{$home->top_hero_subline}}" 
	    bg="{{$home->top_hero_image}}">
		
    </master-header>

    <section id="featured-trailers" class="container">

    	<header class="flex-center">

			<a href="{{$home->featured_tab_cta_link}}"><v-btn info raised class="absolute top-right">{{$home->featured_tab_cta}}</v-btn></a>

    		<div class="header-inner col-md-9">
    			<h2>{{$home->featured_tab_headline}}</h2>
    			<p class="col-md-9 col-md-offset-3">
    				{{$home->featured_tab_subline}}
    			</p>
    		</div>
    	</header>
    	
		<featured 
			img="https://placeimg.com/300/200/arch" 
			title="This is a really nice product!" 
			summary="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod, tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor.." 
			link="https://pencilrocketcreative.com"
			price="$3,582">

		</featured>

		<featured 
			img="https://placeimg.com/300/200/nature" 
			title="This is a really nice product!" 
			summary="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod, tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor.." 
			link="https://pencilrocketcreative.com"
			price="$4,342">

		</featured>

		<featured 
			img="https://placeimg.com/300/200/people" 
			title="This is a really nice product!" 
			summary="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod, tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor.." 
			link="https://pencilrocketcreative.com"
			price="$3,369">

		</featured>	


    </section>

    <section id="paralax">

    	<paralax-break 
	    	headline="{{$home->paralax_text}}" 
	    	cta="{{$home->paralax_cta}}"
	    	cta_link="{{$home->paralax_cta_link}}"
	    	good_img="{{$home->paralax_good_image}}"
	    	bad_img="{{$home->paralax_bad_image}}">

    	</paralax-break>
    	
    </section>

    <section id="product-list" class="container">
    	<header class="flex-center">

			<a href="products"><v-btn info raised class="absolute top-right">See More of what we have</v-btn></a>

    		<div class="header-inner col-md-9 text-right">
    			<h2>{{$home->all_products_headline}}</h2>
    			<p class="col-md-9 col-md-offset-3">
    				{{$home->all_products_subline}}
    			</p>
    		</div>
    	</header>  

		<featured 
			img="https://placeimg.com/300/200/people" 
			title="This is a really nice product!" 
			summary="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod, tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor.." 
			link="https://pencilrocketcreative.com"
			price="from: $3,369">

		</featured>	

		<featured 
			img="https://placeimg.com/300/200/people" 
			title="This is a really nice product!" 
			summary="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod, tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor.." 
			link="https://pencilrocketcreative.com"
			price="from: $3,369">

		</featured>	

		<featured 
			img="https://placeimg.com/300/200/people" 
			title="This is a really nice product!" 
			summary="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod, tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor.." 
			link="https://pencilrocketcreative.com"
			price="from: $3,369">

		</featured>	



    </section>

@stop
