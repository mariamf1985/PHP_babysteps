<?php
//1.Declara una variable por cada tipo de dato y asignar un valor
//2.Muestra el valor de esa variable en consola y en pantalla 
//(Averigua cómo imprimir el valor booleano (que imprima true o false), un array y un valor nulo (que imprima NULL).

//STRINGS
$nombre = "Juan";

echo "<p>$nombre</p>";

//NÚMEROS

$edad = 25;

$altura = 1.80;

echo "<p>$edad</p>";
echo "<p>$altura</p>";

//BOOLEANOS

$esMayorDeEdad = true;

echo $esMayorDeEdad ? 'true' : 'false';

//ARRAYS

$colores = array("rojo", "verde", "azul");

echo "<pre>";
print_r($colores);
echo "</pre>";

//OBJETOS

class Persona
{

    public $nombre;

    public $edad;
}

$persona = new Persona();

$persona->nombre = "Ana";

$persona->edad = 30;

$personaArray = get_object_vars($persona);

echo "<pre>";
print_r($personaArray);
echo "</pre>";

//NULL

$variableNula = null;

echo "<pre>";
echo var_export($variableNula, true);
echo "</pre>";

//¿Qué tipo de dato son las siguientes variables?

//Fácil
$nombre = "Luna";
$apellido = "Lovegood";
$edad = 42;
$Ravenclaw = true;

echo "<pre>";
echo "Las variables nombre y apellido son de tipo 'string', la variable edad es de tipo 'integer' y Ravenclaw es 'booleano'.";
echo "</pre>";

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
$nombre_completo = $nombre . " " .
$apellido;
$presento_examen = (bool) 1;

echo "<pre>";
echo "La variable promedio es de tipo 'float', nombre_completo es de tipo 'string y presento_examen es 'booleano'.";
echo "</pre>";

//Avanzado
$numero_preguntas = 5 + "5";
$numero_respuestas = "5" + 5;
$promedio_maximo =
$numero_respuestas / 1.0;
$nargles = 3 + "5 nargles";

echo "<pre>";
echo "La variable numero_preguntas y numero_respuestas son de tipo 'integer', promedio_maximo es de tipo 'float' porque realiza la operación de numero_respuestas/1.0 y nargles es de tipo 'integer'.";
echo "</pre>";

//Suponiendo estas variables

$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// ¿Cuál es el resultado según las tablas de verdad?

echo "<pre>";
echo $es_un_michi_grande && $le_gusta_comer ? 'true' : 'false' . "</br>";
echo $es_un_michi_grande || $sabe_volar ? 'true' : 'false' . "</br>";
echo $sabe_volar || $tiene_2_patas ? 'true' : 'false' . "</br>";
echo !$le_gusta_comer ? 'true' : 'false' . "<br>";
echo !$le_gusta_comer || $es_un_michi_grande ? 'true' : 'false' . "</br>";
echo "</pre>";


//Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la
//variable original.

$nombreMayusculas = strtoupper($nombre);

echo "<pre>";

echo $nombreMayusculas;
echo "\nOriginal: " . $nombre;

echo "</pre>";


//Imprime en pantalla la longitud de la variable tipo string.

$longitud = strlen($nombre);

echo "<pre>";
echo "La longitud del string es: $longitud";
echo "</pre>";

//Imprime en pantalla la cantidad de palabras de la variable tipo string.

$cantidadPalabras = str_word_count($nombre);
echo "<pre>";
echo "La cantidad de palabras del string es: $cantidadPalabras";
echo "</pre>";
//Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la
//variable original.

$invertido = strrev($nombre);
echo "<pre>";
echo "String original: " . $nombre . "\n" . "</br>";
echo "String invertido: " . $invertido;
echo "</pre>";

//Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.

$animal = "Gato";

$reemplazado = str_replace('Gato', 'Michi', $animal);
echo "<pre>";
echo "String original: " . $animal . "\n" . "</br>";
echo "String modificado: " . $reemplazado;
echo "</pre>";

//Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla

$numero1 = 10;
$numero2 = 8;

