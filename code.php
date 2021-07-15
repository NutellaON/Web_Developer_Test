<?php


                                         
if(isset($_POST['poga']))
{
    
    include 'db.php';
    echo $email=$_POST['email'];
    $obj=new Model();
    $obj->insert($email);
    
}


?>