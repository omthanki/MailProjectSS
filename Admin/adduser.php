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


    <?php include('nav.php');?>

    <div class="container">
        <form action="adddb.php" method="POST">
            <div id="login_page">
                <div style="margin-top: 15%;">
                    <div class="card mx-auto form-group col-5">
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center; margin-bottom: 10%;">Add recipients</h3>
                            <div class="form-group mb-3">
                            <label for="name" class="mx-2" style="display: block; text-align: left; line-height: 150%; font-size: 1.5em;">Name:</label>
                                <input type="text" class="form-control" aria-label="addemail" aria-describedby="basic-addon1" id="form_uname" name="name">
                                <span class="error_form" id="uname_error_message"></span>
                            </div>
                            <div class="form-group mb-3">
                            <label for="email" class="mx-2" style="display: block; text-align: left; line-height: 150%; font-size: 1.5em;">Email ID:</label>
                                <input type="text" class="form-control" placeholder="abc@example.com" aria-label="addemail" aria-describedby="basic-addon1" id="form_uname" name="email" value="">
                                <span class="error_form" id="uname_error_message"></span>
                            </div>
                                  
                                </div>
                                <button type="submit" class="btn btn-primary mx-auto form-control" style="width: 25%; margin-top: 5%; background-image: linear-gradient(90deg, #020024 0%, #090979 35%, #00d4ff 100%);">Add recipient</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
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