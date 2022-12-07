<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Signin Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    

<link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">





    
    


</head>
<body>
  <div class="container">
    
    <div class="row ">
      
      <form method="post" action="process.php">
      
        <div class="col-6 offset-3 bg-light shadow p-3 rounded">
        <h1>Registeration Form</h1>
          
          <div class="mb-3  ">
            <label for="formfullName1" class="form-label">Full Name</label>
            <input type="fullname" name="fullname" class="form-control" id="formfullname1" aria-describedby="fullnameHelp">
            <div class="mb-3  ">
              <label for="formgender1" class="form-label">Gender</label><br>
              <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male">
              <label class="form-check-label" name=gender for="flexRadioDefault1">Male</label>
              <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
              <label class="form-check-label" for="flexRadioDefault2">Female</label>
            </div>
            <div class="mb-3">
              <label for="formphone1" class="form-label">Phone no</label>
              <input type="text" name="phone" class="form-control" id="formphone1">
            </div>
            <div class="mb-3">
              <label for="formage1" class="form-label">Age</label>
              <input type="number" name="age" class="form-control" id="formage1" min="1" max="110">
            </div>
            </div>
            <div class="mb-3  ">
              <label for="formEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="formEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="formPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="formPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>


    
  </body>
</html>
