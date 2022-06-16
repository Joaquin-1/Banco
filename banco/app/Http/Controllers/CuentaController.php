<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCuentaRequest;
use App\Http\Requests\UpdateCuentaRequest;
use App\Models\Cliente;
use App\Models\Cuenta;

use Illuminate\Http\Request;

class CuentaController extends Controller
{


    public function anadir(Request $request, Cuenta $cuenta)
    {


        $cuenta->clientes()->attach($request->cliente_id);

        return redirect()->route('cuentas.index');
    }


    public function titulares(Cuenta $cuenta)
    {

        $clientes = Cliente::all()->diff($cuenta->clientes);


        return view('cuentas.titulares',[

            'cuenta'=>$cuenta,
            'clientes'=> $clientes,
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        return view('cuentas.index', [
            'cuentas' => Cuenta::all(),

        ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuenta = new Cuenta();

        return view('cuentas.create', [
            'cuenta' => $cuenta

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCuentasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCuentaRequest $request)
    {
        $cuenta = new Cuenta($request->validated());
        $cuenta->save();

        return redirect()->route('clientes.index')->with('success','cuenta creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuentas  $cuentas
     * @return \Illuminate\Http\Response
     */
    public function show(Cuenta $cuenta)
    {
        $movimientos = $cuenta->withSum('movimientos', 'importe')->find($cuenta->id);

        return view('cuentas.show',[
            'cuenta' => $cuenta,
            'movimientos' => $movimientos,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function edit(Cuenta $cuenta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCuentasRequest  $request
     * @param  \App\Models\Cuentas  $cuentas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCuentaRequest $request, Cuenta $cuenta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuenta  $cuenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cuenta $cuenta)
    {
        //
    }
}
