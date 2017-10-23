<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Models\Reserva;

class ReservaController extends BaseController {

    protected $reserva = null;

    public function __construct(Reserva $reserva) {
        $this->reserva = $reserva;
    }

    public function allReservas() {
        $reserva = $this->reserva->allReservas();
        if (!$reserva) {
            return "Não existem reservas!";
        }
        return $reserva;
    }

    public function getReserva($id) {
        $reserva = $this->reserva->getReserva($id);
        if (!$reserva) {
            return "Reserva não encontrada!";
        }
        return $reserva;
    }

    public function saveReserva() {
        return $this->reserva->saveReserva();
    }

    public function updateReserva($id) {
        $reserva = $this->reserva->updateReserva($id);
        if(!$reserva){
            return "Reserva $id não existe!";
        }
        return $reserva;
    }

    public function deleteReserva($id) {
        $reserva = $this->reserva->deleteReserva($id);
        if (!$reserva) {            
            return "Reserva $id não encontrado!";
        }        
        return "Reserva $id deletada com sucesso!";
    }

}
