<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\proveedores;
use Illuminate\Http\Request;

class proveedorcontroller extends Controller
{
    public function registraproveedor()
    {
        return view('proveedores.registrarproveedor');
    }

    public function guardaproveedor(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => ['required', 'regex:/^[A-Z][A-Za-z ,óéüñÑ]+$/'],
            'rfc' => ['required', 'regex:/^[A-ZÑ&]{3}\d{6}[A-Z0-9]{3}$/'], 
        ]);

        \DB::table('proveedores')->insert([
            'nombre' => $validatedData['nombre'],
            'rfc' => $validatedData['rfc'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('reporteproveedor');
    }

    public function reporteproveedor()
    {
        $consulta = \DB::select("SELECT * FROM proveedores");

        return view('proveedores.reporteproveedor')
                ->with('consulta',$consulta);
    }
}
