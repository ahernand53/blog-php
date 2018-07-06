<?php

namespace app\controllers\admin;

use app\controllers\BaseController;
use app\models\User;
use Sirius\Validation\Validator;

class UserController extends BaseController{

    public function getIndex(){

        $users = User::all();
        return $this->render('admin/users.twig', [

            'users' => $users

        ]);

    }

    public function getCreate(){

        return $this->render('admin/insert-user.twig');

    }

    public function postCreate(){

        $result = false;
        $errors = [];

        $validator = new Validator();
        $validator->add('name', 'required');
        $validator->add('email', 'required');
        $validator->add('password', 'required');

        if($validator->validate($_POST)){

            $user = new User([

                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => md5($_POST['password'])

            ]);

            $user->save();
            $result = true;

        }else{

            $errors = $validator->getMessages();

        }

        return $this->render('admin/insert-user.twig', [

            'result' => $result,
            'errors' => $errors

        ]);

    }

}