<?php

   function listarProductos(){
        $clasePDO= connDB()->prepare("SELECT * FROM producto"); //prepara la consulta sql
        $clasePDO->execute();// Ejecuta la consulta sql
        return $data = $clasePDO->fetchAll(PDO::FETCH_ASSOC);// Obtener en array los datos de la BD
    }

  function registroProducto()
  {
    
    $pathImg = "null";
    $insertar = "INSERT INTO producto(`cod_producto`,`nombre`,`precio`,`stock`,`img`) value (?,?,?,?,?);"; 
     try{
         $clasePDO= connDB()->prepare($insertar); //prepara la consulta sql
         $clasePDO->execute([$_POST["codigo_prod"],$_POST["nombre_prod"],$_POST["precio_prod"],$_POST["cantidad_prod"],$pathImg]);//ejecuta y asigna los parametros a la consulta sql
         if($clasePDO->rowCount()>0) //contar los registros afectados en la BD
             return $msg = "Producto registrado Correctamente"; // devolver el mensaje
         else // sino hay registros o filas afectadas en la bd
             return $msg = "Ocurrio un error al registrar producto";// devolver el mensaje
     }catch(PDOException $e){// captura el mensaje de error en caso de un error en la consulta PDO
         return $msg = $e->getMessage();
     }
  }

  function eliminarProducto(){
    $clasePDO= connDB()->prepare("DELETE FROM producto WHERE cod_producto= ? "); //prepara la consulta sql
    $clasePDO->execute([$_GET["codigo"]]);//ejecuta y asigna los parametros a la consulta sql
    if($clasePDO->rowCount()>0)  //contar los registros afectados en la BD
        return $msg = "Producto Eliminado correctamente"; // devolver el mensaje
    else // sino hay registros o filas afectadas en la bd
        return $msg = "Ocurrio un Error al eliminar el producto"; // devolver el mensaje
  }

  function obtenerDatosParaEditarProducto(){
    $clasePDO= connDB()->prepare("SELECT * FROM producto WHERE cod_producto = ?"); //prepara la consulta sql
    $clasePDO->execute([$_GET["codigo"]]);//ejecuta y asigna los parametros a la consulta sql
    return $clasePDO->fetch(PDO::FETCH_ASSOC);//devolver los datos de la bd en array
  }
  function editarProductoDelForm(){
    $sql = "UPDATE producto SET nombre= ?, precio = ?, stock= ? WHERE cod_producto=?  ";
    $clasePDO = connDB()->prepare($sql);//prepara la consulta sql
    $clasePDO->execute([$_POST["nombre_prod"],$_POST["precio_prod"],$_POST["cantidad_prod"],$_POST["codigo_prod"]]);//ejecuta y asigna los parametros a la consulta sql
    if($clasePDO->rowCount()>0)//contamos las filas afectadas
        return $msg = "Producto actualizado correctamente";// devolver el mensaje
    else // sino hay registros o filas afectadas en la bd
        return $msg = "Ocurrio un Error al actualizar";// devolver el mensaje
  }


  //////////////////////////////////////////////////////////////////////////////
?>