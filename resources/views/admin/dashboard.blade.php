@extends('layouts.admin')

@section('title', '| Inicio')

@section('side-bar')

    @include('admin.components.side-bar', ['active' => 'inicio'])

@endsection

@section('content')

<header class="dashboard-header">
    <p>CÍRCULO DE ESTUDIOS</p>
    <h1>LOGOS Y ETHOS</h1>
</header>


@include('../admin/components/social-box')

@endsection