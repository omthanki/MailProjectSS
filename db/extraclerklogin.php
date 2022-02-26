<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>

<body style="background-image: linear-gradient(90deg, #020024 0%, #090979 35%, #00d4ff 100%);">
    <form action="validateuser.php" method="POST">
        <div id="login_page">
            <div class="card mx-auto" style="width: 30%; margin-top: 15%; margin-bottom: 15%;">
                <div class="card-body">
                    <h3 class="card-title" style="text-align: center; margin-bottom: 10%;">Clerk Login</h3>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="form_uname" name="username" value="clerk@gmail.com">
                        <span class="error_form" id="uname_error_message"></span>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-13">
                            <input type="password" class="form-control mt-2" placeholder="Password" id="form_pass" name="password" value="clerk123">
                            <span class="error_form" id="pass_error_message"></span>
                        </div>
                        <div class="form-check" style="margin-top: 3%; margin-left: 3%;">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                                Remember me
                            </label>
                            <a href="#" style="float: right; margin-right: 5%; text-decoration: none;">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary mx-auto" style="width: 25%; margin-top: 5%; background-image: linear-gradient(90deg, #020024 0%, #090979 35%, #00d4ff 100%);">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        $(function() {

            $("#uname_error_message").hide();
            $("#pass_error_message").hide();

            var error_uname = false;
            var error_pass = false;

            $("#form_uname").focusout(function() {
                check_uname();
            });
            $("#form_pass").focusout(function() {
                check_pass();
            });

            function check_uname() {
                var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                var uname = $("#form_uname").val();
                if (pattern.test(uname) && uname !== '') {
                    $("#uname_error_message").hide();
                    $("#form_uname").css("border-bottom", "2px solid #34F458");
                } else {
                    $("#uname_error_message").html("Invalid Email");
                    $("#uname_error_message").show();
                    $("#form_uname").css("border-bottom", "2px solid #F90A0A");
                    error_uname = true;
                }
            }

            function check_pass() {
                var password_length = $("#form_pass").val().length;
                if (password_length < 8) {
                    $("#pass_error_message").html("Atleast 8 Characters");
                    $("#pass_error_message").show();
                    $("#form_pass").css("border-bottom", "2px solid #F90A0A");
                    error_pass = true;
                } else {
                    $("#pass_error_message").hide();
                    $("#form_pass").css("border-bottom", "2px solid #34F458");
                }
            }

            $("#login_page").submit(function() {
                error_uname = false;
                error_pass = false;

                check_uname();
                check_pass();

                if (error_uname === false && error_pass === false) {
                    alert("Registration Successfull");
                    return true;
                } else {
                    alert("Please Fill the form Correctly");
                    return false;
                }


            });
        });
    </script>
</body>

</html>