<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>This is the Editor dashboard</h2>
    <h2>Welcome {{Auth::guard('editor')->user()->name}}</h2>
    <h2>Your email is {{Auth::guard('editor')->user()->email}}</h2>
    
</body>
</html>