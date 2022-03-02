<?php

namespace App\Http\Livewire;
use App\models\departamento;
use App\models\municipio;
use Livewire\Component;


class Registrar extends Component
{
   public $municipios= '';
    public function render(){

    	return view('livewire.registrar',[
    		'departamentos'=>departamento::all(),
    		'municipios'=> $this->municipios


    	]);

    }

    public function listarMunicipios($id){

    	$this->municipios=municipio::where('departamento_id',    
    		$id)->get();

    }
}