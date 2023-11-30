<?php
    include("db.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM task WHERE id = $id";
        $result = mysqli_query($conn, $query);
        if (!$result){
            die("No existe un resultado.");
        }

        $_SESSION['message'] = 'Tarea eliminada :)';
        $_SESSION['message_type'] = 'danger';

        header("Location: app.php");
    }
?>