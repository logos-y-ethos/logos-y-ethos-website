@extends('layouts.website')

@section('title', '| Secretarías')

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

    @include('website.components.sub-menu', ['active' => 'secretarias'])

    <div class="secretaries-main-container">

        <h2>Secretarías</h2>

        <div class="us-container secretaries-list">

            @foreach ($secretaries as $secretary)
                <section>
                    <button class="collapsible active">
                        <h4>{{ $secretary->title }}</h4>
                    </button>
                    <div class="content">
                        <div class="left-content">
                            <article class="members">
                                @foreach ($secretary->members->sortBy('order') as $member)
                                    <p>
                                        <b>{{ $member->position }}: </b>
                                        <i>{{ $member->name . ' ' . $member->last_name }}</i>
                                        <a href="mailto:{{ $member->mail }}">{{ $member->mail }}</a>
                                    </p>
                                @endforeach
                            </article>
                            <article>
                                <p>
                                    {!! nl2br($secretary->description) !!}
                                </p>
                            </article>
                            <article>
                                <b>Perfil de sus integrantes</b>
                                <p>
                                    {!! nl2br($secretary->profile) !!}
                                </p>
                            </article>
                        </div>
                        <div class="photos">
                            @foreach ($secretary->members->sortBy('order') as $member)
                                <img src="{{ asset('images/us/' . $member->photo) }}" alt="">
                            @endforeach
                        </div>
                    </div>
                </section>
            @endforeach

        </div>

    </div>

@endsection

@section('scripts')

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                content.style.maxHeight = content.style.maxHeight ? null : content.scrollHeight + 15 + "px";
            });
        }

    </script>
@endsection
