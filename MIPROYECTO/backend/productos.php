<?php

include '..class/autoload.php';

if(isset($_POST['accion']) && $_POST['accion'] == 'guardar'){
    $miproducto = new Productos();
    $miproducto->nombre = $_POST['producto'];
    $miproducto->descripcion = $_POST['descripcion'];
    $miproducto->precio = $_POST['precio'];
    $miproducto->categoria = $_POST['categoria'];
    $miproducto->guardar();
}else if(isset($_GET['add'])){
    include 'views/productos.html';
    die();
}

$lista_ctg = Categorias::listar();
include 'views/lista_productos.html';