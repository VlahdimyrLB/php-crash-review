<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

session_start();

if (isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if ($username == 'vlahd' && $password == 'vlahd') {
        $_SESSION['username'] = $username;
        header('Location: /extras/dashboard.php');
        exit();
    } else {
        echo 'Incorrect Credentials';
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" id="username" name="username">
    </div>
    <div>
        <label for="password">password: </label>
        <input type="password" id="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>