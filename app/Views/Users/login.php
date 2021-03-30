<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/style-login.css">

    <style>

    </style>

    <title>Login</title>
</head>

<body>
    <div class="login">
        <form action="index.html" method="post">
            <img src="<?= BASEURL ?>/img/Untitled.png" alt="logo" class="logo">
            <input type="text" id="username" placeholder="Username" style="color: white; font-weight: bolder;">
            <input type="password" id="password" placeholder="Password" style="color: white; font-weight: bolder;">
            <button type="submit" value="submit" style="font-weight: bold;">Login</button>
        </form>
    </div>
</body>

</html>