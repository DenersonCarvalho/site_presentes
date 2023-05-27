<?php
    include_once('conexao.php');

    $id = $_GET['id'];

    $sql = "UPDATE imagens SET ativo = 0 WHERE id = $id";
    mysqli_query($conn, $sql);

    header("Location: index.php");

    mysqli_close($conn);
?>