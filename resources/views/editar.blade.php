@extends('layouts.app')

@section('content')


    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @foreach($project as $pro)
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
         
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<h1 class="m-0 text-dark col-12 text-center">EDITAR PACIENTE {{  ucfirst($pro->nombre1)}} {{ucfirst($pro->apellido1)}}</h1>
<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"> 
       <div class="row">
         <div class="col-12">       
           <div class="card">        
             <div class="card-body">
              <form action="" method="post" >      
                @csrf
                @method('patch')

                <div class="row">
                  <div class="col-6">
                    
                    <label >Tipo Documento</label>
                    <select name="tipo_documento_id" id="tipo_documento_id" class="form-control" readonly>
                       <option value="{{ucfirst($pro->tipo_documento_id)}}">{{$pro->tipo}}</option>
                        
                    </select>
                    <label >Numero documento</label>
                    <input type="number"  class="form-control" name="numero_documento" value="{{ucfirst($pro->numero_documento)}}">
                     <label >Primer nombre</label>
                    <input type="text"  class="form-control" name="nombre1" value="{{ucfirst($pro->nombre1)}}">
                    <label >Segundo Nombre</label>
                    <input type="text" class="form-control"  name="nombre2" value="{{ucfirst($pro->nombre2)}}">

                    <label >Primer apellido</label>
                    <input type="text" class="form-control"  name="apellido1" value="{{ucfirst($pro->apellido1)}}">
                   
                  </div>
                  <div class="col-6">

                     <label >Segundo Apellido</label>
                    <input type="text" class="form-control"   name="apellido2" value="{{ucfirst($pro->apellido2)}}">

                    <label >Genero</label>
                    <select name="genero_id" id="genero_id" class="form-control" readonly>
                       <option value="{{ucfirst($pro->genero_id)}}">{{$pro->genero}}</option>
                       
                    </select>

                     <label >Departamento</label>
                      <select name="departamento_id" id="departamento_id" class="form-control" readonly>
                    
                   
                       <option value="{{$pro->departamento_id}}">{{$pro->nombre_departamento}}</option>
                    </select>

                     <label >Municipio</label>

                    <select name="municipio_id" id="municipio_id" class="form-control" readonly>

                      
                   
                       <option value="{{$pro->municipio_id}}">{{$pro->nombre_municipio}}</option>
                       
                      
                    </select>
                    <br>
                    <button class="btn  btn-outline-success btn-sm">ACTUALIZAR</button>
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
    @endforeach
  </div>

  @endsection