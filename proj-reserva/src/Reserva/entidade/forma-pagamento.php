<?php

namespace Reserva\entidade;

/**
 * Description of pagamento
 *
 * @author giomerito 
 */

/**
 * @Entity
 * @Table(name="forma-pagamento")
 */
class FormaPagamento {
    
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @Column(type="string", unique="true", length="255", nullable="false")
     */
    private $descricao;
    
    public function __construct($id, $descricao) {
        $this->id = $id;
        $this->descricao = $descricao;
    }

    public static function construct($array){
        $obj = new FormaPagamento();
        $obj->setId($array['id']);
        $obj->setDescricao($array['descricao']);
    }
    
    public function getId() {
        return $this->id;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    public function equls($objeto){
        if ($objeto instanceof FormaPagamento){
            if ($this->id != $objeto->id) { return false; }
            if ($this->descricao != $objeto->descricao) { return false; }
            return true;
        }else{
            return false;
        }
    }
    
    public function toString(){
        return "[Id: " .$this->id. "] [Descrição: " .$this->descricao."] ";
    }

}
