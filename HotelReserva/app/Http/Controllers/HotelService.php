<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class HotelService extends BaseController {

    public function getQuartos() {
        //passamos a URL
        $url = "http://localhost:1586/quarto";
        
        //iniciamos uma instância do cURL
        $ch = curl_init();
        //definimos a URL a ser acessada
        curl_setopt($ch, CURLOPT_URL, $url);
        
        //define que o conteudo obtido deve ser retornado em vez de exibido
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);        
        //executamos a ação
        $return = curl_exec($ch);        
        //encerramos a instância do cURL
        curl_close($ch);
        
        /*
        foreach ($hotel as $dados => $return){            
            echo $quarto = $dados->array['quarto'];            
            echo $descricao = $dados->array['descricao'];            
            echo $andar = $dados->array['andar'];            
            echo $status = $dados->array['status'];            
        }        
       */
        echo $return;
    }
    
    public function getQuarto($id) {
        $url = "http://localhost:1586/quarto" ."/". $id;   
        
        $ch = curl_init(); 
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        
        $return = curl_exec($ch);
        curl_close($ch);
        
       echo $return;
    }    
    

}