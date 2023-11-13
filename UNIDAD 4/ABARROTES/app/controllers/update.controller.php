
<script>
    $(document).ready(() => {

        $("#actualizar").click(() => {
            let codigoProducto = $("#codigoProducto").val()
            let nombreProducto = $("#nombreProducto").val()
            let precio = $("#precio").val()
            let idProvedor = $("#idProvedor").val()

            $.ajax({
                data: {
                    codigoProducto,
                    nombreProducto,
                    precio,
                    idProvedor
                },
                url: "./app/models/process/update.process.php",
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'Contacto actualizado',
                        text: "Actualizaste el contacto con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "./read"
                        }
                    })
                },
                error: () => {
                    Swal.fire({
                        title: 'Contacto no actualizado',
                        text: "No actualizaste el contacto correctamente!",
                        icon: 'error',
                        confirmButtonColor: '#d33',
                        confirmButtonText: 'Ok!'
                    })
                }
            })
        })
    })
</script>