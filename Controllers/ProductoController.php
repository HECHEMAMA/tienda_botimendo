<?php
//require_once "../Models/ProductoModel.php";

/*----- GET Y SET (GETTER SETTER) 
    GET se usa para recibir valores.
    SET se usa para asignar valores
-----*/
class ProductoController
{
    /* 
        atributos de la tabla Producto
        - id INT AUTO_INCREMENT PRIMARY KEY,
        - nombre VARCHAR(50),
        - codigo VARCHAR(10),
        - precio FLOAT,
        - descripcion TEXT,
        - tipo ENUM('litos','metros','unidades'),
        - stock FLOAT, (aqui van la cantidad de dicho producto)
        - imagen_id INT FORAING KEY REFERENCES Imagen(id),
    */

    /*----- Variables de la Clase -----*/
    // Variables String
    private string $nombre;
    private string $codigo;
    private string $descripcion;
    private string $tipo;
    // Variables Numericas
    private int $id;
    private float $stock;
    private float $precio;


    // Metodos de la clase

    /*----- Metodos para asignar los valores -----*/
    public function setId() //Obtendra el id del producto
    {
        if (empty($_POST['id'])) {
            die("Error ID del producto no encontrado");
        }
        $this->id = $_POST['id'];
    }

    public function setStock() //Obtendra el Cantidad del producto
    {
        if (empty($_POST['stock'])) {
            die("Error Stock del producto no encontrado");
        }
        $this->id = $_POST['stock'];
    }

    public function setPrecio() //Obtendra el Precio del producto
    {
        if (empty($_POST['precio'])) {
            die("Error Precio del producto no encontrado");
        }
        $this->id = $_POST['Precio'];
    }

    public function setNombre() //Obtendra el Nombre del producto
    {
        if (empty($_POST['nombre'])) {
            die("Error nombre del producto no encontrado");
        }
        $this->id = $_POST['nombre'];
    }

    public function setCodigo() //Obtendra el Codigo del producto
    {
        if (empty($_POST['codigo'])) {
            die("Error codigo del producto no encontrado");
        }
        $this->id = $_POST['codigo'];
    }

    public function setDescripcion() //Obtendra el Descripcion del producto
    {
        if (empty($_POST['descripcion'])) {
            die("Error descripcion del producto no encontrado");
        }
        $this->id = $_POST['descripcion'];
    }

    public function setTipo() //Obtendra el Tipo (Litros, Metros, Unidades) del producto
    {
        if (empty($_POST['tipo'])) {
            die("Error ID del producto no encontrado");
        }
        $this->id = $_POST['tipo'];
    }



    public function modificar($id_producto)
    {
    }
    public function eliminar($id_producto)
    {
    }
    public function registrar()
    {
        $nombre = $_POST['name'];
        $codigo = $_POST['codigo'];
        $descripcion = $_POST['description'];
        $tipo = $_POST['type'];
        $cantidad = $_POST['stock'];
        $precio = $_POST['price'];

        if (empty($nombre) || empty($codigo) || empty($descripcion) || empty($tipo) || empty($cantidad) || empty($precio)) {
            echo "<h1>Por favor llenar los campos</h1>";
        } else {
            try {
                include "../Models/ProductoModel.php";
                $pm = new ProductoModel;
                $pm->insertarProduct($nombre, $codigo, $precio, $descripcion, $tipo, $cantidad);
            } catch (PDOException $e) {
                die("Ocurrio un error. INFO: " . $e->getMessage());
            }

            header("location: ../Views/inventary/index.php");
        }
    }

    public function mostrar($stmt) //Recibe el array de retorna la clase ProductoModel
    {
    }
}

$producto = new ProductoController;
$producto->registrar();
