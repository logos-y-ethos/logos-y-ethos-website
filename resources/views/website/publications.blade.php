@extends('layouts.website')

@section('title', '| Publicaciones')

@section('nav')

    @include('website.components.nav', ['active' => 'publicaciones'])

@endsection

@section('content')

    <div class="publications-container">
        <div class="publicactions-aside">
            <h1>PUBLICACIONES</h1>
            <div class="card">
                REVISTA N° 2020-12<br>
                <span>Augurium</span>
                <img src="{{ asset('images/publications/magazine.png') }}" alt="">
                <a href="#">VER REVISTA</a>
            </div>
            <div class="card">
                REVISTA N° 2020-12<br>
                <span>Augurium</span>
                <img src="{{ asset('images/publications/magazine.png') }}" alt="">
                <a href="#">VER REVISTA</a>
            </div>
            <div class="card">
                REVISTA N° 2020-12<br>
                <span>Augurium</span>
                <img src="{{ asset('images/publications/magazine.png') }}" alt="">
                <a href="#">VER REVISTA</a>
            </div>
            <div class="card">
                REVISTA N° 2020-12<br>
                <span>Augurium</span>
                <img src="{{ asset('images/publications/magazine.png') }}" alt="">
                <a href="#">VER REVISTA</a>
            </div>
            <div class="card">
                REVISTA N° 2020-12<br>
                <span>Augurium</span>
                <img src="{{ asset('images/publications/magazine.png') }}" alt="">
                <a href="#">VER REVISTA</a>
            </div>
            <div class="card">
                REVISTA N° 2020-12<br>
                <span>Augurium</span>
                <img src="{{ asset('images/publications/magazine.png') }}" alt="">
                <a href="#">VER REVISTA</a>
            </div>
            <div class="card">
                REVISTA N° 2020-12<br>
                <span>Augurium</span>
                <img src="{{ asset('images/publications/magazine.png') }}" alt="">
                <a href="#">VER REVISTA</a>
            </div>
        </div>
        <div class="publications-view">
            {{-- <h1>PUBLICACIONES</h1> --}}

            <div class="view-pdf">

                <div class="title">
                    <span>Augurium</span>
                    <span>
                        <a href="#pdf-info">Información</a>
                    </span>
                </div>

                {{-- <div id="example1"></div> --}}

                <iframe
                    src="http://docs.google.com/viewer?url=http://www.africau.edu/images/default/sample.pdf&pid=explorer&efh=false&a=v&chrome=false&embedded=true"
                    width="100%" height="100vh" style="width: 100%; height: calc(100vh - 150px);" frameborder="0" scrolling="no"></iframe>


                <div class="info" id="pdf-info">
                    <div class="about">
                        REVISTA N° 2020-12<br>
                        <span>Augurium</span>
                        <img src="{{ asset('images/publications/magazine.png') }}" alt="">
                    </div>
                    <div class="description">
                        <p>
                            <b>Título: </b>
                            Augurium
                        </p>
                        <p>
                            <b>Fecha:</b>
                            20-12-2020
                        </p>
                        <p>
                            <b>Sobre la revista:</b><br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor accusantium consectetur, sed
                            maxime
                            dicta cumque explicabo ea beatae. Veniam eius quo eum error, corrupti aliquam esse
                            exercitationem
                            deleniti eveniet rerum.<br>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor accusantium consectetur, sed
                            maxime
                            dicta cumque explicabo ea beatae. Veniam eius quo eum error, corrupti aliquam esse
                            exercitationem
                            deleniti eveniet rerum.
                        </p>



                    </div>
                </div>
            </div>
        </div>

    @endsection

    @section('scripts')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.4/pdfobject.min.js"></script>
        <script>
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
