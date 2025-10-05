<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
    @auth
        <p>Congrats you are logged in.</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Log out</button>
        </form>
    @else
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" placeholder="name" class="form-control" name="name">
            <input type="text" placeholder="email" class="form-control" name="email">
            <input type="password" placeholder="password" class="form-control" name="password">
            <button class="btn btn-primary">Register</button>
        </form>
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" placeholder="name" class="form-control" name="loginname">
            <input type="password" placeholder="password" class="form-control" name="loginpassword">
            <button class="btn btn-primary">Log in</button>
        </form>
    @endauth
</div>
</body>
</html>
