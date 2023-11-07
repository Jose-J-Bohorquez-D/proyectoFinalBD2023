<?php
require_once("Modelo.Conexion.php");
class UsuariosMdl extends ConexionCampeche
{

    public static function eliminar_usuario_mdl($idElimUsuMdl)
    {
        try {
            $sql = "UPDATE usuarios SET estado = :estado,fecha_elimina = :fecha_elimina 
            WHERE id_usuario = :idElimUsubd";

            $conexion = ConexionCampeche::conectar();
            $stmt = $conexion->prepare($sql);
            if ($stmt) {
                $est = 0; // Definimos el valor por defecto del estado como 1 para que sea activo a menos de que se cambie
                $stmt->bindParam(':estado', $est);
                date_default_timezone_set('America/Bogota');   
                $fecha_elimina = date("Y-m-d H:i:s");
                $stmt->bindParam(':fecha_elimina', $fecha_elimina);
                $stmt->bindParam(':idElimUsubd', $idElimUsuMdl);
                if ($stmt->execute()) {
                    return "todoOkDel";
                } else {
                    echo "Error al eliminar datos: " . $stmt->errorInfo()[2];
                }

                $stmt->closeCursor();
                
            } else {
                echo "Error en la preparación de la consulta Del: " . $conexion->errorInfo()[2];
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function actualizar_usuario_mdl($datos_form_up_mdl)
    {
        try {
            $sql = "UPDATE usuarios SET
            tipo_doc = :tipo_doc,
            num_doc = :num_doc,
            nombre1 = :nombre1,
            nombre2 = :nombre2,
            apellido1 = :apellido1,
            apellido2 = :apellido2,
            fecha_nac = :fecha_nac,
            correo = :correo,
            telefono = :telefono,
            direccion = :direccion,
            ubicacion = :ubicacion,
            usuario = :usuario,
            pwd = :pwd,
            rol = :rol,
            estado = :estado,
            fecha_actualiza = :fecha_actualiza 
            WHERE id_usuario = :id_usuario_up";

            $conexion = ConexionCampeche::conectar();
            $stmt = $conexion->prepare($sql);
            if ($stmt) {
                $stmt->bindParam(':tipo_doc', $datos_form_up_mdl["tipo_documento"]);
                $stmt->bindParam(':num_doc', $datos_form_up_mdl["numero_documento"]);
                $stmt->bindParam(':nombre1', $datos_form_up_mdl["nombre1"]);
                $stmt->bindParam(':nombre2', $datos_form_up_mdl["nombre2"]);
                $stmt->bindParam(':apellido1', $datos_form_up_mdl["apellido1"]);
                $stmt->bindParam(':apellido2', $datos_form_up_mdl["apellido2"]);
                $stmt->bindParam(':fecha_nac', $datos_form_up_mdl["fecha_nac"]);
                $stmt->bindParam(':correo', $datos_form_up_mdl["correo"]);
                $stmt->bindParam(':telefono', $datos_form_up_mdl["telefono"]);
                $stmt->bindParam(':direccion', $datos_form_up_mdl["direccion"]);
                $stmt->bindParam(':ubicacion', $datos_form_up_mdl["ubicacion"]);
                $stmt->bindParam(':usuario', $datos_form_up_mdl["usuario"]);
                $stmt->bindParam(':pwd', $datos_form_up_mdl["contrasena"]);
                $stmt->bindParam(':rol', $datos_form_up_mdl["rol"]);
                $est = 1; // Definimos el valor por defecto del estado como 1 para que sea activo a menos de que se cambie
                $stmt->bindParam(':estado', $est);
                date_default_timezone_set('America/Bogota');   
                $fecha_actualiza = date("Y-m-d H:i:s");
                $stmt->bindParam(':fecha_actualiza', $fecha_actualiza);
                $stmt->bindParam(':id_usuario_up', $datos_form_up_mdl["id_usr"]);
                if ($stmt->execute()) {
                    return "todoOkUp";
                } else {
                    echo "Error al insertar datos: " . $stmt->errorInfo()[2];
                }

                $stmt->closeCursor();
                
            } else {
                echo "Error en la preparación de la consulta: " . $conexion->errorInfo()[2];
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function editar_usuario_mdl($idEditUsuMdl)
    {
        try {
            $sql = "SELECT * FROM usuarios WHERE id_usuario = :id_usuario";
            $conexion = ConexionCampeche::conectar();
            $stmt = $conexion->prepare($sql); 
            $stmt->bindParam(':id_usuario', $idEditUsuMdl);  
            $stmt->execute();
            if ($stmt->rowCount() > 0) { 
                return $stmt->fetch();
            } else {
                return "errorIng";#pasa por que no existe el usuario
            }
            $stmt->closeCursor();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function listar_usuarios_mdl()
    {
        try {
            $sql = "SELECT * FROM usuarios WHERE estado = 1";
            $conexion = ConexionCampeche::conectar();
            $stmt = $conexion->prepare($sql);
            $stmt->execute();
            if ($stmt->rowCount() > 0) { 
                return $stmt->fetchAll();
            } else {
                return "errorRead";
            }
            $stmt->closeCursor();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public static function ingreso_usuario_mdl($datos_form_ing_mdl)
    {
        try {
            $correo = $datos_form_ing_mdl["correo"];
            $contrasena = $datos_form_ing_mdl["contrasena"];
            $sql = "SELECT * FROM usuarios WHERE correo = :correo AND pwd = :contrasena";
            $conexion = ConexionCampeche::conectar();
            $stmt = $conexion->prepare($sql); 
            $stmt->bindParam(':correo', $correo); 
            $stmt->bindParam(':contrasena', $contrasena); 
            $stmt->execute();
            if ($stmt->rowCount() > 0) { 
                return $stmt->fetch();
            } else {
                return "errorIng";
            }
            $stmt->closeCursor();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }

    public static function registrar_usuario_mdl($datos_form_reg_mdl)
    {
        try {
            $sql = "INSERT INTO usuarios (
                tipo_doc, num_doc, nombre1, nombre2, apellido1, apellido2, fecha_nac, 
                correo, telefono, direccion, ubicacion, usuario, pwd, rol, fecha_crea,estado) 
                VALUES (
                :tipo_doc, :num_doc, :nombre1, :nombre2, :apellido1, :apellido2, :fecha_nac, 
                :correo, :telefono, :direccion, :ubicacion, :usuario, :pwd, :rol, :fecha_crea,:estado)";

            $conexion = ConexionCampeche::conectar();
            $stmt = $conexion->prepare($sql);
            if ($stmt) {
                $stmt->bindParam(':tipo_doc', $datos_form_reg_mdl["tipo_documento"]);
                $stmt->bindParam(':num_doc', $datos_form_reg_mdl["numero_documento"]);
                $stmt->bindParam(':nombre1', $datos_form_reg_mdl["nombre1"]);
                $stmt->bindParam(':nombre2', $datos_form_reg_mdl["nombre2"]);
                $stmt->bindParam(':apellido1', $datos_form_reg_mdl["apellido1"]);
                $stmt->bindParam(':apellido2', $datos_form_reg_mdl["apellido2"]);
                $stmt->bindParam(':fecha_nac', $datos_form_reg_mdl["fecha_nac"]);
                $stmt->bindParam(':correo', $datos_form_reg_mdl["correo"]);
                $stmt->bindParam(':telefono', $datos_form_reg_mdl["telefono"]);
                $stmt->bindParam(':direccion', $datos_form_reg_mdl["direccion"]);
                $stmt->bindParam(':ubicacion', $datos_form_reg_mdl["ubicacion"]);
                $stmt->bindParam(':usuario', $datos_form_reg_mdl["usuario"]);
                $stmt->bindParam(':pwd', $datos_form_reg_mdl["contrasena"]);
                $rol = 3; // Definimos el valor por defecto del rol como 3 para que sea consumidor a menos de que se cambie 
                $stmt->bindParam(':rol', $rol);
                date_default_timezone_set('America/Bogota');   
                $fecha_crea = date("Y-m-d H:i:s");
                $stmt->bindParam(':fecha_crea', $fecha_crea);
                $est = 1; // Definimos el valor por defecto del estado como 1 para que sea activo a menos de que se cambie 
                $stmt->bindParam(':estado', $est);
                if ($stmt->execute()) {
                    return "todoOkReg";
                } else {
                    echo "Error al insertar datos: " . $stmt->errorInfo()[2];
                }

                $stmt->closeCursor();
                
            } else {
                echo "Error en la preparación de la consulta: " . $conexion->errorInfo()[2];
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>