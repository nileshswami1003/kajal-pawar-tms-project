<?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

echo "<script>window.location.href = 'login.php'</script>";


// Delete the session cookie
// setcookie(session_name(), "", time() - 3600, "/");
?>
