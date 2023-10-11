<?php
class Cadastro {

    private $nome;
    private $email;
    private $senha;

    //criando os getters and setters:

    public function getNome():string 
    {
        return $this->nome;
    }

    public function getEmail():string 
    {
        return $this->email;
    }

    public function getSenha():string 
    {
        return $this->senha;
    }

    //setters:
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setSenha($senha)
    /* Poderia validar no campo de setar a senha
       por exemplo colocar uma validação que só receba letra maiusculas
       com if ou switch case, assim só depois de verificada poderia ser atribuida a senha */
    {
        $this->senha = $senha;
    }

    //metodo to string

    public function __toString()
    {
        return json_encode(array("Nome: " => $this->getNome(),
                                 "Senha: "=> $this->getEmail(),
                                 "Email: "=> $this->getSenha()));
    }
    //estamos  mandando um json_encode com o metodo magico toString();

}




?>
