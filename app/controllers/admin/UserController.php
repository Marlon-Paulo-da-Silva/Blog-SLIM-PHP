<?php

namespace app\controllers\admin;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use app\Repository\LoginRepository;
use app\helpers\Validates;

class UserController
{
    public function create(Request $request, Response $response, $args)
    {
        view('Admin/signup', ['title' => 'Admin Sign up']);
        // $response->getBody()->write("Hello, Marlon");
        return $response;
    }

    public function store(Request $request, Response $response, $args)
    {
        $email = strip_tags($_POST['email']);
        $passwrd = strip_tags($_POST['passwrd']);


        $user = new LoginRepository;
        $user = $user->verifyUser($email);

        $validate = new Validates;

        $validate->validate([
          'name' => 'required',
          'email' => 'required:email',
          'phone' => 'required:phone',
        ]);

        if($validate->hasErrors()){
          return $validate->back();
        }

        // echo json_encode(array("teste" => "teste"));
        // echo json_encode($teste);

        // die();

        // if (!$user) {
        //     http_response_code(401);
        //     die();
        // }

        // // if(!password_verify($passwrd, $user->passwrd)){

        // if ($passwrd != $user->passwrd) {
        //     // echo json_encode(['passwrd do banco: ' => $user->passwrd]);
        //     // echo json_encode(['passwrd do formulario: ' => $passwrd]);
        //     http_response_code(401);
        //     die();
        // }

        // unset($user->passwrd);

        // $_SESSION['user'] = $user;

        // http_response_code(200);

        // echo json_encode('loggedIn');

        // return $response;
    }
}
