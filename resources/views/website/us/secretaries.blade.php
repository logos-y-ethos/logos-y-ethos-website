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

            <section>
                <button class="collapsible active">
                    <h4>SECRETARÍA DE EVENTOS ACADÉMICOS</h4>
                </button>
                <div class="content">
                    <div class="left-content">
                        <article class="members">
                            <p>
                                <b>Secretaria General: </b>
                                <i>Xiomara Carolina Roncal Cueva</i>
                                <a href="mailto:xroncal@unitru.edu.pe">xroncal@unitru.edu.pe</a>
                            </p>
                            <p>
                                <b>Secretaria Adjunta: </b>
                                <i>Milagros Aubanel Lozano Ulloa</i>
                                <a href="mailto:mlozanou@unitru.edu.pe">mlozanou@unitru.edu.pe</a>
                            </p>
                        </article>
                        <article>
                            <p>
                                La Secretaría de Eventos Académicos de la Asociación Circulo de Estudios “Logos y Ethos”, es la
                                encargada de celebrar los distintos eventos académicos que contribuyan a la formación
                                profesional y personal de la comunidad universitaria jurídica. Tiene como objetivo establecer la
                                interacción entre esta y el círculo de estudios, respondiendo a sus necesidades académicas; en
                                concordancia con los principios de espíritu crítico e investigación, e interdisciplinariedad.
                            </p>
                            <p>
                                Del mismo modo, nos corresponde lograr la oficialización de los eventos realizados por el
                                círculo de estudios, garantizando la participación de las autoridades universitarias
                                correspondientes a dichos acontecimientos.
                            </p>
                        </article>
                        <article>
                            <b>Perfil de sus integrantes</b>
                            <p>
                                La Secretaría de “Eventos Académicos” precisa que sus miembros posean habilidades de
                                comunicación escrita y verbal, de negociación, de investigación, así también, habilidad numérica
                                para trabajar con los presupuestos, destreza para la gestión de proyectos y con las tecnologías
                                de la información y la comunicación (TIC), por último, resistencia para trabajar durante
                                jornadas largas y, a menudo, bajo presión.
                            </p>
                        </article>
                    </div>
                    <div class="photos">
                        <img src="{{ asset('images/us/Xiomara Carolina Roncal Cueva.jpg') }}" alt="">
                        <img src="{{ asset('images/us/Milagros Aubanel Lozano Ulloa.png') }}" alt="">
                    </div>
                </div>
            </section>
            <section>
                <button class="collapsible active">
                    <h4>SECRETARÍA DE PUBLICACIONES</h4>
                </button>
                <div class="content">
                    <div class="left-content">
                        <article class="members">
                            <p>
                                <b>Secretario General: </b>
                                <i>Alessandro Carlos Alfredo Reymundo Vilca</i>
                                <a href="mailto:areymundo@unitru.edu.pe">areymundo@unitru.edu.pe </a>
                            </p>
                        </article>
                        <article>
                            <p>
                                La Secretaría de Publicaciones es la encargada de publicar y difundir textos de índole
                                académica concernientes a la disciplina jurídica y las demás áreas que se relacionan con esta.
                                Asimismo, tiene como una de sus facultades principales la elaboración y planificación de
                                proyectos académicos para estudiantes, docentes, investigadores y operadores del derecho en su
                                totalidad. Por ello, la selección de contenidos actualizados, relevantes e idóneos para el mundo
                                jurídico es catalogada como un tema sustancioso y fundamental para quienes componen esta
                                secretaría.
                            </p>
                        </article>
                        <article>
                            <b>Perfil de sus integrantes</b>
                            <p>
                                - Creativo: La organización de órganos de publicación y difusión académica requieren gran
                                creatividad, puesto que es necesario ordenar los artículos y el diseño gráfico de manera que sea
                                atractivo para los lectores.<br />
                                - Ingenioso: La recolección de artículos y escritos es una tarea que requiere de diversos
                                recursos, ya que encontrar autores dignos de publicación es un proceso que requiere de tiempo y
                                de bastantes medios.<br />
                                - Organizado: Para poder editar un medio de difusión académico, se tiene que ser esquemático y
                                saber la mejor manera de clasificar los tiempos y tareas.<br />
                                - Inquisitivo: Para la revisión de los escritos, es necesario tener un alto criterio
                                ortográfico, conocimiento intelectual y metodológico, con la finalidad de identificar los yerros
                                que pueda tener el documento. <br />
                            </p>
                        </article>
                    </div>
                    <div class="photos">
                        <img src="{{ asset('images/us/Alessandro Carlos Alfredo Reymundo Vilca.png') }}" alt="">
                    </div>
                </div>
            </section>
            <section>
                <button class="collapsible active">
                    <h4>SECRETARÍA DE INVESTIGACIÓN ACADÉMICA</h4>
                </button>
                <div class="content">
                    <div class="left-content">
                        <article class="members">
                            <p>
                                <b>Secretaria General: </b>
                                <i>Emily Shantal Lozano Rodríguez.</i>
                                <a href="mailto:elozanor@unitru.edu.pe">elozanor@unitru.edu.pe</a>
                            </p>
                        </article>
                        <article>
                            <p>
                                La Secretaría de Investigación tiene como objetivo principal, el dar respuesta a diferentes
                                problemas jurídicos desde las distintas ramas del Derecho a través de la investigación a fin de
                                contribuir desde perspectiva académica a temas de debate actual. Tienen a su cargo la
                                elaboración de un informe semestral en temas jurídicos de actualidad dentro de las diferentes
                                áreas de la ciencia jurídica.; así como publicaciones semanales de las Coordinaciones de
                                Enfoques Jurídicos, Actualidad Jurídica y Enfoque Interdisciplinario.
                            </p>
                        </article>
                        <article>
                            <b>Perfil de sus integrantes</b>
                            <p>
                                Esta secretaría busca que nuestros colaboradores sean personas comprometidas y apasionadas por
                                la Investigación Jurídica, que tengan curiosidad por resolver grandes problemas relacionadas al
                                Derecho. Asimismo, tengan capacidad de síntesis y organización.
                            </p>
                        </article>
                    </div>
                    <div class="photos">
                        <img src="{{ asset('images/us/Emily Shantal Lozano Rodriguez.png') }}" alt="">
                    </div>
                </div>
            </section>
            <section>
                <button class="collapsible active">
                    <h4>SECRETARÍA DE FINANCIAMIENTO</h4>
                </button>
                <div class="content">
                    <div class="left-content">
                        <article class="members">
                            <p>
                                <b>Secretaria General: </b>
                                <i>Estefani Verde Rodríguez</i>
                                <a href="mailto:esverder@unitru.edu.pe">esverder@unitru.edu.pe</a>
                            </p>
                        </article>
                        <article>
                            <p>
                                La Secretaría de Financiamiento orienta su trabajo a la realización de actividades, de una
                                manera trasparente, productiva y honesta; siendo su principal objetivo el de solventar
                                económicamente a la asociación, a fin de que, en una conjunta labor con las demás se logre un
                                oportuno y eficaz desenvolvimiento.
                            </p>
                            <p>
                                Desarrolla su trabajo guiado por la búsqueda del logro de objetivos, tales como:
                                - Planificar actividades destinadas a la recolección de fondos que permitan el financiamiento y
                                mantenimiento de la Asociación Círculo de Estudios “Logos y Ethos” <br />
                                - Estimar costos e ingresos de cada actividad, con la finalidad de priorizar aquellas con
                                menores gastos, que solventen las siguientes actividades. <br />
                                - Contribuir a la mejora de las condiciones de trabajo de la asociación mediante la intervención
                                económica.<br />
                            </p>
                        </article>
                        <article>
                            <b>Perfil de sus integrantes</b>
                            <p>
                                El miembro de la Secretaría de Financiamiento debe ser una persona comprometida con las
                                actividades emprendidas por la asociación, ser responsable y con disponibilidad de tiempo para
                                participar de las reuniones y planificación de actividades convocadas por la Secretaría de
                                Financiamiento.
                            </p>
                            <p>
                                Tener la iniciativa de aportar con ideas o estrategias innovadoras y originales con el fin de
                                lograr un buen desempeño de la secretaría; ello con la finalidad de ejecutar idóneamente las
                                actividades planificadas con la rigurosidad pertinente.
                            </p>
                        </article>
                    </div>
                    <div class="photos">
                        <img src="{{ asset('images/us/Estefani Verde Rodriguez.png') }}" alt="">
                    </div>
                </div>
            </section>
            <section>
                <button class="collapsible active">
                    <h4>SECRETARÍA DE ÉTICA INSTITUCIONAL Y RR.HH.</h4>
                </button>
                <div class="content">
                    <div class="left-content">
                        <article class="members">
                            <p>
                                <b>Secretaria General: </b>
                                <i>María Alexandra de los Milagros Vasquez Correa</i>
                                <a href="mailto:mmvasquezc@unitru.edu.pe">mmvasquezc@unitru.edu.pe</a>
                            </p>
                        </article>
                        <article>
                            <p>
                                La Secretaría de Ética Institucional tiene como objetivo asegurar el compromiso ético de la
                                producción jurídico científica de la asociación, así como fiscalizar las actividades de las
                                demás secretarías, amparados bajo el principio de la ética institucional y difusión de la
                                verdad.
                            </p>
                            <p>
                                Asimismo, cumple con velar por el cumplimiento de las normas internas y busca prevenir acciones
                                que contravengan los principios establecidos.
                            </p>
                        </article>
                        <article>
                            <b>Perfil de sus integrantes</b>
                            <p>
                                El perfil idóneo de un miembro de la Secretaría de Ética Institucional es, el ser afines a la
                                práctica de valores, deben estar preparadas para interactuar constantemente con todos los
                                miembros de la asociación, velando por el bienestar y correcto desarrollo de la misma. Haber
                                tenido una conducta intachable a lo largo de la carrera y finalmente, contar con compromiso y
                                organización.
                            </p>
                        </article>
                    </div>
                    <div class="photos">
                        <img src="{{ asset('images/us/Maria Alexandra de los Milagros Vasquez Correa.png') }}" alt="">
                    </div>
                </div>
            </section>
            <section>
                <button class="collapsible active">
                    <h4>SECRETARÍA DE IMAGEN INSTITUCIONAL</h4>
                </button>
                <div class="content">
                    <div class="left-content">
                        <article class="members">
                            <p>
                                <b>Secretario General: </b>
                                <i>Norvin Stalin Mostacero Cabrera</i>
                                <a href="mailto:nmostaceroc@unitru.edu.pe">nmostaceroc@unitru.edu.pe</a>
                            </p>
                        </article>
                        <article>
                            <p>
                                La Secretaría de Imagen Institucional tiene como objetivo principal, gestionar, posicionar y
                                difundir la imagen del Círculo de Estudios Logos y Ethos hacia el público. Para ello, se encarga
                                de la creación y difusión de distintas campañas publicitarias y líneas gráficas de diseño para
                                promocionar los distintos eventos y productos de la Asociación. La secretaría administra y crea
                                contenido innovador para la página web y las diferentes redes sociales de la Asociación.
                            </p>
                        </article>
                        <article>
                            <b>Perfil de sus integrantes</b>
                            <p>
                                El miembro de la Secretaría de Imagen Institucional debe ser una persona creativa e innovadora,
                                capaz de proponer ideas nuevas y únicas para la creación de las distintas líneas gráficas y
                                campañas publicitarias. El miembro integrante debe ser minucioso, detallista y con buen gusto,
                                lo que implica buen criterio en combinación de colores, en contrastes, manejo de figuras, formas
                                y ubicación espacial de estas en el diseño, entre otros. De esta forma, el miembro de la
                                secretaría debe ser capaz de elaborar diseños que causen gran impacto visual e interacción en el
                                público.
                            </p>
                        </article>
                    </div>
                    <div class="photos">
                        <img src="{{ asset('images/us/Norvin Stalin Mostacero Cabrera.jpg') }}" alt="">
                    </div>
                </div>
            </section>
            <section>
                <button class="collapsible active">
                    <h4>SECRETARÍA DE RELACIONES INTERINSTITUCIONALES</h4>
                </button>
                <div class="content">
                    <div class="left-content">
                        <article class="members">
                            <p>
                                <b>Secretaria General: </b>
                                <i>María Helena de los Ángeles Herrera Mendoza</i>
                                <a href="mailto:maherreram@unitru.edu.pe">maherreram@unitru.edu.pe</a>
                            </p>
                        </article>
                        <article>
                            <p>
                                La Secretaría de Relaciones Interinstitucionales tiene como objetivo principal, fomentar, pactar
                                y establecer acuerdos y relaciones de cercanía de la Asociación Círculo de Estudios Logos y
                                Ethos, con otras instituciones, y ponentes en colaboración.
                            </p>
                            <p>
                                Asimismo, la permanente búsqueda de establecer lazos de trabajo, asegurando un respeto y apoyo
                                mutuo interinstitucional.
                            </p>
                        </article>
                        <article>
                            <b>Perfil de sus integrantes</b>
                            <p>
                                • Capacidad de diálogo y persuasión<br />
                                • Actitud seria, integra y segura <br />
                                • Actitud proactiva y resolutiva<br />
                                • Tener iniciativa<br />
                            </p>
                        </article>
                    </div>
                    <div class="photos">
                        <img src="{{ asset('images/us/Maria Helena de los Angeles Herrera Mendoza.png') }}" alt="">
                    </div>
                </div>
            </section>

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
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                } else {
                    content.style.maxHeight = content.scrollHeight + 15 + "px";
                }
            });
        }

    </script>
@endsection
