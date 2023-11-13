<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar contacto</h1>
            <hr>
            <div>
                <input type="text" value="<?php echo $contacto["codigoProducto"]?>" class="form-control" id="codigoProducto" hidden>
                <div class="mb-3">
                    <label for="nombres" class="form-label">Nombre Producto</label>
                    <input type="text" value="<?php echo $contacto["nombreProducto"]?>" class="form-control" id="nombreProducto">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="text" value="<?php echo $contacto["precio"] ?>" class="form-control" id="precio">
                </div>
                <div class="mb-3">
                    <label for="idProvedor" class="form-label">Provedor</label>
                    <input type="text" value="<?php echo $contacto["idProvedor"] ?>" class="form-control" id="idProvedor">
                </div>
                
                <button id="actualizar" class="btn btn-outline-warning">Actualizar contacto</button>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controllers/update.controller.php"
?>