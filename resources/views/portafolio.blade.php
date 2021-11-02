@extends('layout.layout')
@section('title','Portafolio')
@section('content')
    
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="images/header-bg/3.png">
	
		@include('social_network')
	</section>
	<!-- Page top section end-->

	<!-- Portfolio page -->
	<div id="app">
	<portafolio-component :portafolio="{{json_encode($portafolio)}}" />
	</div>

@endsection