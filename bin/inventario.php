<?php include('cabecera.php'); ?>
<main>
    <h1>Inventario de Productos Electrónicos</h1>
    <table>
        <thead>
            <tr>
                <th>ID Producto</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
        
            $productos = [
                ['id' => 1, 'nombre' => 'Televisor 4K', 'categoria' => 'Televisores', 'stock' => 10, 'precio' => 500],
                ['id' => 2, 'nombre' => 'Laptop Gamer', 'categoria' => 'Computadoras', 'stock' => 5, 'precio' => 1200],
                ['id' => 3, 'nombre' => 'Smartphone', 'categoria' => 'Teléfonos', 'stock' => 20, 'precio' => 300],
            ];

            foreach ($productos as $producto) {
                echo "<tr>
                        <td>{$producto['id']}</td>
                        <td>{$producto['nombre']}</td>
                        <td>{$producto['categoria']}</td>
                        <td>{$producto['stock']}</td>
                        <td>\${$producto['precio']}</td>
                    </tr>";
            }
            ?>
        </tbody>
    </table>
</main>
<?php include('pie.php'); ?>
