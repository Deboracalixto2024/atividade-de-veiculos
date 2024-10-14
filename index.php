<?php

class Usuario{
    //atributos=sao caracteristas que nosso objeto terão
    public $nome;
    public $idade;
    public $email;
    public $senha;

     //metados= ações que nossos objetos poderão executar
    public function Cadastrar(){
        if($this-> email =="teste@gmail.com"&& $this->senha == "12345"){
            echo "cadastrado com sucesso";
    } else {
        //não cadastrado
        echo "não cadastrado";
    }
    }
}


//palavra reservada "new" para criarmos um novo objeto a parti da classe referida
$Debora = new usuario();
//para indicar qual atributo ou metado esta sendo chamado

$Debora->nome="Debora Calixto";
$Debora->idade="27";
$Debora->email="teste@gmail.com";
$Debora->senha="12345";



var_dump($Debora);

$Debora-> Cadastrar();




?>
