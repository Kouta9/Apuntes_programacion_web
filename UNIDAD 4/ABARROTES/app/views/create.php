<div class="container">
    <div class="row">
        <div class="col">
            <h1>Agregar Producto</h1>
            <hr>
            <div>
                <div class="mb-3">
                    <label for="codigoProducto" class="form-label">codigo Producto</label>
                    <input type="text" class="form-control" id="codigoProducto">
                </div>
                <div class="mb-3">
                    <label for="nombreProducto" class="form-label">nombre Producto</label>
                    <input type="text" class="form-control" id="nombreProducto">
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">precio</label>
                    <input type="text" class="form-control" id="precio">
                </div>
                <div class="mb-3">
                    <label for="idProvedor" class="form-label">id Provedor</label>
                    <input type="text" class="form-control" id="idProvedor">
                </div>
                <button id="agregar" class="btn btn-outline-success">Agregar Producto</button>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controllers/create.controller.php";
?>