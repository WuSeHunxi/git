<?php 
    header('Access-Control-Allow-Origin: *');

    header('Content-Type:text/html;charset=utf-8');

   $con = mysql_connect("localhost","root","root");

    if (!$con){
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db("test", $con);

    $sql = "DELETE FROM student WHERE id = $_POST[id]";

    mysql_query($sql,$con);

    echo '{"status":"ok"}';

    mysql_close($con);

?>