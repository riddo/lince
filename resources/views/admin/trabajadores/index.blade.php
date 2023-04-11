@extends('admin.templates.layout')
@section('content')
    <h1>Lista de trabajadores</h1>
    <div class="card-block ">
        <a href="{{ route('form.trabajador') }}" class="btn btn-primary waves-effect waves-light float-right"> <i
                class="fa fa-plus" aria-hidden="true"></i>
            Agregar</a>
    </div>

    <div class="card">
        <div class="card-header table-card-header">
            <h5>Lista de trabajadores</h5>
        </div>
        <div class="card-block">

            <div class="">
                <table id="tablaTrabajadores" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre Completo</th>
                            <th>RUN</th>
                            <th>Estado Civil</th>
                            <th>Fecha Nac</th>
                            <th>Dirección</th>
                            <th>Correo</th>
                            <th>Fono</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trabajadores as $trabajador)
                            <tr>
                                <td>{{ $trabajador->id }}</td>
                                <td>{{ $trabajador->nombreCompleto }}</td>
                                <td>{{ $trabajador->rut }}</td>
                                <td>{{ $trabajador->estadoCivil }}</td>
                                <td>{{ \Carbon\Carbon::parse($trabajador->fecha_nac)->format('d-m-Y') }}</td>
                                <td>{{ $trabajador->direccion }}</td>
                                <td>{{ $trabajador->email }}</td>
                                <td>{{ $trabajador->fono }}</td>
                                <td>
                                    <a href=""class="btn waves-effect waves-light btn-info"><i
                                            class="fa fa-upload" aria-hidden="true"></i>Subir documentos
                                    </a>
                                    <a
                                        href=""class="btn waves-effect waves-light btn-warning"><i
                                        class="fas fa-edit"></i> Editar Trabajador
                                    </a>
                                    <a
                                        href=""class="btn waves-effect waves-light btn-danger"><i class="fas fa-thumbs-down"></i> Dar de baja
                                    </a>
                                </td>
                                {{-- <td>
                                    <a
                                        href="{{ route('admin.empresas.show', $empresa->id) }}"class="btn waves-effect waves-light btn-info"><i
                                            class="fa fa-eye"aria-hidden="true"></i></a>
                                    <a
                                        href="{{ route('admin.empresas.edit', $empresa->id) }}"class="btn waves-effect waves-light btn-warning"><i
                                            class="fas fa-edit"></i></a>

                                    <button
                                        onclick="event.preventDefault();
                                        swal({
                                        title: 'Estás seguro de eliminar?',
                                        text: 'No podrás recuperar este elemento una vez eliminado!',
                                        type: 'warning' ,
                                        showCancelButton: true, confirmButtonClass: 'btn-danger' ,
                                        confirmButtonText: 'Si, eliminar!' , cancelButtonText: 'No, cancelar!' ,
                                        closeOnConfirm: false,
                                        closeOnCancel: false
                                        },
                                        function(isConfirm) {
                                            if (isConfirm)
                                            {
                                                document.getElementById('delete-company-form-{{ $empresa->id }}').submit();

                                            } else {
                                            swal('Cancelar', 'La empresa no se ha eliminado' , 'error' ); } } )
                                            "
                                        class="btn waves-effect waves-light btn-danger modal-eliminar" type="button">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                    <form
                                        id="delete-company-form-{{ $empresa->id }}"action="{{ route('admin.empresas.destroy', $empresa->id) }}"
                                        method="POST" style="display: none">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td> --}}
                            </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Nombre Completo</th>
                            <th>RUN</th>
                            <th>Estado Civil</th>
                            <th>Fecha Nac</th>
                            <th>Dirección</th>
                            <th>Correo</th>
                            <th>Fono</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
