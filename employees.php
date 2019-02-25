<?php
if (isset($_POST["dob"]))
{
    extract($_POST);
    $conn = mysqli_connect("localhost", "root", "hp101", "shule");
    $sql = "INSERT INTO `employees`(`id`, `names`, `email`, `address`, `dob`, `department`, `gender`, `kra_pin`, `salary`) VALUES 
                                   (NULL,'$names','$email','$address','$dob','$department','$gender','$kra_pin','$salary')";

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
    <title>Employees</title>
    <link rel="stylesheet" href="bootstrap-4.2/css/bootstrap.css">

</head>
<body>

<?php
require 'navbar.php';
?>

<div class="container bg-secondary">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h3>Add Student</h3>
            <p class="text-success">
                <?php
                if (isset($message))
                    echo $message;
                ?>
            </p>
            <form action="employees.php" method="post">
                <!--                //  names, email, gender, course, dob, scholarships, school id-->


                <div class="form-group">
                    <input type="text" required class="form-control" name="names" placeholder="Names"
                </div>

                <div class="form-group">
                    <input type="email" required class="form-control" name="email" placeholder="Email"
                </div>

                <div class="form-group">
                    <input type="text" required class="form-control" name="address" placeholder="Address"
                </div>
                <div class="form-group">
                    <input type="date" required class="form-control" name="dob" placeholder="Date Of Birth"
                </div>

                <div class="form-group">
                    <select name="department" class="form-control">
                        <option value="Mathematics">Mathematics</option>
                        <option value="English">English</option>
                        <option value="Kiswahili">Kiswahili</option>
                        <option value="Physics">Physics</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Computer">Computer</option>
                        <option value="Biology">Biology</option>
                    </select>
                </div>

                <div class="radio">
                    <label><input type="radio" checked value="Male" name="gender"> Male</label>
                </div>
                <div class="radio">
                    <label><input type="radio" value="Female" name="gender"> Female</label>
                </div>

                <div class="form-group">
                    <input type="text" required class="form-control" name="kra_pin" placeholder="KRA pin"
                </div>
                <div class="form-group">
                    <input type="number" required class="form-control" name="salary" placeholder="Salary"
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>
        </div>

    </div>
</div>

</body>
</html>