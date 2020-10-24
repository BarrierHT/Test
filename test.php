<?php


include("../Project/web/php_server/db_connect.php");
$query = "SELECT * FROM usuarios";
$response = $conexion->query($query);

var_dump($response);
//! if($conexion->error) error();

if($response->num_rows > 0){        //there are records
    while($row = $response->fetch_assoc()){
        // var_dump($row);
        $id = $row['id'];
        $username = $row['username'];
        $password = $row['password'];
        $edad = $row['edad'];
        $email = $row['email'];
        $sexo = $row['sexo'];
        $nacimiento = $row['nacimiento'];

        echo   "$id $username $password $edad $email $sexo $nacimiento <br/> ";
    }

}


?>