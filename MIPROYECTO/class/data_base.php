<?php

/*
* @author Juan Pablo Durante
*/
try {
    $conector = new PDO("mysql:host=127.0.0.1;dbname=miproyecto;","root","");
    $conector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado";
} catch (Exception $ex){
    echo "Fallo la conexion" . $ex->getMessage();
}

class base_datos{
    private $gbd;

    function __construct($driver, $base_datos,$host,$user,$pass){
        $conection = $driver . ":dbname=" . $base_datos . ";host=$host";
        echo $conection;
        $this->gbd = new PDO($conection, $user, $pass); 

        if(!$this->gbd){
            echo "No se conecta";
            throw new Exception("No se ha podido realizar la conexion");
        }
    }

    function select($tabla,$filtros = null, $arr_porepare = null, $orden = null, $limit = null){
        $sql = "SELECT * FROM " . $tabla;
        if($filtros != null){
            $sql .= " WHERE " . $filtros;
        }
        if($orden != null){
            $sql .= " ORDER BY " . $orden;
        }
        if($limit != null){
            $sql .= " LIMIT " . $limit;
        }
        echo $sql;
        $resource = $this->gdb->prepare($sql);
        $resource->execute($arr_porepare);

        if($resource){
            return $resource->fetchAll(PDO::FETCH_ASSOC);
        }else{
            throw new Exception("No se pudo realizar la consulta seleccion");
        }
    }

    function delete($tabla,$filtros = null, $arr_porepare = null){
        $sql = "DELETE FROM " . $tabla . "WHERE " . $filtros;

        $resource = $this->gdb->prepare($sql);
        $resource->execute($arr_porepare);

        if($resource){
            return true;
        }else{
            throw new Exception("No se pudo realizar la consulta seleccion");
        }
    }

    function insert($tabla,$campos,$valores,$arr_prepare = null){
        $sql = "INSERT INTO " . $tabla . "(". $campos . ") VALUES ($values)";
        $resource = $this->gdb->prepare($sql);
        $resource->execute($arr_prepare);

        if($resource){
            return $this->gbd->lastInsertId();
        }else{
            echo '<pre>';
                print_r($resource->errorInfor());
            echo '</pre>';

            throw new Exception("No se pudo realizar la consulta seleccion");
        }
    }

    /*
    function update($tabla,$campos,$filtros, $arr_porepare = null){
        $sql = "UPDATE " . $tabla . " SET " . $campos "WHERE " . $filtros;

        $resource = $this->gdb->prepare($sql);
        $resource->execute($arr_porepare);

        if($resource){
            return true;
        }else{
            echo '<pre>';
                print_r($resource->errorInfo());
            echo '</pre>';
            throw new Exception("No se pudo realizar la consulta seleccion");
        }
    }*/
}