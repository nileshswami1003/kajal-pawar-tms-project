<?php
session_start();
include 'templates/header.php';
?>

<?php
include 'templates/navigation.php';
?>

<?php
include 'db.php';
if(!isset($_SESSION["user_email"])){
    echo "<script>alert('Unauthorized access!')</script>";
    echo "<script>window.location.href = 'logout.php'</script>";
}
?>

<div class="container">
    <div class="row mt-2 mb-2">
        <div class="offset-2 col-8">
            <h2>Dashabord</h2>
            <hr>
        </div>
    </div>
</div>

<?php
include 'templates/footer.php';
?>