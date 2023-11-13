<script>
    $(document).ready(() => {
        $("#agregar").click(() => {
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
                url: "./app/models/process/create.process.php",
                type: "POST",
                success: (res) => {
                    Swal.fire({
                        title: 'Contacto agregado',
                        text: "El contacto fue agregado con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "./read"
                        }
                    })
                },
                error: (err) => {
                    console.log(err, "la peticion tuvo un error")
                }
            })
        })
    })
</script>