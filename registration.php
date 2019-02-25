<?php
if (isset($_POST["dob"]))
{
    extract($_POST);
//    echo "$names $dob $scholarships $course";
    //connect
    $scholarship = isset($scholarship) ?"Yes" : "No";
    $conn = mysqli_connect("localhost", "root", "", "shule");
    $sql = "INSERT INTO `students`(`id`, `names`, `email`, `dob`, `school_id`, `course`, `gender`, `scholarship`) VALUES
                                   (NULL,'$names','$email','$dob','$school_id','$course','$gender','$scholarship')";

    mysqli_query($conn, $sql) or die( mysqli_error($conn) );

    $message = "Student $names has been registered";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registration</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h3>Add Student</h3>
            <p class="text-success">
                <?php
                 if (isset($message))
                     echo $message;
                ?>
            </p>
            <form action="registration.php" method="post">
<!--                //  names, email, gender, course, dob, scholarships, school id-->
                <div class="form-group">
                    <input type="text" required class="form-control" name="names" placeholder="Names"
                </div>
                <div class="form-group">
                    <input type="text" required class="form-control" name="school_id" placeholder="School ID"
                </div>
                <div class="form-group">
                    <input type="email" required class="form-control" name="email" placeholder="Email"
                </div>
                <div class="form-group">
                    <input type="date" required class="form-control" name="dob" placeholder="Date of Birth"
                </div>
                <div class="radio">
                    <label><input type="radio" checked value="Male" name="gender"> Male</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="Female" name="gender"> Female</label>
                </div>
                <div class="form-group">
                    <select name="course" class="form-control">
                        <option value="Medicine">Medicine</option>
                        <option value="Economics">Economics</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Electrical Eng">Electrical Eng</option>
                        <option value="Pharmacy">Pharmacy</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Biology">Biology</option>

                    </select>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" name="scholarship" value="Yes" type="checkbox"> Scholarship?
                    </label>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>

    </div>
</div>

</body>
</html>