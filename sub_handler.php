<?php 
 
require_once 'con.php'; 
require_once 'subscribe.class.php'; 
$subscribe = new Subscribe(); 
 
if(isset($_POST['subscribe'])){ 
    $errorMsg = ''; 
    $response = array( 
        'status' => 0, 
        'msg' => 'Something went wrong' 
    ); 
    if(empty($_POST['name'])){ 
        $pre = !empty($msg)?'<br/>':''; 
        $errorMsg .= $pre.'Name:'; 
    } 
    if(empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
        $pre = !empty($msg)?'<br/>':''; 
        $errorMsg .= $pre.'Email:'; 
    } 
     
    if(empty($errorMsg)){ 
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $verify_code = md5(uniqid(mt_rand())); 
         
            $data = array( 
                'name' => $name, 
                'email' => $email, 
                'verify_code' => $verify_code 
            ); 
            $insert = $subscribe->insert($data); 
             
            if($insert){ 
                        'status' => 1, 
                        'msg' => 'Email has been added' 
                    ); 
                } 
            } 
        } 
    }
		else{ 
        $response['msg'] = $errorMsg; 
    } 
     
    echo json_encode($response); 
} 
 
?>