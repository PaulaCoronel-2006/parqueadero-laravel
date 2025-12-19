<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = [
        'placa',
        'tipo',
        'propietario',
        'observaciones'
    ];
    static public function getVehiculos()
    {
        return self::all();
    }
    static public function getVehiculoById($id)
    {
        self::find($id);
    }
    static public function createVehiculo(Request $request)
    {
        return self::create($request->all());
    }
    static public function updateVehiculo(Request $request)
    {
        return self::update($request->all());
    }
    static public function deleteVehiculo(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
    }
}
