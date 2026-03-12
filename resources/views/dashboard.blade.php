<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Punch_the_Monkey_Ichikawa_City_Zoo_2026_2.png/960px-Punch_the_Monkey_Ichikawa_City_Zoo_2026_2.png" alt="punch the monkey" class="photo">
           <h1>Welcome, {{ auth()->user()->name }}!</h1>
<p>You are logged in as {{ auth()->user()->email }}</p>
 
 
<form method="POST" action="/logout">
    @csrf
    <button type="submit">Logout</button>
    </div>
 
</form>
</body>
</html>