@extends('layouts.website')

@section('title', '| ¿Quiénes somos?')

@section('nav')

    @include('website.components.nav', ['active' => 'nosotros'])

@endsection

@section('content')

    <header style="
    background: url({{ asset('images/section-us-bg.png') }});
    background-position: center;
    background-size: cover;
    color: white">
        <h1>NOSOTROS</h1>
    </header>

    @include('website.components.sub-menu', ['active' => 'nosotros'])

    <div class="us-container">

        <h2>¿Quiénes somos?</h2>

        <section class="section-with-photo section-with-photo-right">
            <img src="{{ asset('images/us/us-1.png') }}" alt="">
            <div class="section-description">
                <p>
                    El Círculo de Estudios Logos y Ethos es una Asociación Civil fundada en 2020 por estudiantes de la
                    Escuela de Derecho de la Universidad Nacional de Trujillo.
                </p>
                <p>
                    Nuestro objetivo es encontrar innovadoras soluciones a los conflictos que surgen en la sociedad,
                    mediante el desarrollo de la investigación y la producción científico-jurídica que nos permita
                    profundizar en ellos y adecuar el ordenamiento jurídico a las transformaciones y cambios sociales.
                <p>
            </div>
        </section>

    </div>

    <section class="mission-vision">

        <div class="item">
            <h3>
                <span>MISIÓN</span>
            </h3>
            <img src="{{ asset('images/us/mision.jpg') }}" alt="">
            <p>
                Contribuir al desarrollo académico de la comunidad jurídica, liderando la investigación científica con ética
                y calidad en las distintas áreas del derecho. Así también, promover el crecimiento personal y profesional de
                nuestros asociados.
            </p>
        </div>
        <div class="item">
            <h3><span>VISIÓN</span></h3>
            <img src="{{ asset('images/us/vision.jpg') }}" alt="">
            <p>
                Ser el mayor referente académico en investigación jurídica y producción de textos científicos, además de
                contribuir al desarrollo integral de nuestros asociados.
            </p>
        </div>

    </section>

    <div class="us-container">

        <h2>Historia</h2>

        <section class="section-text">
            <p>
                En el contexto de la pandemia de la Covid-19 y atravesando una profunda crisis política, los estudiantes de
                la Escuela de Derecho de la Universidad Nacional de Trujillo, quienes se encuentran comprometidos con su
                responsabilidad social y el fortalecimiento del Estado de Derecho, son conscientes que no puede existir
                democracia sin ciencia.
            </p>
            <p>
                Así, habiendo desarrollado un pensamiento crítico y espíritu investigativo, buscan, no solo aplicar lo
                aprendido, sino también descubrir nuevas y más adecuadas soluciones para los problemas que plantea, la cada
                vez más dinámica, vida social de la presente época.
            </p>
        </section>

        <section class="section-with-photo">
            <img src="{{ asset('images/us/us-3.jpg') }}" alt="">
            <div class="section-description">
                <p>
                    Sin embargo, los círculos universitarios de investigación, en pregrado, suelen orientar sus esfuerzos
                    hacia el estudio teórico-práctico del Derecho más que a la producción científica en la materia.
                </p>
                <p>
                    Es en este afán de superación académica que en el primer semestre de 2020, a iniciativa de Diana Asto
                    Paredes y Xiomara Roncal Cueva, junto a Brayan Linares Oyos, Mercedes Polo Gonzales, Alessandro Reymundo
                    Vilca, Milagros Aubanel Lozano Ulloa, María Helena Herrera Mendoza, María
                    Alexandra Vásquez Correa, Norvin Mostacero Cabrera, Emily Lozano Rodríguez y Estefani Verde Rodríguez,
                    además, contando con la guía de la Dra. Victoria Mendoza Otiniano, se embarcan en el proyecto nominado
                    Círculo de Estudios Logos y Ethos.
                </p>
            </div>
        </section>

        <section class="section-with-photo section-with-photo-right">
            <img src="{{ asset('images/us/us-4.png') }}" alt="">
            <div class="section-description">
                <p>
                    Contribuyendo así, a fomentar y preparar a los estudiantes de pregrado para el desarrollo de la
                    investigación jurídica; ello, mediante la realización de foros, conversatorios, seminarios y talleres
                    que potencien sus conocimientos y habilidades. Asimismo, logrando difundir la producción científica de
                    estos a través de la revista jurídica de la asociación.
                </p>
                <p>
                    Hoy en día, aún queda un largo camino por recorrer, así, la Asociación Círculo de Estudios Logos y Ethos
                    se encuentra comprometida a seguir trabajando ardua y disciplinadamente para alcanzar sus fines y
                    objetivos con éxito.
                </p>
            </div>

        </section>
    </div>

@endsection
