<?php
/*----- Estas clase es para procesar los datos, de los productos. Para hacer las consultas SQL -----*/
class ProductoModel
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


    public function insertarProduct($nombre, $codigo, $precio, $descripcion, $tipo, $stock)
    {
        /*----- Datos necesarios para crear el archivo en la base de datos -----*/
        /* $nombre = "Suela Julieth";
        $codigo  = "AAA01102";
        $precio = 15.99;
        $descripcion = "Suela grusa con un material de cilicona.";
        $tipo = "metros"; 
        stock = */
        // stock es la cantidad que se encuentra de dicho producto

        // Buscando la clase de conexion a la base de datos
        try {
            include "Conexion.php";
            $conn = new Conexion;
            $stmt = $conn->dbh->prepare("INSERT INTO Producto (nombre, codigo, precio, descripcion, tipo, stock) VALUES (?,?,?,?,?,?)");
            // Pasando los parametos por signo de interrogacion
            $stmt->bindParam(1, $nombre);
            $stmt->bindParam(2, $codigo);
            $stmt->bindParam(3, $precio);
            $stmt->bindParam(4, $descripcion);
            $stmt->bindParam(5, $tipo);
            $stmt->bindParam(6, $stock);


            // Ejecutar la consulta SQL
            $stmt->execute();
        } catch (PDOException $e) {
            die("Error al Insertar el producto. INFO: " . $e->getMessage());
        }
    }

    public function obtenerProduct()
    {
        try {
            include "Conexion.php";
            $conn = new Conexion;
            $stmt = $conn->dbh->prepare("SELECT * FROM Producto");
            $stmt->execute();
            return ($stmt);
        } catch (PDOException $e) {
            die("Error al mostrar los productos" . $e->getMessage());
        }
    }
}
