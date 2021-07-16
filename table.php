<?php
    include 'db.php';
    if(isset($_POST['ASC']))
    {
    $asc_query = "SELECT * FROM email ORDER BY email ASC";
    $result = executeQuery($asc_query);
    }
    elseif (isset ($_POST['date'])) 
    {
          $desc_query = "SELECT * FROM email ORDER BY datums asc";
          $result = executeQuery($desc_query);
    }
    else {
        $default_query = "SELECT * FROM email ORDER BY datums ASC";
        $result =executeQuery($default_query);
        
        
    }
    function executeQuery($query)
    {
        $connect = mysqli_connect("localhost", "root", "", "web");
        $result = mysqli_query($connect, $query);
        return $result;
    }
    if(isset($_POST['del']))
    {
        $id=$_POST['delete_id'];
        $obj1=new Model();
        $obj1->delete($id);
    }
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<form action="" method="POST">
<button type="submit" id="poga" name="date"  >SORT BY DATE ASC</button>
<button type="submit" id="poga" name="ASC"  >SORT BY NAME ASC</button>


<table class=”sortable”>
    
    <tr>
        
        <th>id</th>
        <th>email</th>
        <th>date</th>
        <th>delete</th>
    </tr>
    <?php
            
            
            
            
            
            while($row=mysqli_fetch_array($result))
            {
             
        ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['datums']; ?></td>
        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
        <td><button type="submit" id="poga" name="del"  >x</button></td>
    </tr> 
        <?php   
            }
            
        ?> 
    </tr>
</table>
</form>
</body>
</html>