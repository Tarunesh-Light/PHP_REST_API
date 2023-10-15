<?php

include "connection.php";

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method:DELETE');
header('Access-Control-Allow-Header: Content-Type,Access-Control-Allow-Headers,Authorization');

$request = $_SERVER['REQUEST_METHOD'];

function deletedata($data){
    include "connection.php";
    if(isset($data['id'])){
        echo "HEK";
        $id = $data['id'];
        $sql = "DELETE from `restapitable` where id=$id";
        $connection->query($sql);
    }
}


if($request == "DELETE")
{
    echo $_GET['id'];
    deletedata($_GET);
}

?>