<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label(' tipo_documento_id') }}
            {{ Form::text(' tipo_documento_id', $paciente-> tipo_documento_id, ['class' => 'form-control' . ($errors->has(' tipo_documento_id') ? ' is-invalid' : ''), 'placeholder' => ' Tipo Documento Id']) }}
            {!! $errors->first(' tipo_documento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_documento') }}
            {{ Form::text('numero_documento', $paciente->numero_documento, ['class' => 'form-control' . ($errors->has('numero_documento') ? ' is-invalid' : ''), 'placeholder' => 'Numero Documento']) }}
            {!! $errors->first('numero_documento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre1') }}
            {{ Form::text('nombre1', $paciente->nombre1, ['class' => 'form-control' . ($errors->has('nombre1') ? ' is-invalid' : ''), 'placeholder' => 'Nombre1']) }}
            {!! $errors->first('nombre1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre2') }}
            {{ Form::text('nombre2', $paciente->nombre2, ['class' => 'form-control' . ($errors->has('nombre2') ? ' is-invalid' : ''), 'placeholder' => 'Nombre2']) }}
            {!! $errors->first('nombre2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido1') }}
            {{ Form::text('apellido1', $paciente->apellido1, ['class' => 'form-control' . ($errors->has('apellido1') ? ' is-invalid' : ''), 'placeholder' => 'Apellido1']) }}
            {!! $errors->first('apellido1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido2') }}
            {{ Form::text('apellido2', $paciente->apellido2, ['class' => 'form-control' . ($errors->has('apellido2') ? ' is-invalid' : ''), 'placeholder' => 'Apellido2']) }}
            {!! $errors->first('apellido2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label(' genero_id') }}
            {{ Form::text(' genero_id', $paciente-> genero_id, ['class' => 'form-control' . ($errors->has(' genero_id') ? ' is-invalid' : ''), 'placeholder' => ' Genero Id']) }}
            {!! $errors->first(' genero_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <select class="form-control input-lg" name="departamento" id="departamento" onchange="departamento()">
          			
        @foreach($departamento as $sla)
                   
                   <option value="{{$sla->id}}">{{$sla->nombre_dep}}</option>
                    @endforeach
                    
           </select>
           
          		<select class="form-control input-lg" id="municipio" disabled>
          			<option value="">Seleccione un municipio</option>
        </select> 

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

<script>
    function departamento() {
	var id_departamento = $("#departamento").val();
	$.ajax({
		url: "App/Http/Controllers/departamentos.ajax.php",
		method: "POST",
		data: {
			"id":id_departamento
		},
		success: function(respuesta){
			$("#municipio").attr("disabled", false);
			$("#municipio").html(respuesta);
		}
	})
}
</script>