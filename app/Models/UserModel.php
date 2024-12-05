<?php
namespace App\Models;
//aqui tenemos el modelo para introducir los datos a la base de datos de todos los cruds
class UserModel {
    private $users = [
        ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
        ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com']
    ];

    public function getUsers() {
        return $this->users;
    }

    public function addUser($user) {
        $user['id'] = count($this->users) + 1;
        $this->users[] = $user;
        return $user;
    }

    public function getUser($id) {
        foreach ($this->users as $user) {
            if ($user['id'] == $id) {
                return $user;
            }
        }
        return null;
    }

 

    public function deleteUser($id) {
        foreach ($this->users as $key => $user) {
            if ($user['id'] == $id) {
                unset($this->users[$key]);
                return true;
            }
        }
        return false;
    }
    public function updateUser($id, $user) {
        foreach ($this->users as &$u) {
            if ($u['id'] == $id) {
                $u = array_merge($u, $user);
                return $u;
            }
        }
        return null;
    }

   
}
