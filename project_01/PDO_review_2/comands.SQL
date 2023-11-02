CREATE DATABASE dbphp7;
USE dbphp7;
CREATE TABLE tb_usuarios (
    idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    deslogin VARCHAR(64) NOT NULL,
    dessenha VARCHAR(256) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);
/* fazendo um Insert tb_usuarios */
INSERT INTO tb_usuarios (deslogin, dessenha) VALUES ('root','!@#$%');
/* Fazendo um Update: */
UPDATE tb_usuarios SET dessenha = '123456' WHERE idusuario = 1;
UPDATE tb_usuarios SET deslogin = '!@#$###' WHERE idusuario = 2;
/* Fazendo um Alter table: */

/* fazendo um Delete: */
DELETE tb_usuarios WHERE idusuario = 1;

CREATE DATABASE dbloja;
USE dbloja;
CREATE TABLE funcionarios (
    idfunc INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(64) NOT NULL,
    sobrenome VARCHAR(64) NOT NULL,
    dtadmissao VARCHAR(8) NOT NULL,
    cargo VARCHAR(80) NOT NULL,
    salario_total FLOAT(12) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()

);
/*Fazendo um Insert no Banco: */
INSERT INTO funcionarios (cargo,salario_total) VALUES ('Vendedor Senior', 1000);
/*Fazendo um Select nas tabelas: */
SELECT * FROM tb_usuarios;
SELECT * FROM funcionarios;
/*fazendo um update: */
UPDATE funcionarios SET salario_total = 3000 WHERE idfunc = 1;
UPDATE funcionarios SET cargo = 'Motorista' WHERE idfunc = 1;
/* fazendo um alter Table: */

/* fazendo um delete no  banco: */
DELETE funcionarios WHERE idfunc = 1;
/* Fim dos comandos SQL */

/*Apagando as tabelas: */

TRUNCATE TABLE tb_usuarios;
TRUNCATE TABLE funcionarios;

/*Apagando o banco de dados: */

DROP DATABASE dbphp7;
DROP DATABASE dbloja;
/*---------------------------------------------------------------------------------------------------*/

/*Criando uma nova Tabela Vendedor, clientes e Pedidos:*/
/* VENDEDOR: */
CREATE TABLE vendedor (
codigo_vendedor INT NOT NULL PRIMARY KEY,
nome VARCHAR(50),
idade CHAR(3),
sexo CHAR(1),
salario DECIMAL (10,2)
);

/*CLIENTE: */ 
CREATE TABLE cliente (
codigo_cliente INT NOT NULL PRIMARY KEY,
nome VARCHAR(50),
cidade VARCHAR(10),
tipo_industria CHAR(1)
);

 /*PEDIDO: */
create table pedido (
numero_pedido INT NOT NULL PRIMARY KEY,
codigo_cliente INT,
codigo_vendedor INT,
valor_pedido DECIMAL(10,2)
);

/*realizando o insert nas tabelas:*/
INSERT INTO vendedor (nome, idade, sexo) VALUES ("Ricardo",20,"M");
INSERT INTO cliente  (nome, cidade, tipo_industria) VALUES ('Alberto','São Paulo','Alimenticia');
INSERT INTO pedido   (codigo_cliente, codigo_vendedor, valor_pedido) VALUES (01152,058,2.000,00);

UPDATE vendedor SET nome =  'Anderson' WHERE codigo_vendedor = 1;
UPDATE cliente  SET cidade =  'Guarulhos' WHERE codigo_cliente = 1;
UPDATE pedido   SET valor_pedido = 3.000,00 WHERE valor_pedido > 2.000,00; 

/*NOTA IMPORTANTE:
    Os comandos ON UPDATE CASCADE e ON DELETE CASCADE servem para que,
    no momento que eu for utilizar meus comandos UPDATE ou DELETE para modificar
    os campos ou registros da minha tabela, todos as PRIMARY KEY e FOREIGN KEY sejam modificadas, também.
*/
ALTER TABLE pedido
ADD CONSTRAINT fk_pedido_cliente FOREIGN KEY (codigo_cliente) REFERENCES cliente (codigo_cliente) ON UPDATE cascade ON DELETE CASCADE
 
ALTER TABLE pedido
ADD CONSTRAINT fk_pedido_vendedor FOREIGN KEY (codigo_vendedor) REFERENCES vendedor (codigo_vendedor) ON UPDATE cascade ON DELETE CASCADE

