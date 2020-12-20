@extends('layouts.argon')
@section('title', 'Inicio')
@section('content')
    @include('layouts.argon_nav_user_2')
    <div class="container-fluid mt-4">
        <h1 class="font-weight-bold text-success ml-4"> Objeto Virtual de Aprendizaje Informática Educativa</h1>
        <hr>
        <div class="card shadow">
            <div class="card-header bg-gradient-info">
                <h2 class="my-0 font-weight-bold text-white text-left">Introducción al Proyecto</h2>
            </div>
            <div class="card-body">
                <p class="card-text text-left">En el marco de la situación actual en donde el mundo gira en torno a la
                    digitalización de los procesos, es importante la innovación, se puede decir que la forma de aprender ha
                    cambiado, y es importante generar estrategias de aprendizaje interactivas que ayuden a retener el
                    conocimiento en la personas, actualmente la materia de Informática Educativa, se lleva a cabo
                    presencialmente a los estudiantes del programa de Ingeniería de Sistemas, el cual se maneja un contenido
                    digitalizado en la plataforma institucional UVirtual.
                    Y debido a la circunstancia de la pandemia, la presencialidad de la materia se pasó a un segundo nivel,
                    por el cual vuelve un impedimento y un obstáculo para el correcto aprendizaje de este conocimiento.
                    El proyecto de IEOVA se hace con el fin de buscar brindar material de apoyo e interactivo a los
                    estudiantes que cursan la materia, por medio de contenido digital y actividades interactivas utilizando
                    herramientas que ofrece el microaprendizaje para la correcta apropiación del contenido.

                </p>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header bg-gradient-info">
                <h2 class="my-0 font-weight-bold text-white text-right">¿Cuál es la problemática?</h2>
            </div>
            <div class="card-body">
                <p class="card-text text-right">En algunos casos, los estudiantes que pasan por la materia de Informática
                    Educativa, tienen dificultad para entender ciertas temáticas dentro su contenido, por lo que suelen
                    tener vacíos informativos o problemas con algún concepto. Y al final, terminan la materia con la
                    posibilidad de pasar, pero sin el buen manejo del conocimiento.
                </p>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header bg-gradient-info">
                <h2 class="my-0 font-weight-bold text-white">Resumen del Proyecto IEOVA
                </h2>
            </div>
            <div class="card-body">
                <p class="card-text text-left">IEOVA es un objeto virtual de aprendizaje desarrollado para la materia de
                    Informática Educativa del programa de Ingeniería de Sistemas de la Universidad Francisco de Paula
                    Santander, con el fin de mejorar y ampliar el conocimiento en dicha materia y garantizar una aceptable
                    retroalimentación de cada una de sus temáticas.</p>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header bg-gradient-info">
                <h2 class="my-0 font-weight-bold text-white text-right">Justificación del IEOVA</h2>
            </div>
            <div class="card-body">
                <p class="card-text text-right">La importancia de la realización de este proyecto recae en cambiar la forma
                    en la que los estudiantes comprendan las temáticas de la materia, de tal manera que funcione como una
                    gran fuente de apoyo, facilitando la forma en la que se enseña el contenido, creando un espacio ameno
                    que fomente la correcta apropiación del aprendizaje del tema, si el proyecto no se logra hacer se
                    tendría que seguir realizando las clases tradicionalmente, sin la capacidad de aprovechar todo el
                    material educativo que ayude a promover el debido aprendizaje del tema, con esto lograremos que el
                    docente pueda suministrar más contenido informativo a sus estudiantes, y que sus estudiantes puedan
                    aprovechar al máximo todo el contenido proporcionado por su docente.
                </p>
            </div>
        </div>
        <div class="card shadow">
            <div class="card-header bg-gradient-info">
                <h2 class="my-0 font-weight-bold text-white">¿Con qué propósito desarrollamos este IEOVA?</h2>
            </div>
            <div class="card-body">
                <p class="card-text">
                    El propósito del Objeto Virtual de Aprendizaje IEOVA, es generar y gestionar el conocimiento a través de
                    micro-learning para generar un proceso más dinámico de aprendizaje a los diferentes usuarios que
                    pertenezcan al Programa de Ingeniería de Sistemas de la Universidad Francisco de Paula Santander,
                    Cúcuta.
                    Los componentes que se van a tratar en la plataforma web se basan en los procesos primordiales que se
                    establecieron según las necesidades del cliente, para este proyecto se manejan los procesos de gestión
                    de estudiantes, y la administración de todo el contenido informativo, multimedia e institucional que se
                    quieran manejar, a su vez se digitalizaran los formatos que verifican la participación y aprobación de
                    este proceso formativo.

                </p>
            </div>
        </div>
        @include('layouts.argon_footer')
    </div>
@endsection
