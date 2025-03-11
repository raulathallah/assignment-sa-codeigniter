<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Myth\Auth\Controllers\AuthController;
use Myth\Auth\Models\GroupModel;
use Myth\Auth\Models\UserModel;

class Auth extends AuthController
{
    protected $auth;
    protected $config;
    protected $userModel;
    protected $groupModel;
    public function __construct()
    {
        parent::__construct();
        $this->userModel = new UserModel();
        $this->groupModel = new GroupModel();

        $this->auth = service('authentication');
    }


    public function index()
    {
        //
    }


    public function attemptLogin()
    {
        $result = parent::attemptLogin();
        return $this->redirectBasedOnRole();
    }

    public function attemptRegister()
    {
        // Jalankan registrasi bawaan
        $result = parent::attemptRegister();
        $email = $this->request->getPost('email');

        $roleGroup = $this->request->getPost('role_group');
        $user = $this->userModel->where('email', $email)->first();
        if ($user) {
            // Tambahkan ke group student
            $studentGroup = $this->groupModel->where('name', $roleGroup)->first();
            if ($studentGroup) {
                $this->groupModel->addUserToGroup($user->id, $studentGroup->id);
            }
        }
        return redirect()->route('login')->with('message', lang('Auth.registerSuccess'));
    }

    private function redirectBasedOnRole()
    {
        $userId = user_id();

        if ($userId == null) {
            return redirect()->to('/login');
        }

        $userGroups = $this->groupModel->getGroupsForUser($userId);

        // foreach ($userGroups as $group) {
        //     if ($group['name'] === 'admin') {
        //         return redirect()->to('admin/dashboard');
        //     } else if ($group['name'] === 'lecturer') {
        //         return redirect()->to('lecturer/dashboard');
        //     } else if ($group['name'] === 'student') {
        //         return redirect()->to('student/dashboard');
        //     }
        // }

        return redirect()->to('/');
    }
}
