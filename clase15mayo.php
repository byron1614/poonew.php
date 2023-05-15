<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// FINAL - 
// ABSTRACT -
// STATIC -

abstract class Fruta{
    protected $color;
    public $tipo;
    private $cantidad;
    public static $tamaño = "Mediano";

    public function __construct($color, $tipo, $cantidad){
        $this->color = $color;
        $this->tipo = $tipo;
        $this->cantidad = $cantidad;
    }

    final public static function getTamaño(){
        echo "La fruta es de tamaño " . self::$tamaño;
    }

    public function getInfo() : void{
        echo "La fruta es de tipo $this->tipo, y tiene un color $this->color";
    }
    public function getCantidad(): void{
        echo "la cantidad de fruta disponible es:  $this->cantidad ";
    }

}

class Manzana extends Fruta{
    public $sabor;
    
    public function __construct($sabor = " ", $color = " ", $tipo = " ", $cantidad = " "){
        $this->sabor = $sabor;
        parent::__construct($color, $tipo, $cantidad);
    }
   
    public function getInfo() : void{
        echo "La manzana es de $this->tipo, color $this->color, sabor $this->sabor, y tamaño " . parent::$tamaño;
    }
}

class Pera extends Fruta{
    public function getInfo() : void{
        echo "La pera es de tipo:  $this->tipo, color $this->color, y tamaño " . parent::$tamaño;
    }
}

$manzanaRoja = new Manzana("dulce", "rojo", "primera calida", 10);
$manzanaRoja->getInfo();
echo "<br>";
$manzanaRoja->getCantidad();
echo "<br>";
echo "<hr>";
$peraVerde = new Pera("verde", "Pera Guatemalteca", 5);
$peraVerde->getInfo();
echo"<br>";
$peraVerde->getCantidad();
echo "<br>";


