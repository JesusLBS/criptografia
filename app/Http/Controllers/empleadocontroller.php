<?php

namespace App\Http\Controllers;
use App\empleados;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;


class empleadocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      

      $empleado =DB::SELECT("SELECT * FROM empleados");
    
      return view('empleados.index',compact('empleado'));
 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = $this->validate(request(), [
            'name_empleado'      => ['required', 'string', 'max:255'],
            'email_empleado'     => ['required', 'string', 'email', 'max:255'],
           

        ]);
        
        $newempleado = new empleados;

         
        $newempleado->name_empleado        = $request->input('name_empleado'); 
        $newempleado->email_empleado      = $request->input('email_empleado'); 
        $newempleado->password_empleado    = $request->input('password_empleado'); 

           
        /*
        $newempleado->fill([
            'password_empleado' => Crypt::encryptString($request->password_empleado),
        ])->save();
        */

         $newempleado->fill([
            'password_empleado' => hash("sha256",$request->password_empleado),
        ])->save();

        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
