@extends('layouts.website')

@section('title', '| Asamblea General')

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

    @include('website.components.sub-menu', ['active' => 'organizacion'])

    <h2>ASAMBLEA GENERAL</h2>

    <section class="us-container collaborators-list">

        <h3>Miembros activos</h3>

        @foreach ($students as $student)

            <div class="collaborators-list-item">
                <h3>{{ $student->initial }} </h3>
                <ul>
                    @foreach (explode('###', $student->people) as $people)
                        <li class="">{{ $people }}</li>
                    @endforeach
                </ul>
            </div>

        @endforeach

    </section>

    <section class="us-container collaborators-list">

        <h3>Colaboradores</h3>

        @foreach ($graduates as $graduate)

            <div class="collaborators-list-item">
                <h3>{{ $graduate->initial }} </h3>
                <ul>
                    @foreach (explode('###', $graduate->people) as $people)
                        <li class="">{{ $people }}</li>
                    @endforeach
                </ul>
            </div>

        @endforeach

    </section>

@endsection
