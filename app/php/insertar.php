<?php
include 'backEnd_insertar.php';
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Datos</title>
</head>
<body>
    <script src="../../js/sweetalert.js"></script>
    <script>
        Swal.fire({
            title: 'Datos Guardados!',
            icon: 'success',
            confirmButtonColor: '#3085d6'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location='../../registro.html'
            }
        })
    </script>
</body>
</html>