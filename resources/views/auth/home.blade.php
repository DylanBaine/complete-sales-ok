@extends('layouts.app')

@section('content')
	<div class="container">
		

		<div class="col-xs-3"></div>	
		<v-btn @click="homeForm" class="blue white--text col-xs-3">
			<span v-show="editFrontPage">Edit The Home Page</span>
			<span v-show="!editFrontPage">Editing Home Page</span>
		</v-btn>

		<v-btn @click="infoForm" class="green white--text col-xs-3">
			<span v-show="editSiteInfo ">Edit Site Info</span>
			<span v-show="!editSiteInfo ">Editing Site Info</span>
		</v-btn>

		<section v-show="!editFrontPage" id="edit-front-page">
			@include('auth.includes.edit-home')
		</section>

		<section v-show="!editSiteInfo" id="edit-site-info">
			@include('auth.includes.edit-info')
		</section>

	</div>

@endsection