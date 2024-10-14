<?php
class Pessoa{
  public $nome;
  public $idade;
  public $altura;
  public $peso;
   
  public function __construct($nome,$idade,$altura,$peso){
    $this->nome=$nome;
    $this->idade=$idade;
    $this->altura=$altura;
    $this->peso=$peso;

  }




  
  public function setNome($n){
   $this->nome = $n;


  }
  public function getNome(){
    return $this->nome;
  }



  public function Andar(){
    echo $this->nome. " andou";
  }
  public function Falar(){
    echo $this->nome. " falou";

    

  }
  public function comer(){
    echo $this->nome. " comeu";
   

  }
  public function dormir(){
    echo $this->nome. " durmiu";
   

  }


}
$Pedro=new Pessoa("Pedro Lucas",17,1.73,45);


//echo $Pedro->getNome();
$Pedro->dormir();



?>
