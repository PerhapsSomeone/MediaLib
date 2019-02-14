<html>
<head>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<center>
    <div style="margin-top: 80px">
        <form action="auth.php" method="post">
            <p>Login</p>
            <input type="text" placeholder="Username" name="username" required>
            <br />
            <input type="password" placeholder="Password" name="password" required>
            <br />
            <button type="submit" class="button is-rounded is-success is-outlined">Login</button>
            <?php
                if(isset($_COOKIE["err"])) {
                    echo "<br />".$_COOKIE["err"];
                    setcookie("err", "null", time()-1);
                }
            ?>
        </form>
    </div>
</center>
</body>
</html>