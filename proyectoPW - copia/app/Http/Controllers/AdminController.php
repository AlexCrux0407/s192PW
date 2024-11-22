<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vuelo;
use App\Models\Hotel;

class AdminController extends Controller
{
    public function index()
    {
        if (auth()->check() && auth()->user()->rol !== 'administrador') {
            return redirect()->route('inicio')->with('error', 'No tienes permisos de administrador.');
        }

        $usuarios = User::all();
        $vuelos = Vuelo::all();
        $hoteles = Hotel::all();

        return view("admin.dashboard", compact("usuarios", "vuelos", "hoteles"));
    }

    // ---------------- USUARIOS ---------------- //

    public function createUser(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:55',
            'email' => 'required|email|unique:users',
            'usuario' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
            'rol' => 'required|in:administrador,usuario',
        ]);

        User::create([
            'name' => $request->nombre,
            'email' => $request->email,
            'usuario' => $request->usuario,
            'password' => bcrypt($request->password),
            'rol' => $request->rol,
        ]);

        return back()->with('success', 'Usuario creado con éxito');
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:55',
            'email' => 'required|email|unique:users,email,' . $id,
            'usuario' => 'required|string|max:255|unique:users,usuario,' . $id,
            'rol' => 'required|in:administrador,usuario',
        ]);

        $user->update([
            'name' => $request->nombre,
            'email' => $request->email,
            'usuario' => $request->usuario,
            'rol' => $request->rol,
        ]);

        return back()->with('success', 'Usuario actualizado con éxito');
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return back()->with('success', 'Usuario eliminado con éxito');
    }

    // ---------------- VUELOS ---------------- //

    public function createVuelo(Request $request)
    {
        $request->validate([
            'origen' => 'required|string|max:255',
            'destino' => 'required|string|max:255',
            'fecha_salida' => 'required|date',
            'precio' => 'required|numeric',
        ]);

        Vuelo::create([
            'origen' => $request->origen,
            'destino' => $request->destino,
            'fecha_salida' => $request->fecha_salida,
            'precio' => $request->precio,
        ]);

        return back()->with('success', 'Vuelo creado con éxito');
    }

    public function editVuelo($id)
    {
        $vuelo = Vuelo::findOrFail($id);
        return view('admin.vuelos.edit', compact('vuelo'));
    }

    public function updateVuelo(Request $request, $id)
    {
        $vuelo = Vuelo::findOrFail($id);

        $request->validate([
            'origen' => 'required|string|max:255',
            'destino' => 'required|string|max:255',
            'fecha_salida' => 'required|date',
            'precio' => 'required|numeric',
        ]);

        $vuelo->update([
            'origen' => $request->origen,
            'destino' => $request->destino,
            'fecha_salida' => $request->fecha_salida,
            'precio' => $request->precio,
        ]);

        return back()->with('success', 'Vuelo actualizado con éxito');
    }

    public function deleteVuelo($id)
    {
        $vuelo = Vuelo::findOrFail($id);
        $vuelo->delete();

        return back()->with('success', 'Vuelo eliminado con éxito');
    }

    // ---------------- HOTELES ---------------- //

    public function createHotel(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
            'categoria' => 'required|string|max:50',
            'precio_por_noche' => 'required|numeric',
            'disponibilidad' => 'required|integer|min:0',
        ]);

        Hotel::create([
            'nombre' => $request->nombre,
            'ciudad' => $request->ciudad,
            'categoria' => $request->categoria,
            'precio_por_noche' => $request->precio_por_noche,
            'disponibilidad' => $request->disponibilidad,
        ]);

        return back()->with('success', 'Hotel creado con éxito');
    }

    public function editHotel($id)
    {
        $hotel = Hotel::findOrFail($id);
        return view('admin.hoteles.edit', compact('hotel'));
    }

    public function updateHotel(Request $request, $id)
    {
        $hotel = Hotel::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'ciudad' => 'required|string|max:255',
            'categoria' => 'required|string|max:50',
            'precio_por_noche' => 'required|numeric',
            'disponibilidad' => 'required|integer|min:0',
        ]);

        $hotel->update([
            'nombre' => $request->nombre,
            'ciudad' => $request->ciudad,
            'categoria' => $request->categoria,
            'precio_por_noche' => $request->precio_por_noche,
            'disponibilidad' => $request->disponibilidad,
        ]);

        return back()->with('success', 'Hotel actualizado con éxito');
    }

    public function deleteHotel($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();

        return back()->with('success', 'Hotel eliminado con éxito');
    }
}
