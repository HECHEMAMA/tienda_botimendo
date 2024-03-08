<?php include "../layout/header.php" ?>

<main>
    <div class="titulo">
        <h1>Venta</h1>
    </div>
    <section class="option">
        <label for="create">Vender</label>
        <label for=""></label>
        <label for=""></label>
    </section>
    <!---- Aqui estara el formulario para realizar la venta ---->
    <!---- Pensar en una forma de automatizar el formulario ---->
    
    <input type="checkbox" id="create" hidden>
    <div class="option-1">
        <form action="" method="POST">
            <label for="">Nombre del Cliente</label>
            <input type="text" id="" require>
            <label for="">Producto</label>
            <input type="text" id="" require>
            <label for=""></label>
            <input type="text" id="" require>
            <label for=""></label>
            <input type="text" id="" require>
            <label for=""></label>
            <input type="text" id="" require>
            <label for=""></label>
            <input type="text" id="" require>
            <label for=""></label>
            <input type="text" id="" require>
        </form>
    </div>
    
    <div>
        <h2>Tabla de Ventas</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum aliquam, ut veniam provident repellat assumenda quaerat officia voluptate? Provident sunt consectetur suscipit veritatis doloremque, quibusdam sequi deserunt corporis inventore officiis?</p>
        <table>
            <thead>
                <tr>
                    <th>ID FACTURA</th>
                    <th>CLIENTE</th>
                    <th>PRODUCTOS</th>
                    <th>TOTAL</th>
                    <th>METHOD</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>00001</td>
                    <td>Miguel Ramirez</td>
                    <td>10</td>
                    <td>100 $</td>
                    <td>DIVISA</td>
                </tr>
                <tr>
                    <td>00001</td>
                    <td>Miguel Ramirez</td>
                    <td>10</td>
                    <td>100 $</td>
                    <td>DIVISA</td>
                </tr>
                <tr>
                    <td>00001</td>
                    <td>Miguel Ramirez</td>
                    <td>10</td>
                    <td>100 $</td>
                    <td>DIVISA</td>
                </tr>
                <tr>
                    <td>00001</td>
                    <td>Miguel Ramirez</td>
                    <td>10</td>
                    <td>100 $</td>
                    <td>DIVISA</td>
                </tr>
                <tr>
                    <td>00001</td>
                    <td>Miguel Ramirez</td>
                    <td>10</td>
                    <td>100 $</td>
                    <td>DIVISA</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <h2>Ingresos</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam quidem obcaecati accusantium saepe corporis excepturi dolor 
        necessitatibus molestiae amet iusto rerum ea in, reiciendis deserunt. Dicta ratione unde perferendis corrupti?.</p>
    </div>
</main>
<?php include "../layout/footer.php" ?>