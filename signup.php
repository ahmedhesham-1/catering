<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layout/css/master.css">
    <link rel="stylesheet" href="layout/css/style.css">
    <title>Sign Up</title>
</head>
<body>
<?php include('includes/header.php'); ?>

    <div class="flex align-center justify-center h-100">
        <div class="box-wrapper flex relative">
            <div class="or-sep"></div>
            <div class="item left">
                <h1>Sign Up</h1>
                <form action="" method="post">
                    <input type="text" name="name" placeholder="Name"><br>
                    <input type="text" name="phone" placeholder="Phone Number"><br>
                    <input type="password" name="password" placeholder="password"><br>
                    <input type="password" name="confirm_password" placeholder="Re-Type password    "><br>
                    <input type="submit" value="Sign Up">
                </form>
            </div>
            <div class="item right">
                
            </div>
        </div>
    </div>
</body>
</html>