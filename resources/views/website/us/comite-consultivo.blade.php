@extends('layouts.website')

@section('title', '| Comité Consultivo')

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

    <h2>COMITÉ CONSULTIVO</h2>

    <section class="us-container collaborators-list">

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

@endsection
