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

