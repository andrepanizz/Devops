USE dbphp7;
CREATE TABLE tb_usuarios (
  idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  deslogin VARCHAR(64) NOT NULL,
  dessenha VARCHAR(256) NOT NULL,
  dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

## Depois podemos dar um CRTL+ENTER pra criar a tabela;
## Este e um INSERT declarativo, eu digo aonde eu quero Inserir com as informações;
## Quais são os valores que quero inserir nestas colunas (desslogin e dessenha) correspondente;
INSERT INTO tbusuarios (deslogin,dessenha) VALUES ('root','!@#$%');

## para verificarmos se a tabela com as informações foi criada usamos um comando chamado SELECT:

SELECT * FROM tb_usuarios;

## Podemos atualizar os dados fazendo um teste de um UPDATE:

UPDATE tb_usuarios SET (qual a coluna que eu quero alterar) dessenha = '123456' WHERE idusuario = 1; (onde o ID usuario for igual a 1)
## Note que, aqui eu passo a coluna que quero alterar e digo onde idusuario for igual a 1;
## Na coluna que esta o ID 1 do idusuario, será alterado o valor de '!@#$%' para '123456';

## Ultimo comando que vamos aprender e o DELETE:
DELETE FROM tb_usuarios WHERE idusuario = 1;
## Estou pedindo pra ele deletar somente esta coluna ('idusuario') onde o registro dele for igual a 1;
## Daremos outro Select, para verificar se foi deletado;

## Para apagar a tabela como se ela nunca estivesse existido damos um TRUNCATE TABLE:
TRUNCATE TABLE tbusuarios;

