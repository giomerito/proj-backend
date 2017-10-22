<?php

namespace Reserva\models;

use Reserva\models\Model;

/**
 * @Entity
 * @Table(name="clientes")
 */
class Cliente extends Model{

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Column(type="string", length=255, unique=false, nullable=false)
     */
    private $nome;

    /**
     * @Column(type="string", unique=true, length=255)
     */
    private $email;

    /**
     * @Column(type="string")
     */
    private $endereco;

    /**
     * @Column(type="string")
     */
    private $telefone;

    /**
     * @Column(type="string")
     */
    private $sexo;

    public function __construct($id = 0, $nome = "", $email = "", $endereco = "", $telefone = "", $sexo = "") {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->sexo = $sexo;
    }

    public static function construct($array) {
        $cliente = new Cliente();
        $cliente->setId($array['id']);
        $cliente->setNome($array['nome']);
        $cliente->setEmail($array['email']);
        $cliente->setEndereco($array['endereco']);
        $cliente->setTelefone($array['telefone']);
        $cliente->setSexo($array['sexo']);
        return $cliente;
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function equals($obj) {
        if ($obj instanceof Cliente) {
            if ($this->id != $obj->id) {
                return false;
            }
            if ($this->nome != $obj->nome) {
                return false;
            }
            if ($this->email != $obj->email) {
                return false;
            }
            if ($this->endereco != $obj->endereco) {
                return false;
            }
            if ($this->telefone != $obj->telefone) {
                return false;
            }
            if ($this->sexo != $obj->sexo) {
                return false;
            }
            return true;
        } else {
            return false;
        }
    }

    public function toString() {
        return "[Id: ]".$this->id."] [Nome: ".$this->nome."] [Email: ".$this->email."] [Endereço: ".$this->endereco."] [Telefone: ".$this->telefone."] [Sexo: ".$this->sexo;
    }    
}
