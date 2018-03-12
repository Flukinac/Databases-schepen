<?php

$servername = "localhost";
$username = "root";
$password = "";      
$db = "voorbeelddatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
echo "connected";

?>
<html>
    <body>
        <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">    
                <input type="text" placeholder="schepen" name="schepen">
                <input type="text" placeholder="history" name="history">
                <input type="text" placeholder="keurmerk" name="keurmerk">
                <input type="submit" value="submit" name="submit">
        </form>
    </body>
</html>
        
<?php


//$conn->query("INSERT INTO `schepen2`(`schepen`, `history`, `keurmerk`) VALUES ('".$_POST['schepen']."','".$_POST['history']."','".$_POST['keurmerk']."')");


$conn->query ("INSERT INTO `schepen2` (`schepen`) VALUE ('".$_POST['schepen']."')");

$conn->query ("INSERT INTO `schepen2` (`history`) VALUE ('".$_POST['history']."')");

$conn->query ("INSERT INTO `schepen2` (`keurmerk`) VALUE ('".$_POST['keurmerk']."')");
