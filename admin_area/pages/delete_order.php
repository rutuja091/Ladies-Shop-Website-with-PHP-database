
<?php
// Include the database connection file
$databaseHost = "localhost";
$databaseName = "ladiesshopdb";
$databaseUsername = "root";
$databasePassword = "";

//Database connection 

$con = new mysqli($databaseHost, $databaseUsername, $databasePassword,$databaseName)or die($conn->connect_error());
// Get id parameter value from URL

// Get id parameter value from URL
$id = $_GET['id'];

// Delete row from the database table
$sql = "DELETE FROM user_order  WHERE id = $id";

if($con->query($sql))
        {
            echo    '<script type="text/javascript">
                    alert ("Record Deleted!!");
                    window.location="order_fetch.php";
                    </script>';
        }
?>
        