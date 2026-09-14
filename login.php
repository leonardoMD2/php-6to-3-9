<?php require "partials/header.php" ?>

<body>
    <button class="btn-close"><</button>

    <section class="formulario">
        <h2>Login</h2>
        <form class="form" action="controllers/loginController.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button class="btn-submit" type="submit">Login</button>
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

