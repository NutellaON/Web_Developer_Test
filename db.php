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
    public function insert($email)
    {
      $con=$this->connect();
      mysqli_query($con,"INSERT INTO email (email) values ('$email')");
      header('Location: index.php');
    }
}

?>