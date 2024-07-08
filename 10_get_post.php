<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST['submit'])) {
    echo $_POST['name'];
    echo $_POST['age'];
}


?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Vlahd&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" id="age" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>