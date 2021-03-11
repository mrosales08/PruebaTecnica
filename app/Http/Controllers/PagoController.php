<?php

namespace App\Http\Controllers;

use App\Pago;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagos = DB::table('pagos')->get();
/*         return view('ListaPagos', compact('pagos',$pagos));
 */        return view('ListaPagos', [
            "pagos" => $pagos
        ]);

       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pago= new Pago;
        $pago->idUsuario= $request->nombre;
        $pago->tipoPago= $request->tipoDePago;
        $pago->FechaPago= $request->fechaPago;
        $pago->Descripcion= $request->descripcion;
        $pago->Img= $request->img;
        $pago->save();
        return back()->with('insertar' , 'Registrado con exito'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(Pago $pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit(Pago $pago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pago $pago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pago $pago)
    {
        //
    }
}
