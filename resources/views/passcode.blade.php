<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{ route('passcode-login') }}" method="POST">
        @csrf
        <label for="">Passcode</label>
        <input type="text" name="passcode" required>
        <br>
        <button>Login</button>
    </form>
</body>
</html>