<?php
//require_once "../Models/ProductoModel.php";

/*----- GET Y SET (GETTER SETTER) 
    GET se usa para recibir valores.
    SET se usa para asignar valores
-----*/
class ProductoController
{
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
            die("Error ID del producto valor no ingresado");
        }
        $this->id = $_POST['id'];
    }

    public function setStock() //Obtendra el Cantidad del producto
    {
        if (empty($_POST['stock'])) {
            die("Error Stock valor no ingresado");
        }
        $this->stock = $_POST['stock'];
    }

    public function setPrecio() //Obtendra el Precio del producto
    {
        if (empty($_POST['price'])) {
            die("Error Precio valor no ingresado");
        }
        $this->precio = $_POST['price'];
    }

    public function setNombre() //Obtendra el Nombre del producto
    {
        if (empty($_POST['name'])) {
            die("Error nombre valor no ingresado");
        }
        $this->nombre = $_POST['name'];
        $this->nombre = $this->cadenaText($this->nombre);
        $this->nombre = $this->palabrapMay($this->nombre);
    }

    public function setCodigo() //Obtendra el Codigo del producto
    {
        if (empty($_POST['codigo'])) {
            die("Error codigo del producto no ingresado");
        }
        $this->codigo = $_POST['codigo'];
        $this->codigo = $this->palabraMay($this->codigo);
    }

    public function setDescripcion() //Obtendra el Descripcion del producto
    {
        if (empty($_POST['description'])) {
            die("Error Descripcion del producto no ingresado");
        }
        $this->descripcion = $_POST['description'];
        $this->descripcion = $this->palabrapMay($this->descripcion);
    }

    public function setTipo() //Obtendra el Tipo (Litros, Metros, Unidades) del producto
    {
        if (empty($_POST['type'])) {
            die("Error Tipo del producto no ingresado");
        }
        $this->tipo = $_POST['type'];
        $this->tipo = $this->palabrapMay($this->tipo);
    }

    /*----- Metodos para Devolver los valores -----*/

    public function getId(): int //Devolvera el id del producto
    {
        return $this->id;
    }

    public function getStock(): float //Devolvera el Cantidad del producto
    {
        return $this->stock;
    }

    public function getPrecio(): string //Devolvera el Precio del producto
    {
        return $this->precio;
    }

    public function getNombre(): string //Devolvera el Nombre del producto
    {
        return $this->nombre;
    }

    public function getCodigo(): string //Devolvera el Codigo del producto
    {
        return $this->codigo;
    }

    public function getDescripcion(): string //Devolvera el Descripcion del producto
    {
        return $this->descripcion;
    }

    public function getTipo(): string //Devolvera el Tipo (Litros, Metros, Unidades) del producto
    {
        return $this->tipo;
    }

    /*----- VALIDACION DE LOS DATOS -----*/
    /* Si son cadena de texto */
    private function cadenaText($string) // Solo verifica si la palabra tiene las caracteres regulares especificados
    {
        if (preg_match("/^[a-zA-Záéíóú]+$/", $string)) {
            return $string;
        } else {
            die("El texto ingresado no es válido");
        }
    }
    /* Si son Numeros */
    public function cadenaNum($number) //:float // Verifica que el sean numeros
    {
        if (ctype_digit($number)) {
            return $number;
        } else {
            echo "El digito ingresado no es válido.";
        }
    }

    /*----- Modificar el String -----*/
    // Este metodo recibe un string o una frase para colocarla en minusculas para que en la base de datos no este desordenada.
    private function palabraMay($string)
    {
        $string = strtoupper($string);
        return $string;
    }

    private function palabraMin($string) //: string // Devuelve el string en minusculas
    {
        $string = strtolower($string);
        return $string;
    }

    private function palabrapMay($string): string // Devuelve el string con la primera letra en Mayusculas
    {
        $string = ucfirst($string);
        return $string;
    }


    public function registrar()
    {
        $this->setNombre();
        $this->setCodigo();
        $this->setDescripcion();
        $this->setTipo();
        $this->setStock();
        $this->setPrecio();

        if (empty($this->nombre) || empty($this->codigo) || empty($this->descripcion) || empty($this->tipo) || empty($this->stock) || empty($this->precio)) {
            die("<h1>Por favor llenar los campos</h1>");
        } else {
            try {
                include "../Models/ProductoModel.php";
                $pm = new ProductoModel;
                $pm->insertarProduct($this->nombre, $this->codigo, $this->precio, $this->descripcion, $this->tipo, $this->stock);
                echo "Registro con exito";
            } catch (PDOException $e) {
                die("Ocurrio un error. INFO: " . $e->getMessage());
            }

            header("location: ../Views/inventary/index.php");
        }
    }

    public function mostrar($stmt) //Recibe el array de retorna la clase ProductoModel
    {
    }

    public function modificar()
    {
    }

    public function eliminar($id_producto)
    {
    }
}

$producto = new ProductoController;
$producto->registrar();
//echo $producto->palabraMay("lakjslkjdini12");
