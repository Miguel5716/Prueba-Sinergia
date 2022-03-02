@extends('layouts.app')

@section('content')

<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       <h1 class=" h1 text-center">PACIENTES REGISTRADOS</h1>
       <div class="row justify-content-center">
         <div class="col-12 ">



<div class="container">
  <div class="container-fluid">
  <div class="card col-sm-12 " >
    <div class="row justify-content-center ">
    <div class="col-12 justify-content-center">
        <div class="nauk-info-connections">

        <div class="card-body border border-success">

<table class="table  col-12 table-responsive">

  <thead>
    <tr>
      <th>id</th>
        <th>Tipo Documento</th>
         <th>No. Documento</th>
         <th>Nombre Completo</th>
             <th>Genero</th>
              <th>Departamento</th>
              <th>Municipio</th>
              <th></th>
              <th></th>


    </tr>
  </thead>

  <tbody>
    <tr>

      @foreach($project as $pa) 
      <td>{{ $pa->id}}</td>
                  <td>{{ $pa->tipo}}</td>
                   <td>{{ $pa->numero_documento}}</td>
                 
                  <td>{{ $pa->nombre1}} {{ $pa->nombre2}} {{ $pa->apellido1}} {{ $pa->apellido2}}</td>
                  <td>{{ $pa->genero}} </td>
                  <td>{{ $pa->nombre_departamento}}</td>
                  <td>{{ $pa->nombre_municipio}}</td>
      <td>
        

        <form action="{{url('/eliminar/'.$pa->id)}}" method="post">
          

          @csrf
          <div class="form-group row">
          @method('delete')
          <div class="col-md-6">
           <button  type="submit" class="btn btn-outline-danger btn-sm">Eliminar</button> 
           </div>
        </form>
       
    
  
    
        
    </div>

        
      </td>
      <td><a href="{{url('editar/'.$pa->id)}}">

        <button  type="submit" class="btn btn-outline-primary btn-sm">Editar</button> 
        </a></td>



    </tr>
  </tbody>
   @endforeach
</table>

 
 
</div>
        
        </div>


   
           </div>
      
     </div>
   </div>
     </div>
</div>
         
</div>
       </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection