<?php
namespace App\Controllers;
use Slim\App;
use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Models\Database;

class LoginController extends \Controller
{
    public function logout(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
      session_start();
      $_SESSION['logado'] = false;
      session_destroy();
      $this->view('home', ['logado' => $_SESSION['logado'], 'user' => $_SESSION['user']]);
      return $response->withStatus(200);
    }
    public function login(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
      session_start();
      $app = AppFactory::create();
      $parametros = (array) $request->getParsedBody();

      $pdo = new Database;
      $pdo->connect('php_login','teste','password');
      $resultado = $pdo->read($parametros['username']);
      //checa se o usuário existe
      if (!$resultado) {
        $_SESSION['alert'] = 'Usuário não existe';
        $this->view('home', ['logado' => $_SESSION['logado'], 'user' => $_SESSION['user'], 'alert' => $_SESSION['alert']]);
        return $response->withHeader('Location', '/home')->withStatus(302);
      }
      //Verifica se a senha que veio do form bate com o hash na DB
      if (password_verify($parametros['password'],$resultado->password_hash )) {

        $_SESSION['user'] = $parametros['username'];
        $_SESSION['logado'] = true; 
        return $response->withHeader('Location', '/home')->withStatus(302);

      }else {

        $_SESSION['logado'] = false; 
        $_SESSION['alert'] = 'Senha incorreta';
        $this->view('home', ['logado' => $_SESSION['logado'], 'user' => $_SESSION['user'], 'alert' => $_SESSION['alert']]);
        return $response->withHeader('Location', '/home')->withStatus(302);
        
      }
    }
}
