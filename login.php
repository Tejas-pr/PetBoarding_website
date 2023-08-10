<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <h1><b>Log In Page</b><br>
        fill the credentials to login to your account</h1>
    <div class="log">
        <form action="index.php" method="post">
            <div class="log1">
            <div class="inpform">
                <label for name="email"> Enter your Email_ID</label>
                <input type="email" name="email" required>
            </div>
            <div class="inpform">
                <label for name="password"> Enter your password</label>
                <input type="password" name="password" required>
            </div>
            <div class="btn">

                <input type="button" value="login" onclick="alert('log in successfull')">
            </div>
        </div>
        </form>
    </div>
</body>
</html>