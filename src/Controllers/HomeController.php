<?php
namespace App\Controllers;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HomeController extends \Controller
{
    public function index(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {

      $this->view('home', ['logado' => $_SESSION['logado'], 'user' => $_SESSION['user'], 'alert' => $_SESSION['alert']]);

      return $response->withStatus(200);
    }
}
