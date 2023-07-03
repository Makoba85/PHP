<!DOCTYPE html>
<html lang="en">
</head>
<body style="background-image: url('kellen-riggin-U-Xa6K3Rfxk-unsplash (1).jpg');"> 
<h1 style="text-align: center;">Welcome to the Edit Page!</h1>
<div style="text-align: center; display: flex; justify-content: center;">
<form method="post">
    <input type="text" placeholder="Firstname" name="firstname"><br>
    <input type="text" placeholder="Table Name" name="table"><br><br><br>
    <p>Make your change to either one field or both fields</p>
    <input type="text" placeholder="Program Name" name="program"><br>
    <input type="text" placeholder="Coursename" name="course"><br>
    <input type="submit"><br>
</form>
</div>

<div style="text-align: center; display: flex; justify-content: center;">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = 'students';

$firstname=$_POST['firstname'];
$table=$_POST['table'];
$course=$_POST['course'];
$program=$_POST['program'];

$conn= new mysqli ($servername, $username, $password, $database);
if($conn->connect_error){
   echo "Connection to database not established</b><br>";
}
echo "<b>Connection successful</b><br>";

if(isset($firstname)){
    if(empty($firstname)){
        echo"Cannot have a blank firstname field";
    }
}
if(isset($table)){
    if(empty($table)){
        echo"Cannot have a blank table field";
    }
}

$sql= "UPDATE $table
set program = '$program'
where firstname = '$firstname'
";

$sql2 = "UPDATE $table
set course = '$course'
where firstname = '$firstname'
";

if(isset($program)){
    
    if($conn->query($sql)==true){
        echo"Program updated succesfully!<br>";
}
}

if(isset($course)){         
if($conn->query($sql2)==true){
    echo "Course Updated successfully!";
        }
        exit();
}
?>
</div>
<ul style="text-align: center; list-style: none;">
    <a  href="add.php"> <li>Add Page</li></a>
    <a href="delete.php"><li>Delete students</li></a>
    <a href="home.php"><li>Home Login</li></a>
    <a  href="Navigation.php"> <li>Navigation Page</li></a>
</ul>
</body>
</html>




