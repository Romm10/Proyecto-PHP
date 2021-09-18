<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';
// $var_getMenu = $_GET['menu'];

switch ($var_getMenu) {
    case "home":
        require_once('./views/home.php');
        break;
    case "independencia":
        require_once('./views/independencia.php');
        break;
    case "cultura":
        require_once('./views/cultura.php');
        break;
    case "florayfauna":
        require_once('./views/florayfauna.php');
        break;
    case "login":
        require_once('./views/login.php');
        break;

    default:
        require_once('./views/home.php');
}
?>