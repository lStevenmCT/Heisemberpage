@extends('layout.layout')
@section('title','Contacto')
@section('content')
    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="images/header-bg/4.png">
        <h2>Contacto</h2>
        @include('social_network')

    </section>


    <!-- Contact page -->
    <section class="page-warp contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">

                        <h2>Contactenos</h2>
                    </div>
                    <form class="comment-form" action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Nombre" name="nombre" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="email" name="email" required>
                            </div>
                            <div class="col-md-12">
                                <input type="text" placeholder="asunto" name="asunto" required>
                                <textarea placeholder="Mensaje" name="descripcion" required></textarea>
                                <button type="submit" class="site-btn sb-dark">Enviar <i class="fa fa-angle-double-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Contact page end-->

@endsection
