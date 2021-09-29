<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <form method="POST" action="{{url('/profile')}}">
  <input type="hidden" name="_token" value=<?php echo csrf_token(); ?> class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-group">
      <label for="adress">adress</label>
      <input type="text" class="form-control" id="adress" placeholder="Enter adress" name="adress">
    </div>
    <div class="form-group">
      <label for="pwd2">Gender</label>
      <select name="gender" id="inputState" class="form-control">
      <option selected>Choose...</option>
        <option value="male">Male</option>
        <option value="female">Femail</option>
      </select>
     </div>
    <div class="form-group">
      <label for="linkedin">linkedin url</label>
      <input type="url" class="form-control" id="linkedin" placeholder="Enter linkedin" name="linkedin">
    </div>





    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
 
</body>
</html>