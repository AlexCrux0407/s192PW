<?php
namespace App\Http\Controllers;

use App\Http\Requests\validadorBuscarHotel;
use App\Http\Requests\validadorBuscarVuelo;
use App\Http\Requests\validadorConsultarReserva;
use Illuminate\Http\Request;
use Validator;

class controladorTurista extends Controller
{
    public function buscarVuelo(Request $request) {
        $validator = Validator::make($request->all(), (new validadorBuscarVuelo)->rules());
        if ($validator->fails()) {
            session()->flash('errors_vuelo', $validator->errors());
            return redirect()->back()->withInput();
        }
        return redirect()->back()->with('success_vuelo', 'Vuelo encontrado satisfactoriamente.');
    }
    
    public function buscarHotel(Request $request) {
        $validator = Validator::make($request->all(), (new validadorBuscarHotel)->rules());
        if ($validator->fails()) {
            session()->flash('errors_hotel', $validator->errors());
            return redirect()->back()->withInput();
        }
        return redirect()->back()->with('success_hotel', 'Hotel encontrado satisfactoriamente.');
    }
    
    public function consultarReserva(Request $request) {
        $validator = Validator::make($request->all(), (new validadorConsultarReserva)->rules());
        if ($validator->fails()) {
            session()->flash('errors_reserva', $validator->errors());
            return redirect()->back()->withInput();
        }
        return redirect()->back()->with('success_reserva', 'Reserva encontrada exitosamente.');
    }
    public function procesarLogin(Request $request)
    {
        $request->validate([
            'usuario' => 'required',
            'contraseña' => 'required',
        ]);

        return redirect()->route('inicio')->with('success', 'Inicio de sesión exitoso');
    }
    public function procesarRegistro(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'usuario' => 'required',
            'contraseña' => 'required|min:6',
        ]);

        return redirect()->route('inicio')->with('success', 'Registro exitoso');
    }
}
