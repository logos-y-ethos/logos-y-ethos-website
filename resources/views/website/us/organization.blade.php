@extends('layouts.website')

@section('title', '| Organización')

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

    <section class="us-container us-container-organization">
        <div class="organization-container">
            <article>
                <button class="collapsible">
                    <h2>Consejo Directivo</h2>
                </button>
                <div class="content">
                    @foreach ($directors as $director)
                        <p>
                        <div class="title">
                            <h4>{{ $director->position }}:</h4>{{ $director->name . ' ' . $director->last_name }}<br />
                        </div>
                        <a href="mailto:{{ $director->mail }}">{{ $director->mail }}</a>
                        </p>
                    @endforeach
                </div>
            </article>
            <article>
                <h2>Asamblea General</h2>
                <a href="{{ url('/nosotros/asamblea-general') }}">Ver miembros</a>
            </article>
            <article>
                <h2>Comité Consultivo</h2>
                <a href="{{ url('/nosotros/comite-consultivo') }}">Ver miembros</a>
            </article>
        </div>
    </section>

@endsection

@section('scripts')

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + "px";
                }
            });
        }

    </script>
@endsection
