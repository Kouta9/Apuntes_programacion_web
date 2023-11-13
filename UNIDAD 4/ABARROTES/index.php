<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require "./app/views/shared/metatags.php";
        require "./app/models/crud.class.php"
    ?>
</head>
<body>
    <?php
    $crud = new Crud();
    if (isset($_GET["view"])) {       
        switch ($_GET["view"]) {
            case 'read':
                $contactos = $crud->read();
                require "./app/views/read.php";
                break;
            case 'create':
                require "./app/views/create.php";
                break;
            case 'update':
                $contacto = $crud->show($_REQUEST["id"]);
                require "./app/views/update.php";
                break;
            case 'delete':
                $contacto = $crud->delete($_REQUEST["id"]);
                header("location: ./read");
                break;
            default:
                # code...
                break;
        }
    } else {
        require "./app/views/home.php";
    }
    ?>

    <?php
        require "./app/views/shared/scripts.php"
    ?>
</body>
</html>