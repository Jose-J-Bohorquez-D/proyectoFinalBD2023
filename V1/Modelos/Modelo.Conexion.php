<?php

class ConexionCampeche
{
    public static function conectar()
    {
        try {
            $con = new PDO("mysql:host=localhost;dbname=campeche", "root", "");
            // Configura PDO para que lance excepciones en caso de errores
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $con;
        } catch (PDOException $e) {
            // En caso de error en la conexión, manejarlo aquí
            echo "Error de conexión: " . $e->getMessage();
            return null; // Devuelve null para indicar que la conexión falló
        }
    }
}

#$c = new ConexionCampeche;
#$c->conectar();

?>
