<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel login</title>
</head>
<body>
    <form action="/login/" method="get">
        @csrf
        <input type="text" name="userId" value="username">
        <input type="text" name="password" value="password">
        <input type="submit" name="submit">
    </form>
    {{ $message ?? '' }}
</body>
</html>
