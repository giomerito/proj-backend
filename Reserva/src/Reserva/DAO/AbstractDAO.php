<?php

namespace Reserva\DAO;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class AbstractDAO {

    public $entityManager;
    private $entityPath;

    public function __construct($entityPath) {
        $this->entityPath = $entityPath;
        $this->entityManager = $this->createEntityManager();
    }

    public function createEntityManager() {
        $path = array(
            'Reserva/models'
        );
        $devMode = true;
        $config = Setup::createAnnotationMetadataConfiguration($path, $devMode);

        $connectionOptions = array(
            'dbname' => 'bdreserva',
            'user' => 'root',
            'password' => '',
            'host' => 'localhost',
            'driver' => 'pdo_mysql'
        );

        return EntityManager::create($connectionOptions, $config);
    }

    public function insert($dado) {
        $this->entityManager->persist($dado);
        $this->entityManager->flush();
    }

    public function update($dado) {
        $this->entityManager->merge($dado);
        $this->entityManager->flush();
    }

    public function delete($id) {
        $this->entityManager->remove($id);
        $this->entityManager->flush();
    }

    public function findById($id) {
        return $this->entityManager->find($entityPath, $id);
    }

    public function findAll() {
        $collention = $this->entityManager->getRepository($this->entityPath)->findAll();
        $data = array();
        foreach ($collection as $obj) {
            $data[] = $obj;
        }
        return $data;
    }
}
