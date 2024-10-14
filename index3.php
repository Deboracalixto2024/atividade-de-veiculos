<?php

class veiculo{
    public $marca;
    public $modelo;
    public $ano;
    public $cor;


  public function __construct($marca,$modelo,$ano,$cor){
    $this->marca=$marca;
    $this->modelo=$modelo;
    $this->ano=$ano;
    $this->cor=$cor;
    
    }
    public function Ligar(){
        echo"Ligou";
    }

     
    public function Acelerar(){
       echo "Acelerarou";
      }

      public function freiar(){
        echo" freiou";
    
      }
    
}


class Carro {
    public $marca;
    public $modelo;
    public $ano;
    public $cor;


  public function __construct($marca,$modelo,$ano,$cor){
    $this->marca=$marca;
    $this->modelo=$modelo;
    $this->ano=$ano;
    $this->cor=$cor;
    
    }
    public function Ligar(){
        echo"Ligou";
    }
    public function Desligar(){
        echo "desligou"
    
    }

     
    public function Acelerar(){
       echo "Acelerarou";
      }

      public function freiar(){
        echo" freiou";
    
      }
    //.........................................................................

    }

class moto {
    public $marca;
    public $modelo;
    public $ano;
    public $cor;


  public function __construct($marca,$modelo,$ano,$cor){
    $this->marca=$marca;
    $this->modelo=$modelo;
    $this->ano=$ano;
    $this->cor=$cor;
    
    }
    public function Ligar(){
        echo"Ligou";
    }
    public function Desligar(){
        echo "desligou";
    }

     
    public function Acelerar(){
       echo "Acelerarou";
      }

      public function freiar(){
        echo" freiou";
    
      }
    
}









$civicao= new Carro("Honda " ,"civic","pretão",2021);
$titanzinha=new Moto("Honda","titam-160","azul",2021);

 echo "<pre>";
 var_dump($civicao);
 echo"</pre>";
 echo "<br>";
 echo "<pre>";
 var_dump($titanzinha);
 echo"</pre>";
 
 
 $civicao->abrirporta();
 $civicao->desligar();


 echo "<br>";
 $tintanzia->dargrau();
 $titanzinha->desligar();
 $titanzinha->abrirporta();






 //------------------------------------------------------------------------------------------------------



