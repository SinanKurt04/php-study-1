<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>

<body>
    <section class="container">
        <h4 class="center">Add a User</h4>
        <form class="white" action="add.php" method="POST">
            <div name="email input">
                <label for="email-input">Email</label>
                <input type="email" id="email-input" name="email">
            </div>

            <div name="password input">
                <label for="password-input">Password</label>
                <input type="password" id="password-input" name="password">
            </div>

            <div name="submit button">
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>

        </form>
    </section>
</body>

</html>