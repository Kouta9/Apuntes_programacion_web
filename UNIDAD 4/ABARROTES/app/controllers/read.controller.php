<script>
    const eliminarContacto = (id) => {
        Swal.fire({
            title: 'Estas seguro de eliminar ese contacto?',
            text: "Si lo borras no podras recuperarlo!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Borralo!'
        }).then((result) => {
            window.location = `./delete&id=${id}`
        })
    }
</script>