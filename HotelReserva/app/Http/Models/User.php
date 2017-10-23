<?php

namespace App\Http\Models;

//use Illuminate\Database\Eloquent;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable{

    use Notifiable;
    
    protected $hidden = ['password']; //colunas para não retornarem em consultas
    protected $fillable = ['name', 'email', 'password'];

    public function allUsers() {
        return self::all();
    }

    public function saveUser() {
        $input = Input::all();
        $input['password'] = Hash::make($input['password']);
        $user = new User();
        $user->fill($input);
        $user->save();
        return $user;
    }

    public function getUser($id) {
        $user = self::find($id);
        if (is_null($user)) {
            return false;
        }
        return $user;
    }

    public function updateUser($id) {
        $user = Self::find($id);
        if(is_null($user)){
            return false;
        }
        $input = Input::all();
        if (isset($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        }        
        $user->fill($input);
        $user->save();
        return $user;
    }

    public function deleteUser($id) {
        $user = self::find($id);
        if (is_null($user)) {
            return false;
        }
        return $user->delete();
    }    
}
