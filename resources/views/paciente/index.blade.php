@extends('layouts.app')

@section('template_title')
    Paciente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Paciente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pacientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th> Tipo Documento Id</th>
										<th>Numero Documento</th>
										<th>Nombre1</th>
										<th>Nombre2</th>
										<th>Apellido1</th>
										<th>Apellido2</th>
										<th> Genero Id</th>
										<th>Departamento Id</th>
										<th>Municipio Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pacientes as $paciente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $paciente-> tipo_documento_id }}</td>
											<td>{{ $paciente->numero_documento }}</td>
											<td>{{ $paciente->nombre1 }}</td>
											<td>{{ $paciente->nombre2 }}</td>
											<td>{{ $paciente->apellido1 }}</td>
											<td>{{ $paciente->apellido2 }}</td>
											<td>{{ $paciente-> genero_id }}</td>
											<td>{{ $paciente->departamento_id }}</td>
											<td>{{ $paciente->municipio_id }}</td>

                                            <td>
                                                <form action="{{ route('pacientes.destroy',$paciente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pacientes.show',$paciente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pacientes.edit',$paciente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pacientes->links() !!}
            </div>
        </div>
    </div>
@endsection
