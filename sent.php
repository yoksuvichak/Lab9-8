<?php include "connect.php" ?>
<?php
   $stmt = $pdo->prepare("INSERT INTO member VALUES (?,?,?,?,?,?)");
   $stmt->bindParam(1, $_POST["username"]);
   $stmt->bindParam(2, $_POST["password"]);
   $stmt->bindParam(3, $_POST["name"]);
   $stmt->bindParam(4, $_POST["address"]);
   $stmt->bindParam(5, $_POST["mobile"]);
   $stmt->bindParam(6, $_POST["email"]);
   
   if ($stmt->execute())
        header("location: dbworkshop4.php?username=".$_POST["username"]);


?>  
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
    
</body>
</html>