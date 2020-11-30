@extends('layouts.app')

@section('co-title') - Contactanos @endsection
@section('content')
<div class="container" style="margin-top: 20px;">
    <div class="row">
        <div class="col-12">
            <h2 style="font-size: 28px;margin-bottom: 0;">Contáctanos</h2>
            <hr>
        </div>
        <div class="col-12 col-md-6">
            <h3 style="font-size: 28px;">Redes Sociales</h3>
            <hr>
            <div class="d-flex flex-column">
                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i>&nbsp;facebook</a>
                <hr style="width: 100%;">
                <a href="#" target="_blank"><i class="fab fa-twitter"></i>&nbsp;Twitter</a>
                <hr style="width: 100%;">
                <a href="#" target="_blank"><i class="fab fa-instagram"></i>&nbsp;Instagram</a>
                <hr style="width: 100%;">
                <a href="#" target="_blank"><i class="fab fa-youtube"></i>&nbsp;Youtube</a>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h3 style="font-size: 28px;margin-bottom: 0;">Ubicación<br></h3>
            <hr>
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.797284785214!2d-63.882080184606174!3d10.97866829218451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c318c3b89e345cd%3A0xbaf23c34b11f9d7!2sUniversidad%20De%20Margarita!5e0!3m2!1ses-419!2sve!4v1594845323682!5m2!1ses-419!2sve" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection