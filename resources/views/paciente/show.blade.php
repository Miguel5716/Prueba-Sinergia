@extends('layouts.app')

@section('template_title')
    {{ $paciente->name ?? 'Show Paciente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong> Tipo Documento Id:</strong>
                            {{ $paciente-> tipo_documento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Documento:</strong>
                            {{ $paciente->numero_documento }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre1:</strong>
                            {{ $paciente->nombre1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre2:</strong>
                            {{ $paciente->nombre2 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido1:</strong>
                            {{ $paciente->apellido1 }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido2:</strong>
                            {{ $paciente->apellido2 }}
                        </div>
                        <div class="form-group">
                            <strong> Genero Id:</strong>
                            {{ $paciente-> genero_id }}
                        </div>
                        <div class="form-group">
                            <strong>Departamento Id:</strong>
                            {{ $paciente->departamento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio Id:</strong>
                            {{ $paciente->municipio_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
