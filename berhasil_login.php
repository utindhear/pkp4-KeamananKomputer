<?php 
session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");  
    }
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>happy to see u, " . $_SESSION['username'] ."!". "</h1>"; ?>
             
            <div class="input-group">
            <a href="logout.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>