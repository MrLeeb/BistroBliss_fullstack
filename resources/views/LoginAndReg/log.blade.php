<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/log.css">
    <title>Document</title>
</head>
<body>
@csrf

<form method="POST" action="{{ route('admenu.store') }}">
<label>Email</label>
<input type='text' name='logEmail' value={email} ></input>
<label>Password</label>
<input type='password' name='logPassword' value={password}></input>
<input type='submit'></input>
</form>
</body>
</html>