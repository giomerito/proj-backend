<?php

  namespace App\Http\Models;

  use Illuminate\Notifications\Notifiable;
  use Illuminate\Foundation\Auth\User as Authenticatable;
  use Illuminate\Support\Facades\Input;
  use Illuminate\Support\Facades\Hash;

  class Cliente extends Authenticatable{

      use Notifiable;

      protected $fillable = ['nome', 'email', 'telefone'];

      public function allClientes(){
          return Self::all();
      }
      public function getCliente($id){
          $cliente = Self::find($id);
          if(is_null($cliente)){
              return false;
          }
          return $cliente;
      }
      public function saveCliente(){
          $input = Input::all();
          $cliente = new Cliente();
          $cliente->fill($input);
          $cliente->save();
          return $cliente;
      }
      public function updateCliente($id){
          $cliente = Self::find($id);
          if(is_null($cliente)){
              return false;
          }
          $input = Input::all();
          $cliente->fill($input);
          $cliente->save();
          return $cliente;
      }
      public function deleteCliente($id){
          $cliente = Self::find($id);
          if(is_null($cliente)){
              return false;
          }
          return $cliente->delete();
      }

  }
?>
