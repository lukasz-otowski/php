<?php
//include('./classes/DB.php');

//echo DB::connect();

$link = mysqli_connect("127.0.0.1", "root", "", "harmon");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);

?>

<form action="index.php" method="post">
    <input type="text" name="monday" placeholder="monday">
    <input type="button" name="check" value="check">
</form>
