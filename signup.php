<?php
// Add the header.php file
require 'header.php';
?>

    <div class="container">
        <main>
            <h1>Signup</h1>
            <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat Password">
            <button type="submit" name="signup-submit">Signup</button>
        </form>
        </main>
    </div>

<?php
// Add the footer.php file
require 'footer.php';