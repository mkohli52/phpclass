<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Full Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone No</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
      <?php  print_r($_POST["fullname"]); ?>
      </td>
      <td>
      <?php  print_r($_POST["gender"]); ?>
      </td>
      <td>
      <?php  print_r($_POST["phone"]); ?>
      </td>
      <td>
      <?php  print_r($_POST["age"]); ?>
      </td>
      <td>
      <?php  print_r($_POST["email"]); ?>
      </td>
      <td>
      <?php  print_r($_POST["password"]); ?>
      </td>
    </tr>
    
  </tbody>
</table>
</body>
</html>