<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form method="POST" action="/login">
            @csrf
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="Enter your email" required><br>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Enter your password" required> <br>
            <button type="submit">Login</button>
        </form>
    </div>
    
</body>
</html>