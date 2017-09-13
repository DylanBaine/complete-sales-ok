<div class="row">	
	<div class="text-center">
		<h3>Add a new product</h3>
	</div>
	<div class="col-md-6 col-md-offset-3">
		<form action="/home/items/add" method="post" enctype="multipart/form-data">

		{{csrf_field()}}

		<div class="form-group">
			<label for="title">Title</label>
			<input id="title" name="title" type="text" class="form-control">
		</div>

		<div class="form-group">
			<label for="type">Product Type</label>
			<input id="type" name="type" type="text" class="form-control">
		</div>

		<div class="form-group">
			<label for="brand">Brand</label>
			<input id="brand" name="brand" type="text" class="form-control">
		</div>

		<div class="form-group col-md-6">
			<label for="stock">Stock</label>
			<input id="stock" name="stock" type="text" class="form-control">
		</div>

		<div class="form-group col-md-6">
			<label for="price">Price</label>
			<input id="price" name="price" type="text" class="form-control" value="$">
		</div>

		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" id="description" class="form-control" cols="30" rows="5"></textarea>
		</div>

		<div class="text-center">
			<h5>Add Product Images</h5>
		</div>

		<div class="image-form-closed" id="main-image-form"></div>

		<div class="form-group text-center">
			<label for="main-image" class="btn btn-primary text--white">Main Image</label>
			<input type="file" name="main-image" id="main-image">
		</div>

		<div class="image-form-closed" id="second-image-form"></div>

		<div class="form-group text-center">
			<label for="second-image" class="btn btn-primary text--white">Second Image</label>
			<input type="file" name="second-image" id="second-image">
		</div>

		<div class="image-form-closed" id="third-image-form"></div>

		<div class="form-group text-center">
			<label for="third-image" class="btn btn-primary text--white">Third Image</label>
			<input type="file" name="third-image" id="third-image">
		</div>

		<div class="image-form-closed" id="fourth-image-form"></div>

		<div class="form-group text-center">
			<label for="fourth-image" class="btn btn-primary text--white">Fourth Image</label>
			<input type="file" name="fourth-image" id="fourth-image">
		</div>				
		
		<input type="submit" value="Save" class="btn btn-primary blue white--text btn-lg btn-block">

		</form>
	</div>
</div>