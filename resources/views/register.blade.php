<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <h1>Register</h1>
        <form method="POST" action="/register">
            @csrf
            <label for="">Name</label> <br>
            <input name="name" placeholder="Enter your fullname" required><br>
            <label for="">Email</label> <br>
            <input name="email" type="email" placeholder="Enter your email" required> <br>
            <label for="">Password</label> <br>
            <input name="password" type="password" placeholder="Enter your password" required> <br>
            <label for="">Confirm Password</label> <br>
            <input name="password_confirmation" type="password" placeholder="Enter confirm password" required><br>
            <button type="submit">Register</button>
        </form>
    </div>
    
</body>
</html>