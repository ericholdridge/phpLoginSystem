<?php
// Add the header.php file
require 'header.php';
?>

    <div class="container">
        <main>
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<p>You are logged in!</p>';
                }
                else {
                    echo '<p>You are logged out!</p>';
                }
            ?>
        </main>
    </div>

<?php
// Add the footer.php file
require 'footer.php';



