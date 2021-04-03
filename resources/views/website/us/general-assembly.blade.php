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

    <h3 class="general-assembly-subheader">Miembros activos</h3>

    <section class="us-container general-assembly-list">

        @foreach ($members as $member)

            <div class="general-assembly-list-item">
                <h3>{{ $member->initial }} </h3>
                <ul>
                    @foreach (explode('###', $member->people) as $people)
                        <li class="">{{ $people }}</li>
                    @endforeach
                </ul>
            </div>

        @endforeach

    </section>

    <h3 class="general-assembly-subheader">Colaboradores</h3>

    <section class="us-container general-assembly-list">

        @foreach ($collaborators as $collaborator)

            <div class="general-assembly-list-item">
                <h3>{{ $collaborator->initial }} </h3>
                <ul>
                    @foreach (explode('###', $collaborator->people) as $people)
                        <li class="">{{ $people }}</li>
                    @endforeach
                </ul>
            </div>

        @endforeach

    </section>

@endsection
