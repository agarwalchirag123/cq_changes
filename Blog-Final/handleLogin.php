<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
include 'dbconnect.php';
header("Content-type: text/html; charset=utf-8");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * from `govs`";
    $cur = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($cur))
    {

      echo $row['Username'].'  ';
      echo $row['Password'].'  ';
      echo $username.'  ';
      echo $password.'  ';

      if($username == $row['Username']&&$password == $row['Password'])
        {
            header("Location: admin.php");
        }
    }
/*     echo '
    <div class="alert alert-danger fade show" role="alert" id="alrt">
    <strong>Login Failed!</strong> Wrong username or password!
    
  </div>'; */
}

?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
