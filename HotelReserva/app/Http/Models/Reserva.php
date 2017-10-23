<?php

namespace App\Http\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class Reserva extends Authenticatable {

    use Notifiable;

    protected $fillable = ['cliente_id', 'quarto_id', 'data_entrada', 'data_saida'];

    public function allReservas() {
        return self::all();
    }

    public function getReserva($id) {
        $reserva = self::find($id);
        if (is_null($reserva)) {
            return false;
        }
        return $reserva;
    }

    public function saveReserva() {
        $input = Input::all();
        $reserva = new Reserva();
        $reserva->fill($input);
        $reserva->save();
        return $reserva;
    }

    public function updateReserva($id) {
        $reserva = self::find($id);
        if (is_null($reserva)) {
            return false;
        }
        $input = Input::all();
        $reserva->fill($input);
        $reserva->save();
        return $reserva;
    }

    public function deleteReserva($id) {
        $reserva = self::find($id);
        if (is_null($reserva)) {
            return false;
        }
        return $reserva->delete();
    }

}
