<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return 'Carlos Daniel Oliva';
});

Route::get('/php-basico', function () {

    echo "<h1 style='color: blue;'>Aprendiendo PHP</h1>";

    $name = 'Carlos  Oliva';
    $height = 1.76;
    $islogin = true;
    $age = 22;
    
    echo "<h4>".$name."</h4>";

    echo "<p>Mi altura es: ".$height." metros</p>";


    echo "<br><br><br> ********Estructuras de control********";

    $message = 'Soy '.$name.' y tengo '.$age.' años'. validateAge($age);


    if ($age >= 18) {
        $message = $message." y soy mayor de edad</p>";
    } else {
        $message .=" y soy menor de edad</p>";

    }

    $message .= $islogin ? " y estoy logueado" : " y no estoy logueado";

    echo $message;


    echo "<br><br><br> ********Estructuras de Datos********";

    $pc = [
        "name"=>"pc gamer core9",
        "price"=>6000,
        "marca"=> "lenovo"

    ];
    $teclado = [
        "name"=>"teclado",
        "price"=>200,
        "marca"=> "Asus"
    ];
    
    $listaProductos = [$pc, $teclado];
    foreach ($listaProductos as $item) {
        echo $item["name"] . "<br>";

    }



});


function validateAge($age){
    if ($age >= 18) {
       return " y soy mayor de edad</p>";
    } else {
        return " y soy menor de edad</p>";

    }
}
