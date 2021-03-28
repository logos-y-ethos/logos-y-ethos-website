@extends('layouts.website')

@section('title', '| Contacto')

@section('nav')

    @include('website.components.nav', ['active' => 'contacto'])

@endsection

@section('content')

    {{-- Facebook --}}
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v9.0&appId=2420237788122119&autoLogAppEvents=1"
        nonce="ssoJcdRV"></script>

    {{-- Linkedin --}}
    <script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>

    <div>

        <section class="contact-section" style="background: url({{ asset('images/contact/contact-bg.png') }}); background-position: top; background-size: cover;">
                <header>
                    <h1>CONTACTO</h1>
                </header>
                <div class="social">
                    <p>
                        Siguenos en nuestras <br /> redes sociales
                    </p>
                    <p>
                        <a href="https://www.facebook.com/celogosyethos" target="_blank" rel="noopener noreferrer">
                            <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.919922 15.5029C0.921619 22.677 6.13842 28.7855 13.2239 29.9098V19.7175H9.52409V15.5029H13.2283V12.2946C13.0627 10.7744 13.5819 9.25922 14.6452 8.16013C15.7085 7.06104 17.2056 6.49192 18.7305 6.60711C19.8251 6.62478 20.9169 6.72226 21.9972 6.89877V10.4848H20.1539C19.5193 10.4017 18.8813 10.6113 18.4196 11.0545C17.9579 11.4978 17.7225 12.1267 17.7797 12.7642V15.5029H21.8208L21.1747 19.719H17.7797V29.9098C25.4425 28.6988 30.8159 21.7005 30.0071 13.9849C29.1984 6.26931 22.4905 0.537418 14.7432 0.94174C6.99587 1.34606 0.921153 7.74505 0.919922 15.5029Z"
                                    fill="#FFFFFF" />
                            </svg>
                        </a>
                        <a href="https://instagram.com/celogosyethos" target="_blank" rel="noopener noreferrer">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.5029 26.6847C9.91543 26.6847 9.49251 26.6658 8.09251 26.6045C7.00076 26.5686 5.92315 26.3467 4.90605 25.9483C3.1463 25.2634 1.7548 23.8714 1.07064 22.1114C0.687543 21.0906 0.480914 20.0121 0.459596 18.922C0.37793 17.5249 0.37793 17.067 0.37793 13.5072C0.37793 9.90953 0.396888 9.48953 0.459596 8.09682C0.48138 7.00821 0.688002 5.93121 1.07064 4.91182C1.75406 3.14947 3.14782 1.75624 4.91043 1.07349C5.92929 0.688785 7.00656 0.481617 8.09543 0.46099C9.48814 0.38224 9.94606 0.38224 13.5029 0.38224C17.1196 0.38224 17.5352 0.401199 18.9133 0.46099C20.005 0.481796 21.0852 0.688942 22.1071 1.07349C23.8692 1.75702 25.2627 3.14998 25.9469 4.91182C26.3364 5.94606 26.5442 7.0399 26.5608 8.14495C26.6425 9.54203 26.6425 9.99849 26.6425 13.5568C26.6425 17.1152 26.6221 17.5818 26.5608 18.9629C26.5391 20.054 26.332 21.1335 25.9483 22.1552C25.2624 23.9164 23.8689 25.3089 22.1071 25.9935C21.0866 26.3758 20.0087 26.5825 18.9192 26.6045C17.5265 26.6847 17.07 26.6847 13.5029 26.6847ZM13.4533 2.69078C9.88626 2.69078 9.51585 2.70828 8.12314 2.77099C7.29187 2.782 6.46863 2.9354 5.68918 3.22453C4.53819 3.66496 3.62743 4.57202 3.1823 5.7212C2.89095 6.50913 2.73752 7.34138 2.72876 8.18141C2.65147 9.59453 2.65147 9.96495 2.65147 13.5072C2.65147 17.0072 2.6646 17.4316 2.72876 18.836C2.74182 19.6675 2.89515 20.4909 3.1823 21.2714C3.62808 22.4198 4.53869 23.3262 5.68918 23.7666C6.4681 24.0577 7.29167 24.2111 8.12314 24.2202C9.53481 24.3018 9.90668 24.3018 13.4533 24.3018C17.0306 24.3018 17.4011 24.2843 18.7821 24.2202C19.6139 24.21 20.4378 24.0566 21.2175 23.7666C22.3615 23.3224 23.2664 22.4181 23.7113 21.2743C24.0021 20.4857 24.1555 19.6531 24.1648 18.8127H24.1808C24.2436 17.4185 24.2436 17.0466 24.2436 13.4839C24.2436 9.9212 24.2275 9.54641 24.1648 8.1537C24.1517 7.32311 23.9984 6.50069 23.7113 5.7212C23.2674 4.57578 22.3624 3.66975 21.2175 3.22453C20.438 2.93395 19.614 2.7805 18.7821 2.77099C17.3719 2.69078 17.0029 2.69078 13.4533 2.69078ZM13.5029 20.2433C10.7758 20.2451 8.31625 18.6037 7.27127 16.0848C6.22629 13.5658 6.80175 10.6654 8.72927 8.73625C10.6568 6.80706 13.5567 6.22909 16.0765 7.27189C18.5964 8.31469 20.2398 10.7728 20.2404 13.4999C20.2364 17.2202 17.2232 20.236 13.5029 20.2433ZM13.5029 9.12203C11.0867 9.12203 9.12793 11.0808 9.12793 13.497C9.12793 15.9133 11.0867 17.872 13.5029 17.872C15.9192 17.872 17.8779 15.9133 17.8779 13.497C17.8723 11.0831 15.9168 9.12764 13.5029 9.12203ZM20.5029 8.08225C19.6358 8.07902 18.9351 7.37435 18.9367 6.50725C18.9383 5.64016 19.6417 4.93808 20.5088 4.93808C21.3759 4.93808 22.0792 5.64014 22.0808 6.50724C22.0812 6.92558 21.915 7.32686 21.6189 7.6224C21.3229 7.91793 20.9213 8.0834 20.5029 8.08225Z"
                                    fill="#FFFFFF" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/acelogosyethos" target="_blank" rel="noopener noreferrer">
                            <svg width="31" height="26" viewBox="0 0 31 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M27.1601 4.75333C28.4674 3.97179 29.4456 2.74117 29.912 1.29124C28.6836 2.02012 27.3396 2.53356 25.938 2.80937C23.9949 0.753888 20.9163 0.253677 18.4224 1.58824C15.9285 2.92281 14.6367 5.76175 15.2689 8.51874C10.2371 8.26612 5.54904 5.88925 2.37138 1.97958C0.713022 4.83998 1.56048 8.49655 4.30805 10.3358C3.3145 10.3039 2.34298 10.0349 1.47451 9.55124C1.47451 9.57749 1.47451 9.60374 1.47451 9.62999C1.47508 12.6096 3.57505 15.1762 6.49555 15.7667C5.57397 16.0174 4.60731 16.0543 3.6693 15.8746C4.49063 18.4227 6.83906 20.1683 9.51575 20.2204C7.29884 21.9604 4.56103 22.904 1.74284 22.8994C1.24332 22.9001 0.744187 22.8714 0.248047 22.8133C3.10986 24.6523 6.44067 25.6284 9.84242 25.625C14.5751 25.6575 19.1233 23.7917 22.4697 20.445C25.8162 17.0983 27.6816 12.5499 27.6487 7.81728C27.6487 7.54603 27.6423 7.27624 27.6297 7.00791C28.8554 6.12212 29.9132 5.02479 30.7535 3.76749C29.6116 4.27363 28.4004 4.60592 27.1601 4.75333Z"
                                    fill="#FFFFFF" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/ethos_y" target="_blank" rel="noopener noreferrer">
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.9583 26.625H9.125V9.125H14.9583V12.0417C16.2018 10.4597 18.0874 9.51667 20.099 9.47062C23.7165 9.49071 26.6355 12.4345 26.625 16.0521V26.625H20.7917V16.7812C20.5584 15.1517 19.1609 13.9427 17.5148 13.9462C16.7948 13.969 16.1151 14.2843 15.6327 14.8192C15.1503 15.3542 14.9068 16.0627 14.9583 16.7812V26.625ZM6.20833 26.625H0.375V9.125H6.20833V26.625ZM3.29167 6.20833C1.68084 6.20833 0.375 4.9025 0.375 3.29167C0.375 1.68084 1.68084 0.375 3.29167 0.375C4.9025 0.375 6.20833 1.68084 6.20833 3.29167C6.20833 4.06521 5.90104 4.80708 5.35406 5.35406C4.80708 5.90104 4.06521 6.20833 3.29167 6.20833Z"
                                    fill="#FFFFFF" />
                            </svg>
                        </a>
                        <a href="https://www.youtube.com/channel/UCJgS6cOz3I1x6lCWZlDLppA" target="_blank"
                            rel="noopener noreferrer">
                            <svg width="31" height="21" viewBox="0 0 31 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.508 20.7258H15.4788C15.3884 20.7258 6.34236 20.7083 4.06007 20.0885C2.80506 19.7504 1.82495 18.7698 1.48757 17.5146C1.07716 15.1993 0.878976 12.8513 0.895483 10.5C0.88488 8.14481 1.08843 5.79353 1.50361 3.47521C1.85026 2.21887 2.82607 1.23367 4.07903 0.874997C6.29861 0.291664 15.0953 0.291664 15.4686 0.291664H15.4992C15.5911 0.291664 24.6605 0.309164 26.9194 0.928956C28.1718 1.26876 29.1499 2.24743 29.489 3.5C29.9125 5.82391 30.1113 8.1832 30.0826 10.5452C30.0928 12.8975 29.8888 15.2459 29.473 17.5612C29.1313 18.8149 28.1505 19.7934 26.8961 20.1323C24.6794 20.72 15.8813 20.7258 15.508 20.7258ZM12.5913 6.13229L12.584 14.8823L20.1849 10.5073L12.5913 6.13229Z"
                                    fill="#FFFFFF" />
                            </svg>
                        </a>
                    </p>
                </div>
                <div class="info">
                    <p>
                        O comunícate a:
                    <p>
                        <a href="mailto:celogosyethos@gmail.com" rel="noopener noreferrer">
                            <svg width="30" height="24" viewBox="0 0 30 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M26.25 23.3333H2.91667C1.30584 23.3333 0 22.0275 0 20.4167V2.78979C0.0679705 1.22872 1.35411 -0.00147638 2.91667 1.32987e-06H26.25C27.8608 1.32987e-06 29.1667 1.30584 29.1667 2.91667V20.4167C29.1667 22.0275 27.8608 23.3333 26.25 23.3333ZM2.91667 5.64084V20.4167H26.25V5.64084L14.5833 13.4167L2.91667 5.64084ZM4.08333 2.91667L14.5833 9.91667L25.0833 2.91667H4.08333Z"
                                    fill="#FFFFFF" />
                            </svg>
                            celogosyethos@gmail.com
                        </a>
                    </p>
                    <p>
                        <a href="tel:+51968883917" rel="noopener noreferrer">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21.292 27.7168H21.2512C15.6487 27.5789 10.3024 25.3419 6.27116 21.4489C2.37671 17.4213 0.138425 12.077 0.000161546 6.47615C-0.00808861 5.69156 0.299965 4.93667 0.854913 4.38198L4.81283 0.42698C5.38231 -0.142327 6.30543 -0.142327 6.87491 0.42698L12.7082 6.26031C13.2776 6.82979 13.2776 7.75292 12.7082 8.3224L10.3807 10.6455C10.8124 12.2583 11.6076 13.7509 12.7053 15.0089C13.961 16.107 15.4517 16.9027 17.0628 17.3349L19.3962 15.0103C19.9656 14.441 20.8888 14.441 21.4582 15.0103L27.2916 20.8436C27.8609 21.4131 27.8609 22.3363 27.2916 22.9057L23.3337 26.8622C22.794 27.4075 22.0592 27.715 21.292 27.7168ZM5.84095 3.52156H5.83366L2.917 6.44406C3.03592 11.2838 4.96788 15.9024 8.33033 19.3853C11.8135 22.7466 16.4311 24.6784 21.2701 24.7986L24.197 21.8747L20.417 18.1049L18.5314 19.9891C18.2616 20.2618 17.8942 20.4157 17.5105 20.4164C17.4081 20.4164 17.3059 20.4056 17.2057 20.3843C14.7756 19.8467 12.5192 18.708 10.6432 17.0724C9.00766 15.1964 7.86893 12.94 7.33137 10.5099C7.22996 10.0268 7.37977 9.52528 7.7295 9.17698L9.61366 7.29135L5.84095 3.52156Z"
                                    fill="#FFFFFF" />
                            </svg>
                            968 883 917
                        </a>
                    </p>
                </div>
        </section>

        <section class="contact-social-embeds">

            <div class="fb-page" data-href="https://www.facebook.com/celogosyethos/" data-tabs="timeline, messages, events"
                data-width="300px" data-height="" data-small-header="false" data-adapt-container-width="false"
                data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/celogosyethos/" class="fb-xfbml-parse-ignore"><a
                        href="https://www.facebook.com/celogosyethos/">Asociación Círculo de Estudios Logos y Ethos</a>
                </blockquote>
            </div>

            {{-- <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="es_ES" data-type="horizontal" data-theme="dark" data-vanity="acelogosyethos"><a class="LI-simple-link" href='https://pe.linkedin.com/in/acelogosyethos?trk=profile-badge'>Asociación Círculo de Estudios Logos y Ethos</a></div> --}}
            {{-- <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="es_ES" data-type="horizontal" data-theme="light" data-vanity="acelogosyethos"><a class="LI-simple-link" href='https://pe.linkedin.com/in/acelogosyethos?trk=profile-badge'>Asociación Círculo de Estudios Logos y Ethos</a></div> --}}
            {{-- <div class="LI-profile-badge"  data-version="v1" data-size="large" data-locale="es_ES" data-type="horizontal" data-theme="dark" data-vanity="acelogosyethos"><a class="LI-simple-link" href='https://pe.linkedin.com/in/acelogosyethos?trk=profile-badge'>Asociación Círculo de Estudios Logos y Ethos</a></div> --}}
            {{-- <div class="LI-profile-badge"  data-version="v1" data-size="large" data-locale="es_ES" data-type="horizontal" data-theme="light" data-vanity="acelogosyethos"><a class="LI-simple-link" href='https://pe.linkedin.com/in/acelogosyethos?trk=profile-badge'>Asociación Círculo de Estudios Logos y Ethos</a></div> --}}
            <div class="LI-profile-badge"  data-version="v1" data-size="large" data-locale="es_ES" data-type="vertical" data-theme="dark" data-vanity="acelogosyethos"><a class="LI-simple-link" href='https://pe.linkedin.com/in/acelogosyethos?trk=profile-badge'>Asociación Círculo de Estudios Logos y Ethos</a></div>
            {{-- <div class="LI-profile-badge"  data-version="v1" data-size="medium" data-locale="es_ES" data-type="vertical" data-theme="light" data-vanity="acelogosyethos"><a class="LI-simple-link" href='https://pe.linkedin.com/in/acelogosyethos?trk=profile-badge'>Asociación Círculo de Estudios Logos y Ethos</a></div> --}}

            
        </section>

    </div>

    </div>

@endsection