echo "<pre>";
echo "$numero1 & $numero2";
echo "</pre>";

//Suma ambas variables de tipo integer e imprime en pantalla.

$suma = $numero1 + $numero2;

echo "<pre>";
echo $suma;
echo "</pre>";

//Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y
//consola

$variable1 = 1;
$variable2 = 2;

echo "<pre>";
echo "Tipo de dato de variable1: "; var_dump(gettype($variable1));
echo "Tipo de dato de variable2: "; var_dump(gettype($variable2));
echo "</pre>";

//a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato
//en pantalla y consola.

$variable1 = (bool) 1;
$variable2 = (bool) 0;

echo "<pre>";
echo "Nuevo tipo de dato de variable1: "; var_dump(gettype($variable1));
echo "Nuevo tipo de dato de variable2: "; var_dump(gettype($variable2));
echo "</pre>";

//Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime
//en pantalla y por consola el resultado

function sumar($num1, $num2) {
    $suma = $num1 + $num2;
    return $suma;
}

$num1 = 5;
$num2 = 7;

$resultado = sumar($num1, $num2);

echo "<pre>";
echo "La suma de $num1 y $num2 es: $resultado\n";
echo "<pre>";

//Crear función que determine si un número es par o impar. Imprime por consola y pantalla

function determinarParidad($numero) {
    if ($numero % 2 == 0) {
        return "par";
    } else {
        return "impar";
    }
}

$numero = 8;

$resultado = determinarParidad($numero);

echo "<pre>";
echo "El número $numero es $resultado.\n";
echo "</pre>";

//Crear un array de 10 números

$arrayNumeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

print_r($arrayNumeros);

//Obtén el largo del array e imprime en pantalla y consola.

$longitudArray = count($arrayNumeros);

echo "<pre>";
echo "La longitud del array es: $longitudArray\n";
echo "</pre>";

//Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla

$arrayNumeros[] = "Once";

echo "Array con nuevo valor: ";
print_r($arrayNumeros);

//ahora agrega 2 elementos más a tu array e imprime en pantalla.

$arrayNumeros[] = "Doce";
$arrayNumeros[] = 13; 

echo "Array con nuevos valores: ";
print_r($arrayNumeros);

//Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.

$nuevoArrayNumeros = array(42, 99);

// Concatenar los dos arrays
$concatenado = $arrayNumeros + $nuevoArrayNumeros;

// Imprimir en pantalla
echo "Array concatenado: ";
print_r($concatenado);

//Crear una función que imprima en consola y pantalla todos los números de un array en una lista

$miArray = [1, 2, 3, 4, 5];

function imprimirNumeros($array) {
    echo "<ul>";
    foreach ($array as $numero) {
        echo "<li>$numero</li>";
    }
    echo "</ul>";
}

$miArray = [1, 2, 3, 4, 5];
imprimirNumeros($miArray);

//Crear una función que añade un número al array

function añadirNumero($array, $numero) {
    $array[] = $numero;
    return $array;
}

$nuevoNumero = 11;

$miArray = añadirNumero($miArray, $nuevoNumero);

imprimirNumeros($miArray);

//Crear una función que elimine los números pares de ese array.

function eliminarNumerosPares($array) {
    $array_resultante = array_filter($array, function($numero) {
        return $numero % 2 !== 0;
    });

    return array_values($array_resultante);
}

$miArray = eliminarNumerosPares($miArray);

imprimirNumeros($miArray);

//Crear una función que devuelva el número mayor de un array.

function encontrarNumeroMayor($array) {
    if (empty($array)) {
        return null; 
    }

    $maximo = $array[0];

    foreach ($array as $numero) {
        if ($numero > $maximo) {
            $maximo = $numero;
        }
    }

    return $maximo;
}

$mayorNumero = encontrarNumeroMayor($miArray);

echo "<pre>";
echo "El número mayor es: $mayorNumero";
echo "</pre>";

//Crear una función que devuelva el número menor de un array.

function encontrarNumeroMenor($array) {
    if (empty($array)) {
        return null; 
    }

    $minimo = $array[0];

    foreach ($array as $numero) {
        if ($numero < $minimo) {
            $minimo = $numero;
        }
    }

    return $minimo;
}

