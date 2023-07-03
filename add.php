<!DOCTYPE html>
<html lang="en">
<body style="background-image: url('marek-okon-L4h2cvheWuc-unsplash.jpg');">
<p style="text-align: center;">You can Add a course from this page:</p>
<p style="text-align: center;">Steps: </p>
<ul style="list-style: none; text-align: center;">
    <li>1. Enter the first Name</li>
    <li>2. Enter the Database Name</li>
    <li>3. Enter the Table Name</li>
    <li>4. Enter the program/course Name you want to add</li>
</ul>
<br>
<div style="display: flex; justify-content: center; text-align: center;">
<form>
        <input type="text" placeholder="First Name" name="first">
        
        <input type="text" placeholder="Last Name" name="Last">
        
        <input type="text" placeholder="Table Name" name="table">
        
        <input type="text" placeholder="Program Name" name="program">

        <input type="text" placeholder="Course Name" name="course">
        
        <input type="Submit">
</form>
</div>
<br>
<div>
    <?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = 'students';
     $table = $_GET['table'];
     $conn= new mysqli ($servername, $username, $password, $database);
     if($conn->connect_error){
        echo "<b>Connection to database not established</b><br>";
    }
    echo "<b>Connection successful</b><br>";




        if(isset($program)){
            $program = $_GET['program'];
            if(empty($program)){
                echo "You cannot have a blank program name field";
            }
        }
        if(isset($course)){
            $course = $_GET['course'];
            if(empty($course)){
                echo "You cannot have a blank course name field";
            }
        }

        if(isset($first)){
            $first = $_GET['first'];
            if(empty($first)){
                echo "You cannot have a blank first name field";
            }
        }

        $stmt = $conn->prepare("insert into $table (firstname, lastname, program, course) values (?,?,?,?)");
        $stmt->bind_param("ssss", $firstname, $lastname, $program, $course);

        $firstname = $_GET['first'];
        $lastname = $_GET['Last'];
        $program = $_GET['program'];
        $course = $_GET['course'];
        $stmt->execute();

        echo"Records created succesfully!";

        
    ?>
</div> 

<ul style="text-align: center; list-style: none;">
    <a  href="edit.php"> <li>Edit Page</li></a>
    <a href="delete.php"><li>Delete students</li></a>
    <a href="home.php"><li>Home Login</li></a>
    <a  href="Navigation.php"> <li>Navigation Page</li></a>
</ul>
</body>
</html>