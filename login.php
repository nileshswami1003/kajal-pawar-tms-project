<?php
session_start();
if(isset($_SESSION["user_email"])){
    echo "<script>window.location.href = 'dashboard.php'</script>";
}
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

    if(empty($email_id) || empty($password)){
        echo "<script>alert('Please enter valid data')</script>";
    }
    else{
        if(isset($email_id) && isset($password)){
            $sql = "SELECT * FROM players WHERE email = ? AND password = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $email_id, $password);
            
            if($stmt->execute()){
                echo "<script>alert('Login successful')</script>";
                $_SESSION["user_email"] = $email_id;
                echo "<script>window.location.href = 'dashboard.php'</script>";
                
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
            <h2>Login Here</h2>
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
                    <input type="submit" value="Login" name="btnSubmit" id="btnSubmit" class="btn btn-secondary float-right">
                </div>
                <div class="form-group">
                    <p>Don't have account?<span><a href="register.php"> Click here to register</a></span></p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include 'templates/footer.php';
?>