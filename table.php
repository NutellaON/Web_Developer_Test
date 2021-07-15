<?php
    include('security.php');
    ?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table>
    <tr>
        <th>Epasts</th>
        <th>Dzest</th>
    </tr>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['email']; ?></td>
    </tr>
</table>
</body>
</html>