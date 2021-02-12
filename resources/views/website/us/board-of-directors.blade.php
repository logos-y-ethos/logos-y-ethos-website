@extends('layouts.website')

@section('title', '| Consejo Directivo')

@section('nav')

    @include('website.components.nav', ['active' => 'nosotros'])

@endsection

@section('content')

    <header>
        <h1>NOSOTROS</h1>
    </header>

    @include('website.components.sub-menu')

    <h2>Consejo Directivo</h2>

    <section class="us-container directors-list">

        <div class="directors-list-item">
            <h3>PRESIDENTA</h3>
            <img src="{{ asset('images/us/Diana Isabel Asto Paredes.jpg') }}" alt="">
            <b>Diana Isabel Asto Paredes</b>
            <a href="mailto:dasto@unitru.edu.pe">dasto@unitru.edu.pe</a>
            <p>Preside y representa a la asociación</p>
        </div>

        <div class="directors-list-item">
            <h3>SECRETARIO</h3>
            <img src="{{ asset('images/us/Brayan Micael Linares Oyos.jpg') }}" alt="">
            <b>Brayan Micael Linares Oyos</b>
            <a href="mailto:blinares@unitru.edu.pe">blinares@unitru.edu.pe</a>
            <p>
                Atribuciones del secretario:
                <ol type="a">
                    <li> Actuar como tal en las sesiones del consejo directivo y en la asamblea general. </li>
                    <li> Redactar y suscribir la correspondencia y demás documentos de la asociación, conjuntamente con el
                        presidente. </li>
                    <li> Llevar los archivos y los libros de la asociación. </li>
                    <li> Transcribir y notificar a los asociados la convocatoria a asamblea general realizada por el presidente
                        del consejo directivo. </li>
                </ol>
            </p>
        </div>

        <div class="directors-list-item">
            <h3>TESORERA</h3>
            <img src="{{ asset('images/us/Mercedes Liliana Polo Gonzalez.jpg') }}" alt="">
            <b>Mercedes Liliana Polo Gonzalez</b>
            <a href="mailto:mlpolog@unitru.edu.pe">mlpolog@unitru.edu.pe</a>
            <p>
                Atribuciones del tesorero:
                <ol type="a">
                    <li> Dirigir y supervigilar las finanzas y la contabilidad de la asociación. </li>
                    <li> Disponer lo conveniente para la recaudación de los fondos. </li>
                    <li> Ordenar los pagos necesarios de acuerdo con el presupuesto de la asociación. </li>
                    <li> Vigilar que se mantenga el inventario de los bienes de la asociación. </li>
                </ol>
            </p>
        </div>

    </section>

@endsection
