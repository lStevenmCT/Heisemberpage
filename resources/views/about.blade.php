@extends('layout.layout')
@section('title','Sobre Nosotros')
@section('content')
    	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="images/header-bg/1.png">
		<h2>Sobre</h2>
		@include('social_network')
	</section>
	<!-- Page top section end-->

	<!-- Intro section -->
	<section class="intro-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 order-2 order-lg-1 intro-text">

					<span>{{ $about->subtitle }}</span>
                    <h2>{{ $about->title }} </h2>
                    <p>{{ $about->description }}</p>
				</div>
				<div class="col-lg-5 order-1 order-lg-2">
					 <img src="{{ asset("images/header-bg/{$about->imagen}") }}" alt="">
				</div>
			</div>
		</div>
	</section>



	<section class="brand-history-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>HESMA STYLE</h2>
				<p>El nombre de la empresa es HESMA STYLE es una idea de negocio que surge al ver la necesidad del mercado por usar un estilo de ropa a la moda, enfocándose principalmente en la combinación de tendencias de moda actual y tradicional de estados unidos.</p>
			</div>
			<div class="row justify-content-md-center">
				<div class="col-lg-10">
					<div class="brand-history-item">
						<h2>MISIÓN</h2>
						
						<p>Ofrecer a nuestros clientes  productos de calidad, a precios cómodos  que cumplan con sus necesidades y exigencias, abarcando sus gustos de acuerdo a su estilo de ver y vivir la vida.</p>
					</div>
					<div class="brand-history-item">
						<h2>VISIÓN</h2>

						<p>Ser una empresa  líder y reconocida en la venta de ropa, lograr también crear  nuestras cadenas de almacenes,   proporcionando cada día más un servicio de excelencia a nuestros clientes y que al mismo tiempo nos permitan competir en el mercado nacional con los mejores precios del mercado</p>
					</div>
				</div>
			</div>
			
		</div>
	</section>

		
@endsection