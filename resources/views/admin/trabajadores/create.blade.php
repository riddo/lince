@extends('admin.templates.layout')
@section('content')
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-box bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Formulario de registro</h5>
                        <span>Completa el formulario para registrar un trabajador</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title breadcrumb-padding">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('trabajadores') }}">Lista de trabajadores</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('form.trabajador') }}">Registro de trabajadors</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="card">

        <div class="card-block">
            <form method="POST" action="{{ route('guardar.trabajador') }}">
                @include('admin.partials.form', ['create' => true])
            </form>

        </div>
    </div>
@endsection
