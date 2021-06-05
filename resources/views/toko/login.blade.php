<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1 style="text-align: center; margin: 10px;">Login</h1>

    <center>
        <form action="/home" method="post">
            @csrf
            <label for="username">Username</label>
            <input type="text" name="username"><br>
            <label for="password">password</label>
            <input type="password" name="password"><br>
            <button type="submit">
                login
            </button>
        </form>
    </center>

</body>
</html>