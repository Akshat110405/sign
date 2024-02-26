<?php
$a=mysqli_connect("localhost","root","","signup");

if($a){
    echo "connection successfull<br>";
}
if(isset($_REQUEST['Submit'])){
        if(($_REQUEST['name'] == "") || ($_REQUEST['Email_id'] == "") || ($_REQUEST['Username'] == "") || ($_REQUEST['password'] == ""))
            echo "<small> Fill all Fields... </small><hr>";
    

else {
    $name = $_REQUEST['name'];
    $Email = $_REQUEST['Email_id'];
    $username = $_REQUEST['Username'];
    $password = $_REQUEST['password'];
    $sql = "INSERT INTO sign (name, Email_id, username, password) VALUE('$name','$Email','$username','$password')";
    if(mysqli_query($a,$sql)){
        echo '<div class="alert alert-danger" role="alert">';
  echo "A simple danger alert—check it out!";
echo '</div>';

      
    }
    else {
        echo "unable to insert data ";
    }
    
}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form method="POST">
        <label for="name">Name</label>
        <input type="text" class="form-control"name="name"id="name">
        <label for="name">Email_id</label>
        <input type="text" class="form-control"name="Email_id"id="email_id">
        <label for="name">Username</label>
        <input type="text" class="form-control"name="Username"id="name">
        <label for="name">Password</label>
        <input type="Password" class="form-control"name="password"id="name">
        <button type="submit" class="btn btn-primary"name="Submit">Submit</button>


        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>