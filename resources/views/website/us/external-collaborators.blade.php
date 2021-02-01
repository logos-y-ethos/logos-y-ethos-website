@extends('layouts.website')

@section('title', '| Colaboradores externos')

@section('nav')

    @include('website.components.nav', ['active' => 'nosotros'])

@endsection

@section('content')

    <header>
        <h1>NOSOTROS</h1>
    </header>

    @include('website.components.sub-menu')

    <h2>Colaboradores Externos</h2>

    <section class="us-container collaborators-list">

        @foreach ($collaborators as $collaborator)

            <div class="collaborators-list-item">
                <h3>{{ $collaborator->initial }} </h3>
                <ul>
                    @foreach (explode(',', $collaborator->people) as $people)
                        <li class="">{{ $people }}</li>
                    @endforeach
                </ul>
            </div>

        @endforeach

    </section>

@endsection
