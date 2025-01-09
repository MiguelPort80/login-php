<?php
namespace App\Models;

class Database{
    public $pdo;
    public function connect($dbname, $user, $password){
        $this->pdo = new \PDO("mysql:host=localhost; dbname={$dbname}; charset=UTF8", "{$user}", "{$password}");
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
        return $this->pdo;
    }
    public function create($usuario, $senha){
        try {

          $username = filter_var($usuario, FILTER_SANITIZE_STRING);
          $senha = filter_var($senha, FILTER_SANITIZE_STRING);

          $password_hash = password_hash($senha, PASSWORD_DEFAULT);

          $prepare = $this->pdo->prepare("INSERT INTO usuarios (username, password_hash) VALUES (:username, :password_hash)");
          $prepare->execute([
            'username' => $username,
            'password_hash' => $password_hash
          ]);
        } catch (\PDOException $e) {
          echo "<p>Erro no banco de dados: {$e}</p>";
        }
      }

      public function read($username){
        try {
          $prepare = $this->pdo->prepare("SELECT username, password_hash FROM usuarios WHERE username = :username");
          $prepare->bindParam(':username', $username);
          $prepare->execute();
          //O resultado será um objeto 
          $resultado = $prepare->fetch(\PDO::FETCH_OBJ);
          return $resultado;
        } catch (\PDOException $e) {
          echo "<h1> Erro no banco de dados:{$e->getMessage()}</h1>";
    
        }
        
      }
}