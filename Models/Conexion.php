<?php
class Conexion
{
    private string $user = 'root';
    private string $password = '';
    private string $dns = "mysql:host=localhost;dbname=db_botimendo";
    public $dbh;

    public function __construct()
    {
        $this->conectar();
    }

    private function conectar()
    {
        try {
            $this->dbh = new PDO($this->dns, $this->user, $this->password);
            /* echo "Conexion a la base de datos: " . $this->dbname . " realizada con exito"; */
        } catch (PDOException $e) {
            die("No se puedo conecta a la base de datos DB_BOTIMENDO:  " . $e->getMessage());
        }
    }
}



    /*----- Este metodo requiere, como variable $sql un string el cual seria SQL y un argumento como Variables -----*/
    /* public function consulta($sql, $arg = [])
    {
        try {
            $stmn = $this->dbh->prepare($sql);
            $stmn->execute($arg);
            $i = 0;
            $respuesta = [];

            while ($row = $stmn->fetch()) {
                $respuesta[$i] = $row;
                echo "<br>";
                $i++;
            }
            return $respuesta;
        } catch (PDOException $e) {
            die("No se pudo realizar la consulta: " . $e);
        }
    } */
/* $conexion = new Conexion;
$respuesta = $conexion->consulta("SELECT * FROM Usuario WHERE nombre = ?;", ['1']);
var_dump($respuesta); */
