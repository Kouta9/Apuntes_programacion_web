<?php
    require "../crud.class.php";
    $crud = new Crud();

    $crud->update([
        "codigoProducto" => $_POST["codigoProducto"],
        "nombreProducto" => $_POST["nombreProducto"],
        "precio" => $_POST["precio"],
        "idProvedor" => $_POST["idProvedor"],
    ])
?>