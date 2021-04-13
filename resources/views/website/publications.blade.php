@extends('layouts.website')

@section('title', '| Publicaciones')

@section('nav')

    @include('website.components.nav', ['active' => 'publicaciones'])

@endsection

@section('content')

    <div class="publications-container">
        <div class="publicactions-aside">
            <header>
                <img src="{{ asset('images/publications/essentia-legis.png') }}" alt="Essentia Legis">
            </header>
            @foreach ($publications as $publication)
                <div class="card">
                    REVISTA N° {{ $publication->code }}<br>
                    <span>{{ $publication->title }}</span>
                    <img src="{{ asset('files' . $publication->cover) }}" alt="{{ $publication->title }}">
                    <a href="{{url('/publicaciones/'.$publication->id)}}">VER REVISTA</a>
                </div>
            @endforeach
        </div>
        <div class="publications-view">
            {{-- <h1>PUBLICACIONES</h1> --}}
            <div class="view-pdf">

                @if (!is_null($publicationToShow))

                    <div class="title">
                        <span>{{ $publicationToShow->title }}</span>
                        <span>
                            <a href="#pdf-info">Información</a>
                        </span>
                    </div>

                    {{-- <div id="example1"></div> --}}

                    {{-- <iframe id="publication-iframe"
                        {{-- src="http://docs.google.com/viewer?url=http://www.africau.edu/images/default/sample.pdf&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
                        src="{{ 'http://docs.google.com/viewer?url='. asset($publication->file) .'&pid=explorer&efh=false&a=v&chrome=false&embedded=true' }}"
                        width="100%" height="100vh" style="width: 100%; height: calc(100vh - 150px);" frameborder="0"
                        scrolling="no"></iframe> --}}

                    <iframe
                        id="publication-iframe"
                        {{-- src={{ 'http://docs.google.com/viewer?url=' . asset('files' . $publicationToShow->file) . '&pid=explorer&efh=false&a=v&chrome=false&embedded=true' }} --}}
                        {{-- src={{ 'http://docs.google.com/viewer?url=http://celogosyethos.com/files/publications/sample.pdf&pid=explorer&efh=false&a=v&chrome=false&embedded=true' }} --}}
                        src={{ 'http://docs.google.com/viewer?url=' . 'http://celogosyethos.com/files' . $publicationToShow->file . '&pid=explorer&efh=false&a=v&chrome=false&embedded=true' }}
                        width="100%" height="100vh" style="width: 100%; height: calc(100vh - 150px);" frameborder="0"
                        scrolling="no"></iframe>

                    {{-- <a href="{{ asset('files' . $publicationToShow->file) }}">Download</a> --}}
                    {{-- <embed src="{{ asset('files' . $publicationToShow->file) }}" type=""> --}}

                    {{-- <iframe src="{{ asset('files' . $publicationToShow->file) }}" width="100%" height="500px"></iframe> --}}

                    <div class="info" id="pdf-info">
                        <div class="about">
                            REVISTA N° {{ $publicationToShow->code }}<br>
                            <span>{{ $publicationToShow->title }}</span><br/>
                            <img src="{{ asset('files' . $publicationToShow->cover) }}" alt="{{ $publicationToShow->title }}">
                        </div>
                        <div class="description">
                            <p>
                                <b>Título: </b>
                                {{ $publicationToShow->title }}
                            </p>
                            <p>
                                <b>Fecha:</b>
                                {{ $publicationToShow->date }}
                            </p>
                            <p>
                                <b>Sobre la revista:</b><br>
                                {!! nl2br($publicationToShow->description) !!}
                            </p>
                        </div>
                    </div>
                @else

                    <div class="title">
                        <span>Pronto estaremos colocando publicaciones a tu disposición.</span>
                    </div>

                @endif
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.4/pdfobject.min.js"></script>
    <script>
        var iframe = document.getElementById('publication-iframe');
        iframe.src = iframe.src;

        // PDFObject.embed("http://www.africau.edu/images/default/sample.pdf", "#example1");
        var options = {
            height: '100%',
            // page: '2',
            pdfOpenParams: {
                view: 'FitV',
                pagemode: 'thumbs',
                search: 'lorem ipsum'
            }
        };

        PDFObject.embed("http://www.africau.edu/images/default/sample.pdf", "#example1", options);

    </script>

@endsection
