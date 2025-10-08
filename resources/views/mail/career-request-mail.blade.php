<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>A request has been received for the role of {{ $info['role'] }}</h1>
    <p>Sent by {{ $info['email'] }}</p>
    <h4>Message:</h4>
    <p>{{ $info['message'] }}</p>
</body>
</html>
