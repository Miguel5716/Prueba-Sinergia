<div>
	


    <label >Departamento</label>
                      <select name="departamento_id" wire:change='listarMunicipios($event.target.value)' class="form-control">
                      	<option value="">Seleccione departamento</option>
                     @foreach($departamentos as $sla)
                   
                       <option value="{{$sla->id}}">{{$sla->nombre_departamento}}</option>
                        @endforeach
                        
                    </select>

                     <label >Municipio</label>
                     <select name="municipio_id"  class="form-control">


                    
@if($municipios)
                   @foreach($municipios as $sle)
                    
                       <option value="{{$sle->id}}">{{$sle->nombre_municipio}}</option>
                        @endforeach
                    @endif
                    
                </select>
               
</div>