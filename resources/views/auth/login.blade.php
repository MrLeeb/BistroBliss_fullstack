<!DOCTYPE html>
<html lang="en">
@csrf
<head>
@csrf
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/log.css">
    <title>Document</title>
    @csrf
</head>
<body>
    <h1 class="logtitle">Login As Admin</h1>
<form method="POST" action="{{ route('log.adm') }}" class="logform">
@csrf
@if(isset($message))
<h2>Email and/or Password are incorrect</h2>
@endif
<label class="teal-400">Email</label>
<input type='text' name='email' class="logfield" ></input>
<label>Password</label>
<input type='password' name='password' class="logfield"></input>
<input type='submit' class="logsubmit"></input>
</form>

<div class="logab"><a href="http://localhost:3000/login" class='logab1'>Login as Guest</a></div>
</body>
</html>
@csrf
