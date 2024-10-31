@extends('layouts.Navbar')
@section('titulo', 'Home')
@section('contenido')
<div class="container mt-5 col-md-6">
    <div class="card">
        <img src="{{asset('images/StephenKing.webp')}}" alt="Stephen King" />
        <div class="card-header fs-5 text-center text-primary">
        La mejor adaptación de Stephen King está en Netflix
        </div>  
        <p class="card-body" style="text-align: justify;">
            La adaptación de una novela de Stephen King, que durante mucho tiempo fue considerada imposible de rodar, ha estado arrasando en Netflix durante años. La película ha capturado la atención de los espectadores y se ha consolidado como uno de los mayores éxitos de la plataforma. Con una mezcla de horror y drama, esta historia ha resonado profundamente con la audiencia, demostrando que el material de King sigue siendo tan relevante y atractivo como siempre.
        </p>
        <div class="card-body text-center">
            <a href="https://vandal.elespanol.com/noticia/r29538/hay-una-pelicula-basada-en-un-libro-de-stephen-king-que-se-creia-imposible-de-rodar-y-ahora-lleva-anos-arrasando-en-netflix" class="btn btn-primary" target="_blank">Leer más en Vandal</a>
        </div>
    </div>
</div>
@endsection
