<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</head>

<body>

    <form action="sendmail.php" method="post">
        <div class="form-group">
            <label for="email">Message</label>
            <textarea class="form-control" name="message">This mail is for testing purpose. Kindly ignore it.</textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Submit" name="submit">
    </form>

</body>

</html> -->

<?php
    
    session_start();

    if(!isset($_SESSION['clerk'])){
        header('location: ../login.php');
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>

<body style="background-image: linear-gradient(90deg, #020024 0%, #090979 35%, #00d4ff 100%);">

    <a class="btn btn-primary" href="logout.php">Logout</a>

    <form action="sendmail.php" method="POST">
        <div id="login_page">
            <div class="card mx-auto" style="width: 30%; margin-top: 15%; margin-bottom: 15%;">
                <div class="card-body">
                    <h3 class="card-title" style="text-align: center; margin-bottom: 10%;">Send Email with a click!</h3>
                    <div class="form-group">
                        <label for="email" style="display: block; text-align: center; line-height: 150%; font-size: 1.5em;">Your Message:</label>
                        <textarea class="form-control" name="message">This mail is for testing purpose. Kindly ignore it.</textarea>
                    </div>
                    <input type="submit" class="btn btn-primary mt-2" value="Submit" name="submit" style="background-image: linear-gradient(90deg, #020024 0%, #090979 35%, #00d4ff 100%);">
                </div>
            </div>
        </div>
        </div>
    </form>
    <script type="text/javascript">
        $(function () {

            $("#uname_error_message").hide();
            $("#pass_error_message").hide();

            var error_uname = false;
            var error_pass = false;

            $("#form_uname").focusout(function () {
                check_uname();
            });
            $("#form_pass").focusout(function () {
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

            $("#login_page").submit(function () {
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