<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Http\Models\User;

class UserController extends BaseController {

    protected $user = null;

    public function __construct(User $user) {
        $this->user = $user;
    }

    public function allUsers() {
        //return Response::json($this->user->allUsers(), 200);
        return $this->user->allUsers();
    }

    public function getUser($id) {
        $user = $this->user->getUser($id);
        if (!$user) {
            //return Response::json(['response' => 'Usuário não encontrado'], 400);
            return 'Usuário não encontrado';
        }
        //return Response::json($user, 200);
        return $user;
    }

    public function saveUser() {
        //return Response::json($this->user->saveUser(), 200);
        return $this->user->saveUser();
    }

    public function updateUser($id) {
        $user = $this->user->updateUser($id);
        if (!$user) {
            //return Response::json(['response' => 'Usuário não encontrado!'], 400);
            return 'Usuário não encontrado!';
        }
        //return Response::json($user, 200);
        return $user;
    }

    public function deleteUser($id) {
        $user = $this->user->deleteUser($id);
        if (!$user) {
            //return Response::json(['response' => 'Usuário não encontrado!'], 400);
            return 'Usuário não encontrado!';
        }
        //return Response::json(['response' => 'Usuário deletado com sucesso!'], 200);
        return 'Usuário deletado com sucesso!';
    }

}
