@foreach($homePage as $home)
<div class="container">
	
	<div class="col-md-6 col-md-offset-3">
		
		<form enctype="multipart/form-data" action="{{url('home/edit-frontpage/' . $home->id)}}" method="post">

			{{method_field('PUT')}}
			{{csrf_field()}}

			<div class="text-center">
				<h3>Hero Content</h3>
			</div>

			<div class="form-group">
				<label for="master-headline">Hero Headline</label>
				<input type="text" name="master-headline" id="master-headline" class="form-control" value="{{$home->top_hero_headline}}">
			</div>

			<div class="form-group">
				<label for="master-subline">Hero Sub Heading</label>
				<textarea type="text" name="master-subline" id="master-subline" class="form-control" cols="30" rows="5">{{$home->top_hero_subline}}</textarea>
			</div>

			<div class="image-form" id="header-image-form" style="background-image: url( {{$home->top_hero_image}} );"></div>	

			<div class="form-group">
				<label class="btn btn-primary" for="hero-image">Change Header Image</label>
				<input type="file" name="hero-image" id="hero-image" class="form-control" value="{{$home->top_hero_image}}">
			</div>

			<hr>

			<div class="text-center">
				<h3>Featured Heading Content</h3>
			</div>

			<div class="form-group">
				<label for="featured-tab-headline">Featured Headline</label>
				<input value="{{$home->featured_tab_headline}}" type="text" name="featured-headline" class="form-control" id="featured-tab-headline">
			</div>		

			<div class="form-group">
				<label for="featured-tab-subline">Featured Subline</label>
				<textarea type="text" name="featured-subline" class="form-control" id="featured-tab-subline" cols="30" rows="5">{{$home->featured_tab_subline}}</textarea>
			</div>

			<div class="form-group col-md-6">
				<label for="featured-cta">Button Text</label>
				<input type="text" id="featured-cta" class="form-control" name="featured-cta" value="{{$home->featured_tab_cta}}">
			</div>

			<div class="form-group col-md-6">
				<label for="featured-cta-link">Button Link</label>
				<input type="text" id="featured-cta-link" class="form-control" name="featured-cta-link" value="{{$home->featured_tab_cta_link}}">
			</div>
						
			<hr class="col-xs-12">

			<div class="text-center">
				<h3>Paralax Content</h3>
			</div>

			<div class="form-group">
				<label for="paralax-content">Paralax Text</label>
				<textarea name="paralax-text" id="pralax-content" cols="30" rows="5" class="form-control">{{$home->paralax_text}}</textarea>
			</div>

			<div class="text-center">
				<h4>Paralax Good Image</h4>
			</div>

			<div class="image-form" id="good-image-form" style="background-image: url({{$home->paralax_good_image}});"></div>

			<div class="form-group">
				<label class="btn btn-primary" for="good-image">Change Good Image</label>
				<input type="file" name="good-image" id="good-image" class="form-control">
			</div>				

			<div class="text-center">
				<h4>Paralax Bad Image</h4>
			</div>

			<div class="image-form" id="bad-image-form" style="background-image: url({{$home->paralax_bad_image}});"></div>

			<div class="form-group">
				<label class="btn btn-primary" for="bad-image">Change Bad Image</label>
				<input type="file" name="bad-image" id="bad-image" class="form-control">
			</div>	

			<div class="form-group col-md-6">
				<label for="paralax-cta">Button Text</label>
				<input type="text" id="paralax-cta" class="form-control" name="paralax-cta" value="{{$home->paralax_cta}}">
			</div>

			<div class="form-group col-md-6">
				<label for="paralax-cta-link">Button Link</label>
				<input type="text" id="paralax-cta-link" class="form-control" name="paralax-cta-link" value="{{$home->paralax_cta_link}}">
			</div>

			<hr class="col-xs-12">

			<div class="text-center">
				<h3>Featured Products Heading</h3>
			</div>

			<div class="form-group">
				<label for="products-tab-headline">Products headline</label>
				<input value="{{$home->all_products_headline}}" type="text" name="products-headline" class="form-control" id="products-tab-headline">
			</div>
			
			<div class="form-group">
				<label for="products-tab-subline">Products Subline</label>
				<textarea type="text" name="products-subline" class="form-control" id="products-tab-subline" cols="30" rows="5">{{$home->all_products_subline}}</textarea>
			</div>
			
			<input type="submit" value="save" class="btn btn-primary btn-lg blue white--text fixed bottom right">

		</form>
		
	</div>

</div>
@endforeach