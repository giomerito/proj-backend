<?php

namespace Reserva\DAO;

use Reserva\DAO\AbstractDAO;

class ClienteDAO extends AbstractDAO {

    public function __construct() {
        parent::__construct('Reserva\models\Cliente');
    }

}
