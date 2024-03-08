<?php
//$cargo = null;
class UsuarioModel
{

    private function datos()
    {

        include "Conexion.php";
        $conn = new Conexion;
        try {
            /* 
            FECTH MODE MAS USADOS SON:
            - PDO::FETCH_ASSOC: devuelve un arrays indexado cuyos keys son el nombre de las columnas.
            - PDO::FETCH_OBJ: devuelve un objeto anónimo con nombres de propiedades que corresponden a las columnas.
            - PDO::FETCH_BOUND:  asigna los valores de las columnas a las variables establecidas con el método. PDOStatement::bindColumn.
            - PDO::FETCH_CLASS: asigna los valores de las columnas a propiedades de una clase. Creará las propiedades si éstas no existen.
            */

            echo "<hr>";
            $stmt = $conn->dbh->prepare("SELECT * FROM Empleado");

            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                echo "ID Empleado: " . $row->id . " <br>";
                echo "Rol Empleado: " . $row->rol . " <br>";
                echo "Usuario Empleado: " . $row->user . " <br>";
                echo "Contraseña Empleado: " . $row->password . " <br>";
                echo "ID Usuario: " . $row->usuario_id . " <br>";
            }
        } catch (PDOException $e) {
            die("Error info: " . $e->getMessage());
        }
    }

    public function sesion($usuario, $password)
    {
        include_once "Conexion.php";
        $conn = new Conexion;


        try {
            $stmt = $conn->dbh->prepare("SELECT * FROM Empleado WHERE user = ? AND password = ?");
            $stmt->bindParam(1, $usuario, PDO::PARAM_STR); //PDO::PARAM_STR es contra las inyecciones SQL
            $stmt->bindParam(2, $password, PDO::PARAM_STR);
            $stmt->execute();
            $empleado = [];
            while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                $empleado = $row->cargo_id;
            }
            return $empleado;
        } catch (PDOException $e) {
            die("Error al iniciar sesion. INFO: " . $e->getMessage());
        }
    }

    public function getEmpleado($cargo)
    {
        include_once "Conexion.php";
        $conn = new Conexion;

        try {
            $stmt = $conn->dbh->prepare("SELECT * FROM Usuario WHERE id = ?");
            $stmt->bindParam(1, $cargo);
            foreach ($user as $datos) {
                $usuario = $datos;
                echo "Los datos son: " . $usuario;
            }
        } catch (PDOException $e) {
            die("ERROR INFO: " . $e->getMessage());
        }
    }
}
