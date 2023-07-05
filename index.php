
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
        session_start();

include ('inc.php');
$elemail = $_POST['elemail'];
$password = $_POST['password'];
$password_md5 = md5($password);

$sql = "SELECT * FROM admins WHERE email = '$elemail' and password ='$password_md5'" ;
$res = $conn->query($sql);
$num = $res->num_rows ;

if ($num > 0 ) {
   $_SESSION['login']=$elemail;
   header("location:dashbord.php");
}



?>
        <div id="layoutAuthentication">
     
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" > 
                                            <div class="form-floating mb-3">
                                               <input class="form-control" placeholder="email" name="elemail" type="email" autofocus="" value="">
                                            </div>
                                            <div class="form-floating mb-3">
                                               <input class="form-control" placeholder="Password" name="password" type="password" value="">
   </div>
                            
                                             


                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

<?php
if ($num == 0) {
    ?>
<div class="alert alert-danger ">email or password error</div>

    <?php
}


?>


                                               <input type="submit" value="Login" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div>
                                   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
