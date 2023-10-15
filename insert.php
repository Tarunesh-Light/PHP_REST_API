<?php

include "connection.php";

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method:POST');
header('Access-Control-Allow-Header: Content-Type,Access-Control-Allow-Headers,Authorization');

$request = $_SERVER['REQUEST_METHOD'];

function insertdata($data){
    include "connection.php";
    $name = $data["name"];
    $contact = $data["contact"];
    $story=$data["story"];
    $sql = " INSERT INTO `restapitable`(`Name`,`Contact`,`Suggestion`) VALUES ( '$name', '$contact', '$story')";
    $query = mysqli_query($connection,$sql);
}

if($request== 'POST')
{
    $data=json_decode(file_get_contents("php://input"),true);
    if(empty($data)){
        echo $_POST['name'];
        insertdata($_POST);
    }
    else{
        echo $data['name'];
    }
}

?>