<?php

$loader = require __DIR__. "/vendor/autoload.php";
\Slim\Slim::registerAutoloader();

use Reserva\models\Cliente;
use Reserva\DAO\ClienteDAO;
use Reserva\DAO\AbstractDAO;

//$app = new \Slim\Slim();

//$cliente = new Cliente(0, "Giomerito Alves", "giomerito.souza@gmail.com", "Rua RB 31-A", "62 99869-2532", "Masculino");

//$c2 = new ClienteDAO();
//$c2->insert($cliente);

//$app->run();


/**
 * Comando para criação das tabelas no banco de dados
 * vendor/bin/doctrine orm:schema-tool:create
 */
