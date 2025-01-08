# Projeto de Login em PHP com Slim Framework e Plates

Este é um projeto de um sistema de login simples desenvolvido em PHP, utilizando o Slim Framework para gerenciamento de rotas e a biblioteca Plates para renderização de templates. O projeto segue a arquitetura MVC (Model-View-Controller) para uma melhor organização do código.

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação do backend.
- **Slim Framework**: Microframework para PHP que facilita a criação de aplicações web.
- **Plates**: Biblioteca de templates para PHP que permite a separação de lógica e apresentação.
- **MySQL**: Banco de dados para armazenar informações de usuários.

## Estrutura do Projeto

- **app/Routes**: Onde fica o arquivo routes.php, que faz a configuração de todas as rotas.
- **src/**: onde fica todos os outros arquivos do projeto.
- **src/Controllers**: Onde ficam os controllers das rotas.
- **src/Models**: Onde fica o arquivo database.php, responsável pela conexão e execução de queries com o banco de dados.
- **src/Views**: Onde ficam os arquivos das páginas html, que são renderizadas pelo Plates.



## Instalação

1. **Clone o repositório**:

   ```bash
   git clone https://github.com/seu-usuario/projeto-login.git
   cd projeto-login  
    ```
# Instale as dependências:

  Certifique-se de ter o Composer instalado. Execute o seguinte comando para instalar as dependências do projeto:
``` bash
composer install
```
# Configuração do Banco de Dados:
  Crie um banco de dados MySQL e Certifique-se de que a tabela de usuários esteja criada com os campos necessários (por exemplo, username e password_hash).

# Inicie o servidor:

  Você pode usar o servidor embutido do PHP para testar a aplicação:

```bash
    php -S localhost:8000 -t public
```
Acesse a aplicação em http://localhost:8000.

### Funcionalidades
  - **Login**: Usuários podem fazer login com um nome de usuário e senha.
  - **Logout**: Usuários podem sair da aplicação.
  - **Mensagens de Erro**: Mensagens de erro são exibidas em caso de falha no login.

### Contribuição

  Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue ou enviar um pull request.

### Licença

  Este projeto está licenciado sob a MIT License.


### Personalização

- **Substitua** `https://github.com/seu-usuario/projeto-login.git` pelo URL do seu repositório.
- **Adapte** as instruções de instalação e configuração conforme necessário, dependendo de como você estruturou seu projeto e suas dependências.
- **Adicione** mais detalhes sobre funcionalidades específicas ou instruções de uso, se necessário.

Esse `README.md` fornece uma visão geral clara do seu projeto, suas dependências e como configurá-lo, o que é útil para qualquer pessoa que deseje entender ou contribuir para o seu projeto.
