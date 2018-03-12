<?php
$servername = "localhost";
$username = "root";
$password = "";      
$db = "zeeslag";
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
$conn->query("INSERT INTO `schepen`(`schepen`, `history`, `keurmerk`) VALUES ('".$_POST['schepen']."','".$_POST['history']."','".$_POST['keurmerk']."')");
