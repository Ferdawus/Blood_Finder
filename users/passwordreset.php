<?php
session_start();
include('../db.php');
if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'Reset Password') {
        $Email           = $_POST['Email'];
        $CurrentPassword = $_POST['CurrentPassword'];
        $NewPassword     = $_POST['NewPassword'];
        $ConfirmPassword = $_POST['ConfirmPassword'];

        echo $Query = "SELECT * FROM users WHERE Email ='$Email' AND Password ='$CurrentPassword'";
        $Result = mysqli_query($Connection,$Query);
        $Count = mysqli_num_rows($Result);

        if ($Count > 0) {
            if ($NewPassword != $ConfirmPassword) {
                echo "New Password does not match";
            }
            else{
                $Query = "UPDATE users SET Password = '$NewPassword' WHERE  Email ='$Email'";
                $Result = mysqli_query($Connection,$Query);

                if (!$Result) {
                    echo 'Error in sql query';
                }
                else
                    echo "Password Reset Succesfully";

            }
        }
        else{
            echo "Sorry ! Your current password does not match";
        }



    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Password Reset page</title>
  </head>
  <body>
    <!-- header start -->
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center mt-4">
                    <h2>Password Reset Page</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- header end -->
    <!-- form section strat -->
    <div class="form mt-3">
        <form action="index.php?page=" method="POST" enctype="multipart/form-data">
            <div class="container">
                <!-- single item -->
                <div class="row">
                    <div class="col-md-6 m-auto">
                        <div class="form-group row ">
                            <label for="Email" class="col-md-2 col-form-label pt-0 pb-0">Email:</label>
                            <div class="col-md-10">
                                <input class="form-control" type="email" name="Email">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="row">
                    <div class="col-md-6 m-auto">
                        <div class="form-group row ">
                            <label for="CurrentPassword" class="col-md-2 col-form-label pt-0 pb-0">Current <br>Password:</label>
                            <div class="col-md-10">
                                <input class="form-control" type="password" name="CurrentPassword">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- single item -->
                <div class="row">
                    <div class="col-md-6 m-auto">
                        <div class="form-group row ">
                            <label for="NewPassword" class="col-md-2 col-form-label pt-0 pb-0">New <br>Password:</label>
                            <div class="col-md-10">
                                <input class="form-control" type="password" name="NewPassword">
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- single item -->
                <div class="row">
                    <div class="col-md-6 m-auto">
                        <div class="form-group row ">
                            <label for="ConfirmPassword" class="col-md-2 col-form-label pt-0 pb-0">Confirm <br>Password:</label>
                            <div class="col-md-10">
                                <input class="form-control" type="password" name="ConfirmPassword">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single item -->
                <div class="row">
                    <div class="col-md-6 m-auto">
                        <div class="row ">
                            <div class="col-md-10 offset-2">
                                <input type="submit" name="submit" value="Reset Password" class="btn btn-primary btn-block ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- form section end -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
  </body>
</html>