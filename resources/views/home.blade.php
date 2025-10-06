<!DOCTYPE html>
<html lang="en">
<x-header/>
<body>
<div class="container">
    <x-navbar/>
    @auth
        <p>Welcome {{$user->name}}!</p>

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
