<?php include "../layout/header.php"   ?>
<main>
    <div class="titulo">
        <h1>Inventario</h1>
    </div>
    <section class="option">
        <label for="create">Registrar Producto</label>
        <button>Crear PDF</button>
        <button>Crear Excel</button>
    </section>
    <!---- Formulario de Registrar Productos ---->
    <input type="checkbox" id="create" hidden>
    <div class="option-1">
        <form action="../../Controllers/ProductoController.php" method="post">
            <label for="product-name">Nombre del Producto: </label>
            <input type="text" name="name" id="product-name" required>
            <label for="product-id">Codigo del Producto:</label>
            <input type="text" name="codigo" id="product-id" required>
            <label for="product-price">Precio del Producto: </label>
            <input type="number" min="0.1" step="0.1" name="price" id="product-price" required>
            <label for="">Descripcion: </label>
            <input type="text" name="description" value="">
            <label for="product-measure">Medida de producto</label>
            <select name="type" id="product-measure" require>
                <option></option>
                <option>unidades</option>
                <option>litros</option>
                <option>metros</option>
            </select>
            <label for="product-cant">Cantidad del Producto:</label>
            <input type="number" name="stock" id="product-cant" min="1" step="1" required>
            <label for="product-img">Imagen del Producto: </label>
            <input accept="imagen/jpg" type="file" name="img" id="product-img">
            <input type="submit" value="Guardar">
        </form>
        <label for="create" class="cerrar">✖️</label>
    </div>
    <!---- Fin de Formulario para Registrar Productos ---->


    <div class="imagen">
        <div>
            <img src="../CSS/IMG/pie.jpg" alt="">
            <ul>
                <li>Nombre del Producto</li>
                <li>Codigo del Producto</li>
                <li>Cantidad del Producto</li>
                <li>Precio por Unidad</li>
            </ul>
        </div>
        <div>
            <img src="../CSS/IMG/pie.jpg" alt="">
            <ul>
                <li>Nombre del Producto</li>
                <li>Codigo del Producto</li>
                <li>Cantidad del Producto</li>
                <li>Precio por Unidad</li>
            </ul>
        </div>
        <div>
            <img src="../CSS/IMG/pie.jpg" alt="">
            <ul>
                <li>Nombre del Producto</li>
                <li>Codigo del Producto</li>
                <li>Cantidad del Producto</li>
                <li>Precio por Unidad</li>
            </ul>
        </div>
    </div>

    <div>
        <h2>Tabla de Productos</h2>
        <br>
        <table>
            <thead>
                <!-- Aqui para no confundir al usuario es mejor colocar la medida(litros metros unidades dentro de la casilla cantidad) -->
                <tr>
                    <th>Tipo</th>
                    <th>Name</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tela</td>
                    <td>Antonella</td>
                    <td>12 Unidades</td>
                    <td>15.2</td>
                    <td class="product"><a href="#"><img src="../CSS/IMG/papel-escrito.png" alt="" title="Modificar"></a><a href="#" title="Eliminar"><img src="../CSS/IMG/borrar.png" alt="" style="color:red"></a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <h2>Contenido</h2>
        <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nihil at quaerat omnis possimus assumenda adipisci
            similique? Aliquam praesentium rerum, voluptate earum blanditiis voluptates soluta doloremque explicabo ipsa aut
            vero?</p>
    </div>
</main>

<?php include "../layout/footer.php" ?>