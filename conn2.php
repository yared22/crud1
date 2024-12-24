<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "crud11");

$connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
// iF(!$connection){
//     die("Connection failed");
// }
//     else{
//         echo "Connection successful";
//     }
        ?>