CREATE DATABASE dbphp7;
USE dbphp7;
CREATE TABLE tb_usuarios (
    idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    deslogin VARCHAR(64) NOT NULL,
    dessenha VARCHAR(256) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios (deslogin, dessenha) VALUES ('root','!@#$%');

CREATE DATABASE dbloja;
USE dbloja;
CREATE TABLE funcionarios (
    idfunc INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(64) NOT NULL,
    sobrenome VARCHAR(64) NOT NULL,
    dtadmissao DATE(8) NOT NULL,
    cargo VARCHAR(80) NOT NULL,
    salario_total FLOAT(12) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()

);

INSERT INTO funcionarios () VALUES ();

SELECT * FROM tb_usuarios;
SELECT * FROM funcionarios;
