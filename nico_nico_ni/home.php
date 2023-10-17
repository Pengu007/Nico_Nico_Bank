<?php
    include "home_header.php";
    include "home_navbar.php";

    if (isset($_GET['loginFailed'])) {
        $message = "Oopsss!! Wrong Credentials!! Please try again.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home_style.css?v=1.0">
</head>

<body>
    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <form action="customer_login_action.php" method="post">
                    <div class="flex-item-login">
                        <h2>Welcome</h2>
                    </div>

                    <div class="flex-item">
                        <input type="text" name="cust_uname" placeholder="Your Username" required>
                    </div>

                    <div class="flex-item">
                        <input type="password" name="cust_psw" placeholder="Your Password" required>
                    </div>

                    <div class="flex-item">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">
                <h1 id="form_header">Aapka Bank Aapnaa Bank.</h1>
            </div>
        </div>
    </div>

</body>
</html>