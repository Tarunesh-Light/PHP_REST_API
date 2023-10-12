<?php

include "connection.php";

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method:GET');
header('Access-Control-Allow-Header: Content-Type,Access-Control-Allow-Headers,Authorization');

$request = $_SERVER['REQUEST_METHOD'];

function selectdata(){
    include "connection.php";
     $select = "select * from restapitable";
     $selectquery = mysqli_query($connection,$select);
     if($selectquery){
           
        $data = mysqli_fetch_all($selectquery,MYSQLI_ASSOC);

           $datas= [ 
              'status' => 200,
              'message' => 'Success',
              'data' => $data 
           ];
           header("HTTP 200 OK");
           return json_encode($datas);
     }

}

if($request == "GET")
{
    $data = selectdata();
    echo $data;
}

?>