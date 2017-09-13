<div class="container">
	
	<div class="col-md-6 col-md-offset-3">

		<header class="text-center">
			<h2>Edit Your Sites Information</h2>
		</header>
		<hr>
		
		<form enctype="multipart/form-data" action="{{url('home/seo/' . $seo->id)}}" method="post">

			{{method_field('PUT')}}
			{{csrf_field()}}

			<div class="form-group">
				<label for="title">Site Title</label>
				<input type="text" name="title" id="title" class="form-control" value="{{$seo->title}}">
			</div>

			<div class="form-group">
				<label for="url">Sites URL</label>
				<input type="text" name="url" class="form-control" id="url" value="{{$seo->url}}">
			</div>

			<div class="form-group">
				<label for="description">Sites Description</label>
				<textarea class="form-control" name="description" id="description" cols="30" rows="5">{{$seo->description}}</textarea>
			</div>

			<div class="image-form" style="background-image: url({{$seo->image}});"></div>

			<div class="form-group">
				<label for="image" class="btn btn-block btn-primary">Image that will show up on search engines and social media.</label>
				<input type="file" id="image" name="image">
			</div>

			<div class="image-form" style="background-image: url({{$seo->icon}});"></div>

			<div class="form-group">
				<label for="icon" class="btn btn-block btn-primary">Sites Icon</label>
				<input type="file" id="icon" name="icon">
			</div>
			
			<input type="submit" value="save" class="btn btn-primary btn-lg green white--text fixed bottom right">

		</form>
		
	</div>

</div>