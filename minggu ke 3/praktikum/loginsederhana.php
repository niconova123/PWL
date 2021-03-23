<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login site sederhana</title>
</head>
<body>
    <form action="proses_loginSite.php" method="post">
        Username:
        <input type="text" name="username" id="">
        <br>
        <!-- untuk input bertipe password
        tampilannya akan berubah menjadi bintang (*) -->
        Password :
        <input type="password" name="password" id="">
        <br>
        <input type="submit" value="continue" name="login">
        <br>
        <input type="submit" value="refresh" name="reset">
    </form>
</body>
</html>