<?php
    session_start();
    $code = $_GET['code'];
    $conn = new mysqli('localhost','root','',$code);  
    $id = $_GET['ID'];
    $sql = mysqli_query($conn, "DELETE FROM  quiz WHERE  id='$id'"); 
    
    echo"<script>alert('Question Deleted!')</script>";
    echo '<script type="text/javascript">' .'history.go(-1); '. '</script>';

?>