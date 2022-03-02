@extends('layouts.app')

@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="d-flex justify-content-center">
            <h1 style="" class=" text-center align-center">REGISTRAR PACIENTES</h1>
          </div><!-- /.col -->
        
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid col-lg-10">
       
       <div class="row">
         <div class="col-12">
           
           <div class="card">
             
             <div class="card-body">

              <form action="" method="post" >
               
                @csrf

                <div class="row">
                    <div class="col-lg-12"></div>
                  <div class="col-6">
                    
                    <label >Tipo Documento</label>
                    <select name="tipo_documento_id" id="tipo_documento_id" class="form-control">
                       <option value="1">Cedula de Ciudadania</option>
                        <option value="2">Tarjeta de identidad</option>
                    </select>
                    <label >Numero documento</label>
                    <input type="number"  class="form-control" name="numero_documento">
                     <label >Primer nombre</label>
                    <input type="text"  class="form-control" placeholder="Ingrese primer nombre" name="nombre1">
                    <label >Segundo Nombre</label>
                    <input type="text" class="form-control" placeholder="Ingrese segundo nombre" name="nombre2">
                    <label >Primer apellido</label>
                    <input type="text" class="form-control" placeholder="Ingrese primer apellido" name="apellido1">
                   
                  </div>
                  <div class="col-6">
                    <label >Segundo Apellido</label>
                    <input type="text" class="form-control" placeholder="Ingrese segundo apellido"  name="apellido2" required>
                    <label >Genero</label>
                    <select name="genero_id" id="genero_id" class="form-control">
                       <option value="1">Masculino</option>
                        <option value="2">Femenino</option>
                    </select>

                    @livewire('registrar')
                   
                    <br>  
                    <button class="btn  btn-outline-success btn-sm">REGISTRAR</button>
                    <a href="{{url('gestor')}}">
                        <button type="button" class="btn  btn-outline-primary btn-sm">VER PACIENTES</button>
                    </a>
                  </div>  
                  </div>
                  </div>                 
                              
              </form>                        
             </div>
<hr>

           </div>
         </div>
       </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <div class="content-wrapper">




@endsection
