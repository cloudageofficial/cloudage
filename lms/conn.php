<?php
 // connect to database
	$db = mysqli_connect('localhost', 'root', '', 'cloudage');
// check connection
if($db->connect_error) {
    die("Connection Failed : " . $connect->error);
} else {
    //echo "Successfully Connected";   
}
