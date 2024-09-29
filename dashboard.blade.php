<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
    <title>Document</title>
</head>
<body>
<h1>Welcome, {{ Auth::user()->name }}</h1>
<a href="{{ route('inner') }}"><button type="button" class="btn btn-primary">Inner Page</button></a>
<a href="{{ route('logout') }}"><button type="button" class="btn btn-success">Logout</button></a>
</body>
</html>