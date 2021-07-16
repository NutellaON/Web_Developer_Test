<?php
class Model
{
    private $host='localhost';
    private $user='root';
    private $pwd='';
    private $dbname='web';
    private $conn;

    public function connect()
    {
      $con=new mysqli($this->host,$this->user,$this->pwd,$this->dbname);
      return $con;
    }
    public function insert($email,$datums)
    {
      
      mysqli_query($con,"INSERT INTO email (email,datums) values ('$email','$datums')");
      header('Location: index.php');
    }
}

?>