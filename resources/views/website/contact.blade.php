@extends('layouts.website')

@section('title', '| Contacto')

@section('nav')

    @include('website.components.nav', ['active' => 'contacto'])

@endsection

@section('content')

    <header>
        <h1>NOSOTROS</h1>
    </header>

    @include('website.components.sub-menu')

    <div class="us-container">

        <h2>Contacto</h2>

        <section class="section-with-photo section-with-photo-right">
            <img src="{{ asset('images/us/us-1.jpg') }}" alt="">
            <div class="section-description">
                <p>
                    El Círculo de Estudios Logos y Ethos es una Asociación Civil fundada en 2020 por estudiantes de la
                    Escuela de Derecho de la Universidad Nacional de Trujillo.
                </p>
                <p>
                    Nuestro objetivo es encontrar innovadoras soluciones a los conflictos quesurgen en la sociedad, mediante
                    el desarrollo de la investigación y la producción científico-jurídica que nos permitaprofundizar en
                    ellos y adecuar el ordenamiento jurídico a las transformaciones y cambios sociales.
                <p>
            </div>
        </section>

    </div>

    </div>

@endsection
