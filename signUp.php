<?php require "partials/header.php"; ?>
<body>
    <button class="btn-close"><</button>
    <section class="formulario">
        <form class="form" action="controllers/signUpController.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="text" name="rol" placeholder="admin/user">
            <button class="btn-submit" type="submit">Sign Up</button>
        </form>
    </section>

    <script>
        const btnClose = document.querySelector(".btn-close");

        btnClose.addEventListener("click", () => {
            window.location.href = "index.php";
        });
    </script>
</body>
</html>