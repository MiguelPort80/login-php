<?php
namespace App\Controllers;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Models\Database;

class UserController extends \Controller
{
    public function index(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
      $this->view('user_create', ['title' => 'Criar usuário']);
      return $response->withStatus(200);
    }

    public function create(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
      $parametros = (array) $request->getParsedBody();

      $pdo = new Database;
      $pdo->connect('php_login','teste','password');
      //se o usuário já existir retorna o cliente para /home
      if($pdo->read($parametros['username']) !== false){
        $_SESSION['alert'] = 'Usuário já existe';
        $this->view('home', ['alert' => $_SESSION['alert']]);
        return $response->withHeader('Location', '/home')->withStatus(302);
      }

      $pdo->create($parametros['username'], $parametros['password']);

      header( "refresh:5;url=/home" );
      echo '<p>Você será redirecionado em 5 segundos. Se não clique </p><a href="/home">Aqui</a>.';

      return $response->withStatus(200);
    }
}
