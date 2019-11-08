<?php 
    $con = mysqli_connect('localhost', 'root', '', 'agenda');


    $sql = "SELECT COUNT(idContato) FROM contato";

    $query = mysqli_query($con, $sql);
    $resultado = mysqli_fetch_assoc($query);
    
    
    $valor = implode(",", $resultado);
    
    echo $valor;
?>