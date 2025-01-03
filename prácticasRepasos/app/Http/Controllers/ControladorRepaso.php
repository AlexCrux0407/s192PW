<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorRepaso extends Controller
{
    public function index()
    {
        return view('repaso1', [
            'cantidad' => null, 
            'unidad' => null,
            'result' => null,
            'convertida' => null
        ]);
    }

    public function convertidor(Request $request)
    {
        $cantidad = $request->input('cantidad');
        $unidad = $request->input('unidad');
        $convertida = $request->input('convertida');

        $result = $this->convertirUnidades($cantidad, $unidad, $convertida);

        return view('repaso1', [
            'cantidad' => $cantidad, 
            'unidad' => $unidad,
            'result' => $result,
            'convertida' => $convertida
        ]);
    }

    private function convertirUnidades($cantidad, $unidad, $convertida)
        {
            $unidades = [
                'MB' => 1,
                'GB'=> 1024,
                'TB' => 1024*1024   
            ];
            if (!isset($unidades[$unidad]) || !isset($unidades[$convertida])) {
                return "Unidad inválida";
            }

            $cantidadMB = $cantidad * $unidades[$unidad];

            $cantidad_convertida = $cantidadMB / $unidades[$convertida];

            return "{$cantidad} {$unidad} equivalen a {$cantidad_convertida} {$convertida}.";
        }
        
}

