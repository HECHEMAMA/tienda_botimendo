<?php
/*----- Nueva Clase -----*/

class UsuarioController
{
    private $rol;
    private $nombre;
    private $apellido;
    private $cedula;
    private $telefono;
    private $direccion;
    private $tipo;
    private $id_usuario;
    private $user;
    private $password;


    public function inicio()
    {

        try {
            $this->user = $_POST['user'];
            $this->password = $_POST['password'];
            include '../Models/UsuarioModel.php';

            $um = new UsuarioModel;

            if (empty($this->user) || empty($this->password)) {
                echo "<h1>Por favor llenar los campos</h1>";
            } else {
                session_start();
                $_SESSION['user'] = $this->user;
                $empleado = $um->sesion($this->user, $this->password);
                /*----- Se creo una variable global alojada en UsuarioModel.php para devolver un valor -----*/
                //global $empleado;
                if ($empleado == 1) {
                    header("location: ../Views/admin/");
                } else if ($empleado == 2) {
                    header("location:../Views/home/");
                } else {
                    die("Error de usuario.");
                }
            }
        } catch (PDOException $e) {
            die("Error al verificar los datos. INFO: " . $e->getMessage());
        }

        /* header("location: ../Views/home/index.php"); */
    }

    public function getUsuario()
    {
    }

    public function registrarUsuario()
    {
        include '../Models/UsuarioModel.php';
        $this->nombre = $_POST['nombre'];
        $this->apellido = $_POST['apellido'];
        $this->cedula = $_POST['cedula'];
        $this->direccion = $_POST['direccion'];
        $this->telefono = $_POST['telefono'];
        $this->tipo = $_POST['tipo']; /*----- seria como empleado o cliente -----*/
        try {
        } catch (PDOException $e) {
            die("Algo salio mal. Descripcion: " . $e->getMessage());
        }
    }
}

$object = new UsuarioController;
$object->inicio();
