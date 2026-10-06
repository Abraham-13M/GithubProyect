@extends('template.base')

@section('title')
Array
@endsection

@section('content')

<section class="page-section portfolio" id="portfolio">
    <div class="container">

        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
            Listado de alumnos
        </h2>

        <div class="divider-custom">
            <div class="divider-custom-line"></div>

            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>

            <div class="divider-custom-line"></div>
        </div>

        <div class="text-center mb-5">
            {{ $grupo }}
            <br>
            Profesor: {{ $profesor }}
        </div>

        <div class="row justify-content-center">

            @foreach($alumnos as $alumno)

                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto">

                        @if($alumno['numero'] < 20)

                            <img class="img-fluid"
                                src="{{ asset('assets/img/portfolio/cabin.png') }}"
                                alt="..." />

                        @else

                            <img class="img-fluid"
                                src="{{ asset('assets/img/portfolio/safe.png') }}"
                                alt="..." />

                        @endif

                        <br>

                        {{ $alumno['nombre'] }}

                        <br>

                        <span>2 DAW A</span>

                    </div>
                </div>

            @endforeach

        </div>

    </div>
</section>

@endsection

