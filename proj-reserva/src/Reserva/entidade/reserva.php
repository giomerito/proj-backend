<?php

namespace Reserva\entidade;

/**
 * Description of reserva
 *
 * @author giomerito
 */

/**
 * @Entity
 * @Table(name="reservas")
 */
class Reserva {
   
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ManyToOne(targetEntity="Cliente")
     * @JoinColumn(name="cliente_id", referencedColumnName="id")
     */
     private $cliente;
     /**
     * @OneToMany(targetEntity="Quarto" mappedBy="reserva", cascade={"persist", "remove"})
     */
     private $quarto;
     /**
     * @Column(type="datetime")
     */
     private $entrada;
     /**
     * @Column(type="datetime")
     */
     private $saida;
     /**
     * @OneToMany(targetEntity="FormaPagamento" mappedBy="reserva", cascade={"persist", "remove"})
     */
     private $pagamento;
     
     public function __construct($id=0, $cliente="", $quarto= array(), $entrada="0000-00-00 00:00:00", $saida="0000-00-00 00:00:00", $pagamento= array()) {
         $this->id = $id;
         $this->cliente = $cliente;
         $this->quarto = $quarto;
         $this->entrada = $entrada;
         $this->saida = $saida;
         $this->pagamento = $pagamento;
     }
     
     public static function construct($array){
         $obj = new Reserva();
         $obj->setId($array['id']);
         $obj->setCliente($array['cliente_id']);
         $obj->setQuarto($array['quarto']);
         $obj->setEntrada($array['entrada']);
         $obj->setSaida($array['saida']);
         $obj->setPagamento($array['pagamento']);
     }
     public function getId() {
         return $this->id;
     }

     public function getCliente() {
         return $this->cliente;
     }

     public function getQuarto() {
         return $this->quarto;
     }

     public function getEntrada() {
         return $this->entrada;
     }

     public function getSaida() {
         return $this->saida;
     }

     public function getPagamento() {
         return $this->pagamento;
     }

     public function setId($id) {
         $this->id = $id;
     }

     public function setCliente($cliente) {
         $this->cliente = $cliente;
     }

     public function setQuarto($quarto) {
         $this->quarto = $quarto;
     }

     public function setEntrada($entrada) {
         $this->entrada = $entrada;
     }

     public function setSaida($saida) {
         $this->saida = $saida;
     }

     public function setPagamento($pagamento) {
         $this->pagamento = $pagamento;
     }
     
     public function equal($objeto){
         if ($objeto instanceof Reserva){
             if($this->id != $objeto->id){ return false; }
             if($this->cliente != $objeto->cliente){ return false; }
             if($this->quarto != $objeto->quarto){ return false; }
             if($this->entrada != $objeto->entrada){ return false; }
             if($this->saida != $objeto->saida){ return false; }
             if($this->pagamento != $objeto->pagamento){ return false; }
             return true;
         }else{
             return false;
         }
     }
     public function toString(){
         return "[Id: "       .$this->id.                 "] "
              . "[Cliente: "     .$this->cliente.         "] "
              . "[Quarto: "     .$this->quarto.           "] "
              . "[Entrada: "    .$this->entrada.          "] "
              . "[Saída: " .$this->saida.                 "] "
              . "[Forma de Pagamento: " .$this->pagamento."] ";
     }
}
