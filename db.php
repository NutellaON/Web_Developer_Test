<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'web');
class Model
{
    public function __construct()
    {
      $con=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
      $this->dbh=$con;
    }
    public function insert($email, $datums)
    {
      
      $result=mysqli_query($this->dbh,"INSERT INTO email (email,datums) values ('$email','$datums')");
      header('Location: index.php');
      
    }
    public function delete($id)
    {
      
      $result=mysqli_query($this->dbh,"DELETE FROM email WHERE id='$id'");
      header('Location: table.php');
      
    }
}

?>