<?php require "partials/header.php"; ?>
<body>
    <form action="controllers/signUpController.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="text" name="rol" placeholder="admin/user">
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>