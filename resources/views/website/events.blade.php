@extends('layouts.website')

@section('title', '| Eventos')

@section('nav')

    @include('website.components.nav', ['active' => 'eventos'])

@endsection

@section('content')

    <header style="
                background: url({{ asset('images/section-events-bg.png') }});
                background-position: center;
                background-size: cover;
                color: white">
        <h1>EVENTOS</h1>
    </header>

    <section class="events-container">
        <article>
            <h2>Eventos académicos</h2>
            <a href="#">Ver eventos</a>
        </article>
        <article>
            <h2>Eventos de financiamiento</h2>
            <a href="#">Ver eventos</a>
        </article>
    </section>

@endsection