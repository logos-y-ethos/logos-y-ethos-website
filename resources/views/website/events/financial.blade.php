@extends('layouts.website')

@section('title', '| Eventos de Financiamiento')

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

    <h3 class="events-list-container-title">Eventos de financiamiento</h3>

    <section class="events-list-container">
        @foreach ($events as $event)
            <article class="event-item">
                @if ($event->date || $event->time)
                    <span class="datetime">{{ $event->date . ' ' . $event->time }}</span>
                @endif
                <div class="head">
                    <a href="{{ $event->link }}">
                        @if ($event->photo)
                            <div style="
                                    /* width: 200px; */
                                    height: 250px;
                                    background: url({{ asset('images/events/' . $event->photo) }});
                                    background-position: center;
                                    background-size: cover;
                                    color: white">
                            </div>
                            {{-- <img src="{{ asset('images/events/' . $event->photo) }}" alt=""> --}}
                        @else
                            <div style="
                                    /* width: 200px; */
                                    height: 250px;
                                    background: url({{ asset('images/events/default.png') }});
                                    background-position: center;
                                    background-size: cover;
                                    color: white">
                            </div>
                        @endif
                        <div class="title"><b>{{ $event->title }}</b></div>
                    </a>
                </div>
                <p class="description">{{ $event->description }}</p>
            </article>
        @endforeach
    </section>

@endsection