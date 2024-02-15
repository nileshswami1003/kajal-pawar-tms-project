<?php
include 'templates/header.php';
?>

<?php
include 'templates/navigation.php';
?>

<?php
include 'db.php';
if(isset($_POST["btnSubmit"])){

    $email_id = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if(empty($email_id) || empty($password) || empty($cpassword)){
        echo "<script>alert('Please enter valid data')</script>";
    }
    else{
        if(isset($email_id) && isset($password) && isset($cpassword)){
            $sql = "INSERT INTO players (email, password) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $email_id, $password);
            
            if($stmt->execute()){
                echo "<script>alert('Registration successful')</script>";
            }
            else{
                echo "<script>alert('Failed, something went wrong!')</script>";
            }
            $stmt->close();

        }
        else{
            echo "<script>alert('Failed, invalid data!')</script>";
        }
    }
}
?>

<div class="container">
    <div class="row mt-2 mb-2">
        <div class="offset-2 col-8">
            <h2>Register Here</h2>
            <hr>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Email id</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Create password</label>
                    <input type="password" name="cpassword" id="cpassword" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="Register" name="btnSubmit" id="btnSubmit" class="btn btn-secondary float-right">
                </div>
                <div class="form-group">
                    <p>Already have account?<span><a href="login.php"> Click here to login</a></span></p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include 'templates/footer.php';
?>