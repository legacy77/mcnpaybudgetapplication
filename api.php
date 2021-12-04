<?php
require_once "db.php";

if(function_exists($_GET['function'])) {
    $_GET['function']();
}

function get_trx(){
    global $connect;
    $quer = $connect->query("select * from transaction order by create_date desc");
    $row = mysqli_fetch_array($quer);
    $data = [];
    if($row)
    {
        $data = [
            'status'=>'00',
            'msg'=>'success',
            'data'=>$row
        ];        
    }
    
    header('Content-Type: application/json');

    echo json_encode($data);
}

function new_trx(){
    global $connect;
    $cek = [
        'type'=>'',
        'amount'=>0
    ];
    $is_match = count(array_intersect_key($_POST, $cek));
    if($is_match == count($cek)){
        $type = $_POST['type'];
        $amount = $_POST['amount'];
        
        $result = mysqli_query($connect,"insert into transaction (type,amount) values('$type',$amount) ");
        
        if($result)
        {
            $response=array(
                'status' => 1,
                'message' =>'Insert Success'
            );
        }
        else
        {
            $response=array(
                'status' => 0,
                'message' =>'Insert Failed.'
            );
        }
    }else{
        $response=array(
            'status' => 0,
            'message' =>'Wrong Parameter'
        );
    }
    header('Content-Type: application/json');
    echo json_encode($response);
    
}