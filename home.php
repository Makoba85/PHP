<!DOCTYPE html>
<html>
<body style="background-image: url('rene-brouwers-tXkdYyhTba4-unsplash.jpg');">
    <h1 style="text-align: center">Welcome to the home page New students</h1>
    <p style="text-align: center;">Fill in fields with the appropriate information to get have your details recorded</p>

    <div>
        <form method="POST"
        style="dispaly: flex; text-align: center; justify-content: center;">
            <input type="text" name="name" placeholder="Firstaname" >
            <br>
            <input type="text" name="lastname" placeholder="Lastname" >
            <br>
            <input type="text" name="nrc" placeholder="Enter NRC" >
            <br>
            <input type="text" name="course" placeholder="Course" >
            <br>
            <input type="text" name="program" placeholder="Program" >
            <br>
            <input type="text" name="fees" placeholder="Fees" >
            <br>
            <input type="submit">

        </form>
    </div>

    <?php  
                 $servername = "localhost";
                 $username = "root";
                 $password = "";
                 $database = 'students';

                 $conn= new mysqli ($servername, $username, $password, $database);
                 if($conn->connect_error){
                    echo "<b>Connection to database not established</b><br>".$conn->connect_error;
                }
                echo "<b>Connection successful</b><br>";
        

        if(isset($name)){
            $name = $_POST['name'];
            if(empty($name)){
                echo "Name cannot be empty";
            }
        }

        if(isset($nrc)){
            $nrc = $_POST['nrc'];
            if(empty($nrc)){
                echo "Nrc cannot be empty";
            }
        }

        if(isset($course)){
            $course = $_POST['course'];
            if(empty($course)){
                echo "Course cannot be empty";
            }
        }

        if(isset($program)){
            $program = $_POST['program'];
            if(empty($program)){
                echo "Program cannot be empty";
            }
        }
        if(isset($lastname)){
            if(empty($lastname)){
                echo "Please enter lastname field";
            }
        }
        if(isset($fees)){
            if(empty($fees)){
                echo "Please enter fees field";
            }
        }

        $sql = $conn->prepare("insert into students(firstname, lastname, nrc, course, program, fees) values (?,?,?,?,?,?)");
        $sql->bind_param("sssssi",$name, $lastname ,$nrc, $course, $program,$fees);
   
        $name = $_POST['name'];
        $nrc = $_POST['nrc'];
        $course = $_POST['course'];
        $program = $_POST['program'];
        $lastname = $_POST['lastname'];
        $fees = $_POST['fees'];

        $sql->execute();
        echo "Information entered successfully";

    ?>
<ul style="text-align: center; list-style: none;">
    <a  href="Navigation.php"> <li>Navigation Page</li></a>
    <a href="student.php"><li>Returning students</li></a>
    <a href="changes.php"><li>Admin Page</li></a>
</ul>
</body>
</html>