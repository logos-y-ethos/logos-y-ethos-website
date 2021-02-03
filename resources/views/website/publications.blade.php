@extends('layouts.website')

@section('title', '| Publicaciones')

@section('nav')

    @include('website.components.nav', ['active' => 'publicaciones'])

@endsection

@section('content')

    <div class="publications-container">
        <div class="publicactions-aside">
            <h1>PUBLICACIONES</h1>
            @foreach ($publications as $publication)
                <div class="card">
                    REVISTA N° {{ $publication->code }}<br>
                    <span>{{ $publication->title }}</span>
                    <img src="{{ asset('images' . $publication->cover) }}" alt="">
                    <a href="#">VER REVISTA</a>
                </div>
            @endforeach
        </div>
        <div class="publications-view">
            {{-- <h1>PUBLICACIONES</h1> --}}

            <div class="view-pdf">

                @if (count($publications) > 0)

                    <div class="title">
                        <span>{{ $publications[0]->title }}</span>
                        <span>
                            <a href="#pdf-info">Información</a>
                        </span>
                    </div>

                    {{-- <div id="example1"></div> --}}

                    <iframe id="publication-iframe"
                        src="http://docs.google.com/viewer?url=http://www.africau.edu/images/default/sample.pdf&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
                        width="100%" height="100vh" style="width: 100%; height: calc(100vh - 150px);" frameborder="0"
                        scrolling="no"></iframe>

                    {{-- <iframe
                        src={{ 'http://docs.google.com/viewer?url=' . asset('files' . $publications[0]->file) . '&pid=explorer&efh=false&a=v&chrome=false&embedded=true' }}
                        width="100%" height="100vh" style="width: 100%; height: calc(100vh - 150px);" frameborder="0"
                        scrolling="no"></iframe> --}}

                    {{-- <a href="{{ asset('files' . $publications[0]->file) }}">Download</a>
                    <embed src="{{ asset('files' . $publications[0]->file) }}" type="">

                    <iframe src="{{ asset('files' . $publications[0]->file) }}" width="100%" height="500px">
                    </iframe> --}}

                    <div class="info" id="pdf-info">
                        <div class="about">
                            REVISTA N° {{ $publications[0]->code }}<br>
                            <span>{{ $publications[0]->title }}</span>
                            <img src="{{ asset('images' . $publications[0]->cover) }}" alt="">
                        </div>
                        <div class="description">
                            <p>
                                <b>Título: </b>
                                {{ $publications[0]->title }}
                            </p>
                            <p>
                                <b>Fecha:</b>
                                {{ $publications[0]->date }}
                            </p>
                            <p>
                                <b>Sobre la revista:</b><br>
                                {!! nl2br($publications[0]->description) !!}
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
