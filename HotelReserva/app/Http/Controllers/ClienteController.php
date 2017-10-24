<?php

    namespace App\Http\Controllers;

    use Illuminate\Routing\Controller as BaseController;
    use App\Http\Models\Cliente;

    class ClienteController extends BaseController{

        protected $cliente = null;

        public function __construct(Cliente $cliente){
            $this->cliente = $cliente;
        }

        public function allClientes(){
            $cliente = $this->cliente->allClientes();
            if($cliente == null){
                return "Não retornou nem um cadastro!";
            }
            return $cliente;
        }

        public function getCliente($id){
            $cliente = $this->cliente->getCliente($id);
            if(!$cliente){
                return "Cliente  {$id}  não encontrado!";
            }
            return $cliente;
        }

        public function saveCliente(){
            return $this->cliente->saveCliente();
        }

        public function updateCliente($id){
            $cliente = $this->cliente->updateCliente($id);
            if(!$cliente){
                return "Cliente {$id} não existe!";
            }
            return $cliente;
        }

        public function deleteCliente($id){
            $cliente = $this->cliente->deleteCliente($id);
            if(!$cliente){
                return "Cliente {$id} não encontrado!";
            }
            return "O Cliente {$id} foi deletado com sucesso.";
        }
    }
?>
