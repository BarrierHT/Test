<?php



class Coche {

    // Atributos o propiedades

    private $color;                           //Atributo Private
    private $modelo;                          //Atributo Private
    public $velocidad;                        //Atributo Public
    protected $precio;                        //Atributo Protected


    public function __construct($color = "NoRegistered",$modelo="NoRegistered",$velocidad="NoRegistered",$precio="NoRegistered"){
        $this->color = $color;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->precio = $precio;
    }

    public function mostrar(Coche $object){
        return "Precio =  ".$object->precio."  Velocidad =    ".$object->velocidad;
    } 


    protected function getColor(){
        return $this->color;
    }
    public function setColor($color){
         $this->color = $color;
    }
   
  
};



class Antiguo extends Coche{

    private $oxidation;


    public function __construct($color= "NoRegistered", $modelo="NoRegistered", $velocidad="NoRegistered",
     $precio="NoRegistered",$oxidation="NoRegistered"){
       
        parent::__construct($color,$modelo,$velocidad,$precio);
        $this->oxidation = $oxidation;
    }

    public function getColor2(){
        return $this->getColor();
    }

};









?>