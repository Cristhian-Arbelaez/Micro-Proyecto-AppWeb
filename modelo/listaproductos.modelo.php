<?php

require_once "conexion.php";

class ListaProductosModelo
{

    // static public function mdlListarProveedores()
    // {
    //     $stmt = Conexion::conectar()->prepare("SELECT ID_Proveedor, Nombre FROM proveedor p order BY Nombre asc");
    //     $stmt->execute();
    //     return $stmt->fetchAll();

    // }

    static public function mdlListarListaProductos()
    {
        $stmt = Conexion::conectar()->prepare('call prc_ListarListaProductos()');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    static public function mdlListarListaProductos2()
    {
        $stmt = Conexion::conectar()->prepare("SELECT ID_Prducto, Nombre FROM producto p order BY Nombre asc");
        $stmt->execute();
        return $stmt->fetchAll();

    }

    // static public function mdlAgregarProveedor($Nombre)
    // {
    //     try {
    //         $fecha_actual = date('Y-m-d');
    //         $idproveedor = null;
    //         $stmt = Conexion::conectar()->prepare("INSERT INTO proveedor (ID_Proveedor, Nombre, Fecha) 
    //             VALUES (:ID_Proveedor, :Nombre, :Fecha)");

    //         $stmt->bindParam(":ID_Proveedor", $idproveedor, PDO::PARAM_STR);
    //         $stmt->bindParam(":Nombre", $Nombre, PDO::PARAM_STR);
    //         $stmt->bindParam(":Fecha", $fecha_actual, PDO::PARAM_STR);

    //         if ($stmt->execute()) {
    //             $resultado = 'ok';
    //         } else {
    //             $resultado = 'error';
    //         }
    //     } catch (Exception $e) {
    //         $resultado = 'Execepcion Capturada ' . $e->getMessage() . "\n";
    //     }
    //     return $resultado;
    // }

    // static public function mdlActualizarProveedor($ID_Proveedor, $Nombre)
    // {
    //     try {
    //         $idproveedor = $ID_Proveedor;

    //         $stmt = Conexion::conectar()->prepare("UPDATE FROM proveedor SET Nombre = $Nombre WHERE ID_Proveedor = $idproveedor");

    //         $stmt->bindParam(":ID_Proveedor", $idproveedor, PDO::PARAM_STR);
    //         $stmt->bindParam(":Nombre", $Nombre, PDO::PARAM_STR);

    //         if ($stmt->execute()) {
    //             $resultado = 'ok';
    //         } else {
    //             $resultado = 'error';
    //         }
    //     } catch (Exception $e) {
    //         $resultado = 'Execepcion Capturada ' . $e->getMessage() . "\n";
    //     }
    //     return $resultado;
    // }
}



?>