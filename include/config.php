<?php
$connect = mysqli_connect('localhost','root','','facebook') or die("db error");

//for session
session_start();

function redirect($page)
{
    echo "<script>window.open('$page.php','_self')</script>";
}

//insert Functionn
function insertData($table,$fields)
{
    global $connect;
    $col = implode(",",array_keys($fields));
    $row = implode("','",array_values($fields));
    
    $query = mysqli_query($connect,"INSERT INTO $table($col) VALUE ('$row')");
    
    
    return ($query)?true:false;
} 

//check data
function countdata($table,$cond)
{
    global $connect;
    
    $query = mysqli_query($connect,"SELECT * FROM $table where $cond");
    $count = mysqli_num_rows($query);
    
    return $count;
}
?>