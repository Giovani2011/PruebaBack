<?php
namespace App\Controllers;
//importaciones
use App\Models\UserModel;
use CodeIgniter\Controller;


//el controladir principal
class UserController extends Controller {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    //ussamos el modelo

    public function index() {
        $users = $this->userModel->getUsers();
        return $this->response->setJSON($users);

    }
    
    
//aqui creamos campos

    public function create() {
        $user = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email')
        ];
        $newUser = $this->userModel->addUser($user);
        return $this->response->setJSON($newUser);
    }

//aqui edito los datos mediante el id

    public function update($id) {
        $user = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email')
        ];
        $updatedUser = $this->userModel->updateUser($id, $user);
        if ($updatedUser) {
            return $this->response->setJSON($updatedUser);
        } else {
            return $this->response->setJSON(['message' => 'User not found'], 404);
        }
    }


//aqui elimino 

    public function delete($id) {
        $deleted = $this->userModel->deleteUser($id);
        if ($deleted) {
            return $this->response->setJSON(['message' => 'User deleted']);
        } else {
            return $this->response->setJSON(['message' => 'User not found'], 404);
        }
    }


    //Aqui traemos usuarios mediante el id
    
    public function show($id) {
        $user = $this->userModel->getUser($id);
        if ($user) {
            return $this->response->setJSON($user);
        } else {
            return $this->response->setJSON(['message' => 'User not found'], 404);
        }
    }
}
