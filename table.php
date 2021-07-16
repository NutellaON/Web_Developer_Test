<?php
    include 'db.php';
    $connect = mysqli_connect("localhost", "root", "", "web");
    $limit=10;
    $page=isset($_GET['page']) ?$_GET['page']:1;
    $start=($page-1)*$limit;
    $results=$connect->query("SELECT count(id) as id FROM email ");
    $row=$results->fetch_all(MYSQLI_ASSOC);
    $total=$row[0]['id'];
    $pages=ceil($total/$limit);
    $previous=$page-1;
    $next=$page+1;
    if(isset($_POST['ASC']))
    {
    $asc_query = "SELECT * FROM email ORDER BY email ASC LIMIT $start, $limit";
    $result = executeQuery($asc_query);
    }
    elseif (isset ($_POST['date'])) 
    {
          $desc_query = "SELECT * FROM email ORDER BY datums asc LIMIT $start, $limit";
          $result = executeQuery($desc_query);
    }
    else {
        $default_query = "SELECT * FROM email ORDER BY datums ASC LIMIT $start, $limit";
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
<style>
.pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}
</style>
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
    $checklist  = '';
    $check = explode('@', $row['email']);
    $a=array($check[1]);
     foreach($a as $t)
          {
                ?>
                <button><?php echo $checklist .= $t; ?></button>
                <?php
          }   
             } 
            
                            
                      
        ?>
</table>
</form>
<div class="pagination">

  <?php 
                                    if ($page>1) 
                                    {
                                    ?>
                                        <a href="table.php?page=<?=$previous; ?>">previous</a>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    for($i=1; $i<=$pages;$i++): ?>
                                    <a href="table.php?page=<?= $i; ?>"><?=$i; ?></a>
                                    <?php endfor; ?>
                                    <?php 
                                    $pages;
                                    if ($page!=$pages) 
                                    {
                                    ?>
                                        <a href="table.php?page=<?=$next; ?>">next</a>
                                    <?php
                                    }
                                    ?>   
</div>

</body>
</html>