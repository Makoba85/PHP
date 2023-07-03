<!DOCTYPE html>
<html lang="en">
<body style="background-image: url('brice-brown-5KzJ_AWPs5c-unsplash.jpg');">
<p style="text-align: center;">You can delete a course from this page:</p>
<p style="text-align: center;">Steps: </p>
<ul style="list-style: none; text-align: center;">
    <li>1. Enter the student Name</li>
    <li>2. Enter the Database Name</li>
    <li>3. Enter the Table Name</li>
    <li>4. Enter the program Name</li>
</ul>
<br>
<div style="display: flex; justify-content: center; text-align: center;">
<form method="post">
        <input type="text" placeholder="Firstname" name="firstname">
        
        <input type="text" placeholder="Table Name" name="table">
        
        <input type="text" placeholder="Program Name" name="program">

        <input type="text" placeholder="course Name" name="course">

        <input type="text" placeholder="Lastname" name="lastname">
        
        <input type="Submit">
</form>
</div>


<div>
        <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = 'students';



$table=$_POST['table'];
$lastname=$_POST['lastname'];
$program=$_POST['program'];
$course=$_POST['course'];
$firstname=$_POST['firstname'];

$conn= new mysqli ($servername, $username, $password, $database);
if($conn->connect_error){
   echo "<b>Connection to database not established</b><br>";
}
echo "<b>Connection successful</b><br>";

if(isset($firstname)){
          if(empty($firstname)){
            echo "You cannot have a blank firstname field<br>";
         }
       echo "firstname entered successfully!<br>";
 }
                if(isset($lastname)){
                        if(empty($lastname)){
                        }
                        echo"Last name entered successfully<br>";
                }
                                if(isset($table)){
                                if(empty($table)){
                                        echo "You cannot have a blank table name field<br>";
                                }
                                        echo "Table entered successfully!<br>";
                                 }

                if(isset($program)){
                        if(empty($program)){
                                echo "You cannot have a blank program name field<br>";
                        }
                        echo "program entered successfully!<br>";
                }

                if(isset($course)){
                        if(empty($course)){
                        }
                        echo"course name entered successfully<br>";
                }

$sql= "DELETE FROM $table where 
firstname = '$firstname' and 
course = '$course' and 
lastname = '$lastname' and 
program = '$program'
";

if($conn->query($sql)==true){
        echo"Record(s) deleted succesfuuly!<br>";
}
else{
        echo "Deleting Error or No such record(s) exists: ".$conn->error;
}

                

        ?>
</div>  
<ul style="text-align: center; list-style: none;">
    <a  href="edit.php"> <li>Edit Page</li></a>
    <a href="add.php"><li>Add students</li></a>
    <a href="home.php"><li>Home Login</li></a>
    <a  href="Navigation.php"> <li>Navigation Page</li></a>
</ul>
</body>
</html>