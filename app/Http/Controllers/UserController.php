<?php

namespace App\Controllers;

use App\Models\User;
use CodeIgniter\RESTful\ResourceController;

class UserController extends ResourceController
{
    private $session;

    public function __construct()
    {
        $this->session = session();
        $this->userModel = new User();
    }

    public function index()
    {
        $users = $this->userModel->findAll();
        return $this->respond($users);
    }

    public function show($id = null)
    {
        $data = $this->userModel->where('id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No user found');
        }
    }

    public function create()
    {
        if ($this->request)
        {
            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'ic' => $this->request->getPost('ic'),
                'phone' => $this->request->getPost('phone'),
                'password' => $this->request->getPost('password'),
            ];

            $this->userModel->insert($data);
            $response = [
                'status' => 201,
                'error' => null,
                'messages' => [
                    'success' => 'Data Saved'
                ]
            ];
            return $this->respondCreated($response, 201);
        }
    }

    public function update($id = null)
    {
        if ($this->request)
        {
            $json = $this->request->getJSON();
            if($json){
                $data = [
                    'name' => $json->name,
                    'email' => $json->email,
                    'ic' => $json->ic,
                    'phone' => $json->phone,
                    'password' => $json->password,
                ];
            } else {
                $input = $this->request->getRawInput();
                $data = [
                    'name' => $input['name'],
                    'email' => $input['email'],
                    'ic' => $input['ic'],
                    'phone' => $input['phone'],
                    'password' => $input['password'],
                ];
            }
            $this->userModel->update($id, $data);
            $response = [
                'status' => 200,
                'error' => null,
                'messages' => [
                    'success' => 'Data Updated'
                ]
            ];
            return $this->respond($response);
        }
    }

    public function delete($id = null)
    {
        $data = $this->userModel->find($id);
        if ($data) {
            $this->userModel->delete($id);
            $response = [
                'status' => 200,
                'error' => null,
                'messages' => [
                    'success' => 'Data Deleted'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('No user found');
        }
    }
}

?>
