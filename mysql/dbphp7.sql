# BANCO DE DADOS PARA O PROJETO EM PHP 7
  
CREATE TABLE tb_usuarios (
idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
deslogin VARCHAR(64) NOT NULL,
dessenha VARCHAR(256) NOT NULL,
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios (deslogin, dessenha) VALUES ('root','!@#$%');
SELECT * FROM tb_usuarios;
UPDATE tb_usuarios SET dessenha = '123456' WHERE idusuario = 1;
DELETE FROM tb_usuarios WHERE idusuario = 1;

TRUNCATE TABLE tb_usuarios;
USE dbphp7;

/* FIM DO ARQUIVO SQL  */

# Adicionando outro banco de dados chamado register_db:

CREATE DATABASE register_db;
USE register_db;
CREATE TABLE table_users(

id INT(1) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(40) NOT NULL,
endereco VARCHAR(30) NOT NULL,
dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
birth_date DATETIME(8) NOT NULL,
idade INT(2) NOT NULL

);

SELECT * FROM table_users;

INSERT INTO table_users () VALUES ();

UPDATE table_users SET ("");

DELETE from users;

# ATER TABLE  table_users ADD nome  VARCHAR(30);
# ALTER TABLE table_users ADD email VARCHAR(20);
# ALTER TABLE table_users ADD cep   VARCHAR(9);
# ALTER TABLE table_users ADD cidade VARCHAR(15);
# ALTER TABLE table_users ADD endereco VARCHAR(40);


