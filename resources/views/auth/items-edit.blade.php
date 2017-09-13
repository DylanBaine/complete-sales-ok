@extends('layouts.app')

@section('content')

<div class="row">	
	<div class="text-center">
		<h3>Edit: "{{$item->title}}"</h3>
	</div>
	<form action="/home/items/{{$item->id}}/delete" method="post">
		
		{{method_field('DELETE')}}
		{{csrf_field()}}

		<input type="submit" value="Delete" class="btn red darken-4 white--text fixed bottom right">
	</form>
	<div class="col-md-6 col-md-offset-3">
		<form action="/home/items/{{$item->id}}/edit" method="post" enctype="multipart/form-data">
		
		{{method_field('PUT')}}
		{{csrf_field()}}

		<div class="form-group">
			<label for="title">Title</label>
			<input id="title" name="title" type="text" class="form-control" value="{{$item->title}}">
		</div>

		<div class="form-group">
			<label for="type">Product Type</label>
			<input id="type" name="type" type="text" class="form-control" value="{{$item->type}}">
		</div>

		<div class="form-group">
			<label for="brand">Brand</label>
			<input id="brand" name="brand" type="text" class="form-control" value="{{$item->brand}}">
		</div>

		<div class="form-group col-md-6">
			<label for="stock">Stock</label>
			<input id="stock" name="stock" type="text" class="form-control" value="{{$item->stock}}">
		</div>

		<div class="form-group col-md-6">
			<label for="price">Price</label>
			<input id="price" name="price" type="text" class="form-control" value="{{$item->price}}">
		</div>

		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" id="description" class="form-control" cols="30" rows="5">{{$item->description}}</textarea>
		</div>

		<div class="text-center">
			<h5>Add Product Images</h5>
		</div>

		<div class="image-form" id="main-image-form" style="background-image: url({{url($item->main_image)}});"></div>

		<div class="form-group text-center">
			<label for="main-image" class="btn btn-primary text--white">Main Image</label>
			<input type="file" name="main-image" id="main-image">
		</div>

		<div class="image-form" id="second-image-form" style="background-image: url({{url($item->second_image)}});"></div>

		<div class="form-group text-center">
			<label for="second-image" class="btn btn-primary text--white">Second Image</label>
			<input type="file" name="second-image" id="second-image">
		</div>

		<div class="image-form" id="third-image-form"
		style="background-image: url({{url($item->third_image)}});"></div>

		<div class="form-group text-center">
			<label for="third-image" class="btn btn-primary text--white">Third Image</label>
			<input type="file" name="third-image" id="third-image">
		</div>

		<div class="image-form" id="fourth-image-form" style="background-image: url({{url($item->fourth_image)}});"></div>

		<div class="form-group text-center">
			<label for="fourth-image" class="btn btn-primary text--white">Fourth Image</label>
			<input type="file" name="fourth-image" id="fourth-image">
		</div>				
		
		<input type="submit" value="Save" class="btn btn-primary blue white--text btn-lg btn-block">

		</form>
	</div>
</div>

@stop