<?php

namespace Controllers;

use MVC\Router;

class CitaController {

    public static function index(Router $router) {

        if(!isset($_SESSION)) {
            session_start();
        }

        // Funcion que comprueba que el usuario haya iniciado sesion
        isAuth();

        $router->render('cita/index', [
            'nombre' => $_SESSION['nombre'],
            'id' => $_SESSION['id']
        ]);

    }

}