# cakeblog-study :cake:
Realização do tutorial Blog utilizando o framework CakePHP e o Bootstrap 4.0

#### Para testar o projeto, é necessário:
* Ter o WampServer ou o XamppServer (Foi o utilizado para o estudo)

* (No XamppServer) Copiar os arquivos do projeto para a pasta "C:\xampp\htdocs", ou para o diretório onde o Xampp esteja instalado em sua máquina

* Criar um banco de dados no MySQL com o nome de "blogcake" (Caso escolha outro nome ou tenha usuário configurado no MySQL, será necessário fazer as alterações no arquivo "database.php" localizado dentro do diretório app/config na pasta da aplicação)

  * Criar a tabela "posts" utilizando o código abaixo

    ```
    -- Primeiro, criamos nossa tabela de posts
    CREATE TABLE posts (
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(50),
        body TEXT,
        created DATETIME DEFAULT NULL,
        modified DATETIME DEFAULT NULL
    );
    
    -- Agora inserimos alguns posts para testar
    INSERT INTO posts (title, body, created)
        VALUES ('The title', 'This is the post body.', NOW());
    INSERT INTO posts (title, body, created)
        VALUES ('A title once again', 'And the post body follows.', NOW());
    INSERT INTO posts (title, body, created)
        VALUES ('Title strikes back', 'This is really exciting! Not.', NOW());
    ```

  * Acessar utilizando o link http://localhost/cakeblog-study-main/posts

* Obsevações:
  * Por ser um projeto de estudo, os códigos não seguem um padrão, isso foi proposital, para testar formas diferentes de se trabalhar com o cakephp

* Sobre o projeto:
  * Tutorial através do link: [Blog - 2.x (cakephp.org)](https://book.cakephp.org/2/pt/tutorials-and-examples/blog/blog.html)
  * Foram inseridas algumas funções que não estão no tutorial, como por exemplo: a exclusão e edição de uma determinada postagem através da tela de visualização

