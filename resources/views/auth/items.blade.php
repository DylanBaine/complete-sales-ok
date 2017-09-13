@extends('layouts.app')

@section('content')
	
	<section v-show="!hidden" id="add-item-form">
		@include('auth.includes.new-item-form');
	</section>

	<section id="all-items" class="container">
		@foreach($items as $item)

			<item
				img="{{url($item->main_image)}}"
				title="{{$item->title}}"
				link="{{url('home/items/' . $item->id) . '/edit'}}"
				summary="{{$item->description}}"
				price="{{$item->price}}"


			>
			</item>

		@endforeach
	</section>
	
	<v-btn raised fab @click.stop="hidden = !hidden" class="fixed bottom left red darken-4"><i class="fa fa-plus white--text"></i></v-btn>
@stop