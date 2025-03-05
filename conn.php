<?php
    $conn = new mysqli("localhost","root","","enjay");
    if($conn->connect_error){
        echo "Failed to connect";
    }
?>