$menorNumero = encontrarNumeroMenor($miArray);

echo "<pre>";
echo "El número menor es: $menorNumero";
echo "</pre>";

//Crear un función que convierta en minúsculas todas las letras de un texto.

function convertirAMinusculas($texto) {
    return strtolower($texto);
}

$textoOriginal = "Hola Mundo";

$textoMinusculas = convertirAMinusculas($textoOriginal);

echo "<pre>";
echo "Texto en minúsculas: $textoMinusculas";
echo "</pre>";

//Crear una función que convierta en mayúsculas todas las letras de un texto.

function convertirAMayusculas($texto) {
    return strtoupper($texto);
}

$textoOriginal = "Hola Mundo";

$textoMayusculas = convertirAMayusculas($textoOriginal);

echo "<pre>";
echo "Texto en mayúsculas: $textoMayusculas";
echo "</pre>";

//Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre
//en mayúscula.

function capitalizarPrimerLetraNombres($nombres) {
    $nombresCapitalizados = array_map('ucfirst', $nombres);
    return $nombresCapitalizados;
}

$nombresOriginales = ["juan", "maría", "pedro", "laura"];

$nombresCapitalizados = capitalizarPrimerLetraNombres($nombresOriginales);

echo "<pre>";
echo "Nombres capitalizados: " . implode(", ", $nombresCapitalizados);
echo "</pre>";

//Crear una clase coche con sus atributos y un atributo puede ser de tipo array

class Coche {
    
    public $marca;
    public $modelo;
    public $color;
    public $caracteristicas = array();

    public function __construct($marca, $modelo, $color, $caracteristicas) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->caracteristicas = $caracteristicas;
    }

    public function obtenerInformacion() {
        $info = "Coche: $this->marca $this->modelo\n";
        $info .= "Color: $this->color\n";
        $info .= "Características: " . implode(", ", $this->caracteristicas) . "\n";

        return $info;
    }
}

$caracteristicasCoche = ["Aire acondicionado", "Sistema de navegación", "Asientos de cuero"];
$miCoche = new Coche("Toyota", "Corolla", "Rojo", $caracteristicasCoche);

echo "<pre>";
echo $miCoche->obtenerInformacion();
echo "</pre>";

//Crear una función que devuelva la marca del carro.
//Crear una función que devuelva la cantidad de puertas que tiene el carro.

class Carro {
    
    public $marca;
    public $modelo;
    public $color;
    public $puertas;
    public $caracteristicas = array();

    public function __construct($marca, $modelo, $color, $puertas, $caracteristicas) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->puertas = $puertas;
        $this->caracteristicas = $caracteristicas;
    }

    public function obtenerAtributo($atributo) {
        if (property_exists($this, $atributo)) {
            return $this->$atributo;
        } else {
            return null; 
        }
    }

    public function obtenerMarca() {
        return $this->marca;
    }

    public function obtenerCantidadPuertas() {
        return $this->puertas;
    }

    public function obtenerInformacion() {
        $info = "Carro: $this->marca $this->modelo\n";
        $info .= "Color: $this->color\n";
        $info .= "Puertas: $this->puertas\n";
        $info .= "Características: " . implode(", ", $this->caracteristicas) . "\n";

        return $info;
    }
}

$caracteristicasCarro = ["Aire acondicionado", "Sistema de navegación", "Asientos de cuero"];
$miCarro = new Carro("Toyota", "Corolla", "Rojo", 4, $caracteristicasCarro);

$marcaCarro = $miCarro->obtenerMarca();
echo "<pre>";
echo "Marca del carro: $marcaCarro\n";
echo "</pre>";

$cantidadPuertas = $miCarro->obtenerCantidadPuertas();
echo "<pre>";
echo "Cantidad de puertas del carro: $cantidadPuertas\n";
echo "</pre>";

$modeloCarro = $miCarro->obtenerAtributo("modelo");
echo "Modelo del carro: $modeloCarro\n";

?>
