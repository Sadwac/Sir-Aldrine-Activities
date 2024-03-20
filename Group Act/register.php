<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <fieldset>
        <div class="form-group">
            <div class="form-group">
                <div class="form-group">
                   
                    <legend>STUDENT REGISTRATION:</legend>
                    <br>
                <label for="id">Student ID:</label><br>
                <input id="id" type="text" name="id" class="form-control" value="Auto" readonly><br>

                <label for="firstname">First name:</label><br>
                <input type="text" name="firstname" class="form-control" required><br>

                <label for="lastname">Last name:</label><br>
                <input type="text" name="lastname" class="form-control" required><br>

                <label for="age">Age:</label><br>
                <input type="number" name="age" class="form-control" required><br>

                <label for="address">Address:</label><br>
                <input type="text" name="address" class="form-control" required><br>

                <label for="contact">Contact Number:</label><br>
                <input type="phone" name="contact" class="form-control" required><br>

                <label for="birthday">Birthdate:</label> <br>
                <input type="date" name="birthday" class="form-control" required><br>
            </div>

            <div class="form-group">
                <label for="username">Email:</label><br>
                <input type="username" class="form-control" name="username" placeholder="Email:" required><br>

                <label for="password">Password:</label><br>
                <input type="password" class="form-control" name="password" placeholder="Password:" required><br>
                <br>
                <input id="submit" type="submit" name="submit" value="submit" class="btn btn-primary" ><br>
            </div>
          <div class="register-link " ><p>Already Registered <a href="index.php">Login Here</a></p></div>
        </div>
    </fieldset>
    </form>
    <?php

    include "connection1.php";
        
        //PASSING THE DATA FROM HTML TO PHP AND STORE IT IN VARIABLES
        if (isset($_POST['submit'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $age = $_POST['age'];
            $address = $_POST['address'];
            $contact = $_POST['contact'];
            $birthday = $_POST['birthday'];
        
            // INSERT DATA TO DATABASE (Student information)
            $sql = "INSERT INTO `dbtable`(`firstname`, `lastname`, `age`, `address`, `contact`, `birthday`) VALUES ('$firstname','$lastname','$age','$address','$contact','$birthday')";
            $result = $conn->query($sql);
        
            if ($result == TRUE) {
              
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        
        //PASSING THE DATA FROM HTML TO PHP AND STORE IT IN VARIABLES
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
        
            // INSERT DATA TO DATABASE (Registered user information)
            $sql = "INSERT INTO `registered`(`username`, `password`) VALUES ('$username','$password')";
            $result = $conn->query($sql);
        
            if ($result == TRUE) {
             
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        
        // Close the connection after all operations
        $conn->close();
        ?>
</body>
</html>