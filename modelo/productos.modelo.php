<?php
require_once "conexion.php";
class ProductosModelo
{
    static public function mdlListarProductos()
    {

        $stmt = Conexion::conectar()->prepare('call prc_ListarProductos()');

        $stmt->execute();

        return $stmt->fetchAll();

    }

    static public function mdlAgregarProducto($Nombre, $Precio, $ID_Provedor)
    {
        try {
            $fecha_actual = date('Y-m-d');
            $idproducto = null;
            $stmt = Conexion::conectar()->prepare("INSERT INTO producto (ID_Producto, Nombre, Precio, ID_Proveedor, Fecha) 
                VALUES (:ID_Producto, :Nombre, :Precio, :ID_Proveedor, :Fecha)");

            $stmt->bindParam(":ID_Producto", $idproducto, PDO::PARAM_STR);
            $stmt->bindParam(":Nombre", $Nombre, PDO::PARAM_STR);
            $stmt->bindParam(":Precio", $Precio, PDO::PARAM_STR);
            $stmt->bindParam(":ID_Proveedor", $ID_Provedor, PDO::PARAM_STR);
            $stmt->bindParam(":Fecha", $fecha_actual, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $resultado = 'ok';
            } else {
                $resultado = 'error';
            }
        } catch (Exception $e) {
            $resultado = 'Execepcion Capturada ' . $e->getMessage() . "\n";
        }
        return $resultado;
    }


    static public function mdlActualizarProducto($id_producto, $Nombre, $Precio, $ID_Proveedor)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE FROM producto p
            SET Nombre = :Nombre, Precio = :Precio, ID_Proveedor = :ID_Proveedor");

            //$stmt->bindParam(":id_roducto", $idproducto, PDO::PARAM_STR);
            $stmt->bindParam(":Nombre", $Nombre, PDO::PARAM_STR);
            $stmt->bindParam(":Precio", $Precio, PDO::PARAM_STR);
            $stmt->bindParam(":ID_Proveedor", $ID_Provedor, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $resultado = 'ok';
            } else {
                $resultado = 'error';
            }
        } catch (Exception $e) {
            $resultado = 'Execepcion Capturada ' . $e->getMessage() . "\n";
        }
        return $resultado;
    }

}
?>