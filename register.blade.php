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
    <form action="{{ route('registersave') }}" method="POST">
        @csrf
  <div class="form-group">
    <label >username</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
   <div class="form-group">
    <label >Email :</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <label >password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
    <label >Confirmpassword</label>
    <input type="password" class="form-control" id="password" name="password_confirmation">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="/"><button type="button" class="btn btn-secondary">Back</button></a>
</form>

</body>
</html>