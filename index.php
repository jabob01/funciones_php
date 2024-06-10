<?php

/*// Definimos un array llamado "compras" que almacena una lista de productos

$compras = array("arroz", "carne", "cafe", "pizza");

// Recorremos el array "compras" usando un bucle foreach

foreach ($compras as $producto) {

    // Imprimimos cada producto en la consola

    echo "El producto es: $producto<br>";
}

?>
<br></br>
<?php

// Definimos un array asociativo llamado "tipoCafe" que almacena los nombres y precios de diferentes tipos de café

$tipoCafe = array(
    "Mocachino" => 50,
    "Capuchino" => 70,
    "Colombiano" => 90,
    "Americano" => 80
);

// Recorremos el array "tipoCafe" usando un bucle foreach

foreach ($tipoCafe as $nombre => $precio) {

    // Imprimimos el nombre y el precio de cada tipo de café

    echo "El $nombre tiene un precio de $ $precio dólares<br>";
}

?>
<br></br>
<?php

// Definimos un array asociativo llamado "tipoCafe" que almacena los nombres y precios de diferentes tipos de café

$tipoCafe = array(
    "Mocachino" => 50,
    "Capuchino" => 70,
    "Colombiano" => 90,
    "Americano" => 80
);

// Definimos una variable llamada "cafeBuscado" para almacenar el nombre del café que queremos buscar

$cafeBuscado = "Colombiano";

// Recorremos el array "tipoCafe" usando un bucle foreach

foreach ($tipoCafe as $nombre => $precio) {

    // Verificamos si el nombre del café actual coincide con el nombre del café que estamos buscando

    if ($nombre == $cafeBuscado) {

        // Si coinciden, imprimimos el nombre y el precio del café encontrado

        echo "Encontramos a $nombre!! su precio es: $$precio";

        // Utilizamos la instrucción break para salir del bucle foreach

        break;
    }

    // Si no coinciden, imprimimos un mensaje indicando que todavía no hemos encontrado el café

    echo "Actualmente encontré al cafe $nombre <br>";
}

?>
<br></br>
*/


/*
$tipoCafe = array(
    "Mocachino" => 50,
    "Capuchino" => 70,
    "Colombiano" => 90,
    "recalentado" => 40,
    "Americano" => 80
);



foreach ($tipoCafe as $nombre => $precio) {

    if ($nombre == "recalentado") {


        continue;
    }

    echo "el cafe $nombre es rico <br>";
}

function get_pokemon() {

    $numero_aleatorio = rand(1, 5);

    switch ($numero_aleatorio) {
        case 1:
            echo "Pikachu <br>";
            break;

        case 2:
            echo "Charmander <br>";
            break;

        case 3:
            echo "Mewtwo <br>";
            break;

        default:
        echo "Lo siento, no hay ningún Pokemon para ti<br>";
    }

}

// Llamando a la funcion 20 veces

    for ($i=0; $i < 20; $i++) {

        get_pokemon();
    }



function buscar_dia($dia_buscado){

    //Convertimos a minúsculas
    $dia_buscado = strtolower($dia_buscado);

    // Primer letra en mayuscula para que coincida con array
    $dia_buscado = ucfirst($dia_buscado);

    $dias = array(
        "Lunes" => "Monday",
        "Martes" => "Tuesday",
        "Miercoles" => "Wednesday",
        "Jueves" => "Thursday",
        "Viernes" => "Friday",
        "Sabado" => "Saturday",
        "Domingo" => "Sunday"
    );

    foreach($dias as $español => $ingles) {        if($dia_buscado === $español) {
            echo "\n\t El día $dia_buscado se escribe en inglés $ingles";
            break;
        }
    }

    return $dia_buscado;
}


$dia_buscado = "lunes";
buscar_dia($dia_buscado);
*/
function sumar(...$argumentos) {
    $resultado=0;
    foreach($argumentos as $valor){
        $resultado+=$valor;

    }
echo "el resultado de la suma es: $resultado";
}
sumar(1,2,3,4,5)
?>
