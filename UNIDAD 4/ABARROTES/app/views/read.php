<div class="container">
    <div class="row my-4">
        <div class="col">
            <a href="./create" class="btn btn-outline-success">Agregar Producto</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-primary table-striped">
                <thead>
                    <tr>
                        <th scope="col">codigo Producto</th>
                        <th scope="col">nombre Producto</th>
                        <th scope="col">precio</th>
                        <th scope="col">Provedor</th>
                        <th scope="col">Actualizar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($contactos as $contacto):
                    ?>
                    <tr>
                        <td><?php echo $contacto["codigoProducto"] ?></td>
                        <td><?php echo $contacto["nombreProducto"] ?></td>
                        <td><?php echo $contacto["precio"] ?></td>
                        <td><?php echo $contacto["idProvedor"] ?></td>
                        <td>
                            <a href="./update&id=<?php echo  $contacto["codigoProducto"]?>" class="btn btn-outline-warning">Actualizar</a>
                        </td>
                        <td>
                            <button onclick="eliminarContacto(<?php echo  $contacto['codigoProducto']?>)" class="btn btn-outline-danger">Eliminar</button>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
    require "./app/controllers/read.controller.php"
?>