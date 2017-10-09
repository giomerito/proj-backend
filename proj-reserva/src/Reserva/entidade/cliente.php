<?php

namespace Reserva\entidade;

/**
 * Description of reserva 
 * @author giomerito
 */

/**
 * @Entity
 * @Table(name="clientes")
 */

class Cliente{
    
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @Column(type="string", length="255", unique="false", nullable="false")
     */
    private $nome;
    /**
     * @Column(type="string")  
     */
    private $sexo;
    /**
     * @Column(type="string", length="255", unique="true")
     */
    private $email;
    /**
     * @Column(type="string", length="100")
     */
    private $telefone;
    
    public function __construct($id=0, $nome="", $sexo="", $email="", $telefone="(00)00000-0000") {
        $this->id = $id;
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->telefone = $telefone;
    }
    
    public static function construct($array){
        $obj = new Cliente();
        $obj->setId($array['id']);
        $obj->setNome($array['nome']);
        $obj->setSexo($array['sexo']);
        $obj->setEmail($array['email']);
        $obj->setTelefone($array['telefone']);
    }

    
    public function getId()                { return $this->id;            }
    public function getNome()              { return $this->nome;          }
    public function getSexo()              { return $this->sexo;          }
    public function getEmail()             { return $this->email;         }
    public function getTelefone()          { return $this->telefone;      }
    public function setId($id)             { $this->id = $id;             }
    public function setNome($nome)         { $this->nome = $nome;         }
    public function setSexo($sexo)         { $this->sexo = $sexo;         }
    public function setEmail($email)       { $this->email = $email;       }
    public function setTelefone($telefone) { $this->telefone = $telefone; }
    
    public function equals($objeto){
        if ($objeto instanceof Cliente){
            if ($this->id       != $objeto->id)      { return false; }
            if ($this->nome     != $objeto->nome)    { return false; }
            if ($this->sexo     != $objeto->sexo)    { return false; }
            if ($this->email    != $objeto->email)   { return false; }
            if ($this->telefone != $objeto->telefone){ return false; }
            return true;
        }else{
            return false;
        }
    }
    
    public function toString(){
        return "[Id: "       .$this->id.       "] "
             . "[Nome: "     .$this->nome.     "] "
             . "[Sexo: "     .$this->sexo.     "] "
             . "[Email: "    .$this->email.    "] "
             . "[Telefone: " .$this->telefone. "] ";
    }
}