<?php

include "connection.php";

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method:PUT');
header('Access-Control-Allow-Header: Content-Type,Access-Control-Allow-Headers,Authorization');

$request = $_SERVER['REQUEST_METHOD'];

function updatedata($data){
    include "connection.php";
    $id=$data["id"];
    $name=$data["name"];
    $contact=$data["contact"];
    $story=$data["story"];
    $sql="update restapitable set Name=`$name`,Contact=`$contact`,Suggestion=`$story` where id='$id'";
    $connection->query($sql);  
     }

if($request == "PUT")
{
    updatedata($_POST);
}

?>