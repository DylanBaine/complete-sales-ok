@extends('layouts.app')

@section('content')
<div class="flex-center full-height">
	<div class="col-md-8">
		<h1>Are you sure you want to logout?</h1>
        <a href="{{ url('/logout') }}"
            onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();" class="btn btn-primary btn-lg btn-block">
            Logout
        </a>

        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
	</div>
</div>
@stop