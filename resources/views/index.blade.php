@extends('layouts.website')

@section('title', '| Inicio')

@section('nav')

    @include('website.components.nav', ['active' => 'inicio'])

@endsection

@section('content')

    <header style="
            background: url({{ asset('images/home-hero.png') }});
            background-position: center;
            background-size: cover;
        ">
        <h1 style="
            height: 80vh; 
            display: flex;
            align-items: center;
            justify-content: center;
            /* height: calc(100vh - 176.4px); */
            height: calc(100vh - 45px);
            margin-top: -25px;
            margin-bottom: 0;
            color: white;
            background-color: rgb(0 0 0 / 70%);
            ">LOGOS Y ETHOS</h1>
    </header>

@endsection