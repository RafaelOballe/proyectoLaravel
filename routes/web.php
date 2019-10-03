<?php

Route::get('/', function () {
    return 'home';
});

Route::get('/usuarios', function () {
    return 'Usuarios';
});

Route::get('/usuarios/{id}', function ($id) {
    return 'Mostrando el id del usuario ' . $id;
})->where('id','[0-9]+');

Route::get('/usuarios/nuevo', function () {
    return 'Crear nuevo usuario';
});

Route::get('/saludo/{name}/{nickname?}', function($name, $nickname = null){
    if($nickname)
    {
        return "Bienvenido {$name}, tu sobrenombre es  {$nickname}";
    }else{
        return "Bienvenido {$name}, no tienes apodo";
    }
});