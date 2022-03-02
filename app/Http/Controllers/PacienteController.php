<?php

namespace App\Http\Controllers;

use App\Models\departamento;
use App\Models\Paciente;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/**
 * Class PacienteController
 * @package App\Http\Controllers
 */
class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $project = DB::select('SELECT `departamentos`.`nombre_departamento`, 
        `pacientes`.`id`, `pacientes`.`numero_documento`, `pacientes`.`nombre1`, 
        `pacientes`.`nombre2`, `pacientes`.`apellido1`, `pacientes`.`apellido2`,
         `generos`.`nombre` as genero, `municipios`.`nombre_municipio`, tipos_documentos.nombre as tipo
        FROM `departamentos` 
            LEFT JOIN `pacientes` ON `pacientes`.`departamento_id` = `departamentos`.`id` 
            LEFT JOIN `generos` ON `pacientes`.`genero_id` = `generos`.`id` 
            LEFT JOIN `municipios` ON `municipios`.`departamento_id` = `departamentos`.`id`
            LEFT JOIN `tipos_documentos` ON `pacientes`.`tipo_documento_id` = `tipos_documentos`.`id` 
            WHERE pacientes.tipo_documento_id=tipos_documentos.id AND departamentos.id= pacientes.departamento_id AND pacientes.municipio_id=municipios.id and generos.id=pacientes.genero_id
            ');

    

    return view('gestor')->with(['project'=> $project]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente = new Paciente();
        return view('paciente.create', compact('paciente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
        
           paciente::insert(['tipo_documento_id'=> $request->tipo_documento_id,'numero_documento'=>$request->numero_documento,
        
            'nombre1'=> $request->nombre1,'nombre2'=> $request->nombre2,'apellido1'=> $request->apellido1,'apellido2'=> $request->apellido2,
            'genero_id'=>$request->genero_id,'departamento_id'=> $request->departamento_id,'municipio_id'=> $request->municipio_id,'user_id' => auth()->id()]);
        
            
           return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = DB::select('SELECT `departamentos`.`nombre_departamento`, 
        `pacientes`.`id`, `pacientes`.`numero_documento`, `pacientes`.`nombre1`, 
        `pacientes`.`nombre2`, `pacientes`.`apellido1`, `pacientes`.`apellido2`,pacientes.genero_id,pacientes.tipo_documento_id,pacientes.departamento_id,pacientes.municipio_id,
         `generos`.`nombre` as genero, `municipios`.`nombre_municipio`, tipos_documentos.nombre as tipo
        FROM `departamentos` 
            LEFT JOIN `pacientes` ON `pacientes`.`departamento_id` = `departamentos`.`id` 
            LEFT JOIN `generos` ON `pacientes`.`genero_id` = `generos`.`id` 
            LEFT JOIN `municipios` ON `municipios`.`departamento_id` = `departamentos`.`id`
            LEFT JOIN `tipos_documentos` ON `pacientes`.`tipo_documento_id` = `tipos_documentos`.`id` 
            WHERE pacientes.tipo_documento_id=tipos_documentos.id AND departamentos.id= pacientes.departamento_id AND pacientes.municipio_id=municipios.id and generos.id=pacientes.genero_id and pacientes.id = '.$id.'
            ');

    

    return view('editar')->with(['project'=> $project,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);

        return view('paciente.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Paciente $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Paciente::where('id',$id)->first()->update($request->all());

        return redirect('gestor');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        DB::table('pacientes')->delete($id);

         
        return redirect('/gestor');
    }
}
