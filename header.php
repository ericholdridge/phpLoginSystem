<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>PHP Login System</title>
</head>
<body>
        <nav>
            <div class="container">
                <div class="wrap">
                    <div class="logo">
                        <a href="#">Logo</a>
                    </div>
                    <div class="nav-links">
                        <a href="">Home</a>
                        <a href="">Portfolio</a>
                        <a href="">About</a>
                        <a href="">Contact</a>
                    </div>
                </div>
                <div class="wrap">
                    <form action="includes/login.inc.php" method="POST">
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                        <input type="password" name="pwd" placeholder="Password">
                        <button type="submit" name="login-submit">Login</button>
                    </form>
                    <a href="signup.php">Signup</a>
                    <form action="includes/logout.inc.php" method="POST">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>
                </div>
            </nav>
        </div>
</body>
</html>