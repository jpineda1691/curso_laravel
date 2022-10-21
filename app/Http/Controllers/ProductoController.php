<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\Models\Producto;



class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    //@return \Illuminate\Http\Response

    public function index()
    {
        $productos=Producto::all();
        return $productos;
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
     * */
     //@param  \Illuminate\Http\Request  $request
     //@return \Illuminate\Http\Response
     
    public function store(Request $request)
    {
       $productos = new Producto();
       $productos->descripcion = $request->descripcion;
       $productos->precio = $request->precio;
       $productos->stock = $request->stock;
       $productos->save();
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
    public function update(Request $request)
    {
       $productos = Producto::findOrFail($request->id);
       $productos->descripcion = $request->descripcion;
       $productos->precio = $request->precio;
       $productos->stock = $request->stock;
       $productos->save();
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
