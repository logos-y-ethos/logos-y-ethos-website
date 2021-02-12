@extends('layouts.website')

@section('title', '| Colaboradores')

@section('nav')

    @include('website.components.nav', ['active' => 'nosotros'])

@endsection

@section('content')

    <header>
        <h1>NOSOTROS</h1>
    </header>

    @include('website.components.sub-menu')

    <h2>Colaboradores</h2>

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

    <h2>Colaboradores Externos</h2>

    <section class="us-container collaborators-list">

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
