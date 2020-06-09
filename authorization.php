<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <title>Authorization</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {

            $("#login").click(function(){
                event.preventDefault();
                $.ajax('test.php', 
                {
                    type: 'POST',
                    data: 
                    { 
                        email: $( "#email" ).val(),
                        pass:  $( "#pass" ).val()
                    },
                    
                    success: function (data) 
                    {
                        if (data.message == 'success') {
                            $('#loginError').removeClass('text-danger');
                            $('#loginError').addClass('text-success');
                            $("#loginError").text(data.message);
                            $("#loginError").show(); 
                                window.location.href = "signedUser.php";

                        }
                        else
                        {
                            $('#loginError').addClass('text-danger');
                            $('#loginError').removeClass('text-success');
                            $("#loginError").text('Error: ' + data.message);
                            $("#loginError").show();
                        }
                    },
                    error: function (error, status, errorMessage)
                    {
                        alert( "Fill all inputs!!!" );
                    }
                });
                
            });
            
            $(".signin").click(function(){
                $(".signin").addClass("border border-primary")
                $(".signup").removeClass("border border-success")
                $("#signupform: input").attr('disabled','disabled')
                $("#signinform: input").removeAttr('disabled')
            });
            $(".signup").click(function(){
                $(".signin").removeClass("border border-primary")
                $(".signup").addClass("border border-success")
                $("#signinform: input").attr('disabled','disabled')
                $("#signupform: input").removeAttr('disabled')
            });

            $('#regEmail').focus(function(){
                $(this).keyup(function()
                {
                    $('#checkEmail').html('');
                    $('#checkEmail').show();
                });
            });

            $('#regEmail').blur(function(){

                event.preventDefault();
                $.ajax('test2.php', 
                {
                    type: 'POST',
                    data: 
                    { 
                        email: (($( "#regEmail" ).val() == "") ? "none" : $( "#regEmail" ).val())
                    },
                    success: function (data) 
                    {
                        if (data.message == 'success') {
                            $('#checkEmail').removeClass('text-danger');
                            $('#checkEmail').addClass('text-success');
                            $('#checkEmail').html('Account is free!');
                            $('#checkEmail').show();
                        } 
                        else
                        {
                            $("#checkEmail").text('Error: ' + data.message);
                            $('#checkEmail').addClass('text-danger');
                            $('#checkEmail').removeClass('text-success');
                            $("#checkEmail").show();
                        }
                    },
                });
                if($( "#regEmail" ).val() == "")
                {
                    $("#checkEmail").text('Error: ' + 'Fill email input');
                    $("#checkEmail").show();
                    $('#checkEmail').addClass('text-danger');
                    $('#checkEmail').removeClass('text-success');
                }
            });
        });
    </script>
</head>
<body>
<div style="background-image: url('https://i.pinimg.com/originals/01/15/eb/0115eb738d65e7e0d0715f497a0828c9.png'); width: 100vw; height: 100vh; color: white;">
    <div class="container">
        <div class="row">
            <h1 class="col-md-11 text-center" style="border-bottom: 3px solid black;">Welcome to Kekiskimiro!</h1>
            <br><br><br>
            <div class="col-md-4 signin">
                <h2>Authorization</h2>
                <form id="signinform">
                    <span class="error text-danger" id="loginError" style="display: none"></span>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary" id="login">Log In</button>
                </form>

                <p id='p1'></p>
            </div>

            <div class="col-md-8 signup">
                <h2>Registration <br> <span id="allInputs"></span></h2>
                <form id="signupform">
                    <div class="form-group">
                        <label for="fname">First name</label>
                        <input type="text" class="form-control" id="fname" placeholder="Your first name" required>
                    </div>
                    <div class="form-group">
                        <label for="lname">Last name</label>
                        <input type="text" class="form-control" id="lname" placeholder="Your Last name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="regEmail">Email
                            <span class="error text-danger" id="checkEmail" style="display: none">
                            </span>
                                <img style="width: 26px; display: none;" class="rot" src="https://images.vexels.com/media/users/3/142890/isolated/preview/4ea2d7c4bf3cad23a4f18ee58752deb8-high-tech-rings-logo-by-vexels.png">
                        </label>
                        <input type="email" class="form-control" id="regEmail" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="regPass">Password</label>
                        <input type="password" class="form-control" id="regPass" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="photo">URL Avatar</label>
                        <input type="text" class="form-control" id="photo" placeholder="URL">
                    </div>
                    <div class="form-group">
                        <label for="bday">Birthday</label>
                        <input type="date" class="form-control" id="bday">
                    </div>
                    <button type="submit" class="btn btn-success" id="register">Register</button>
                </form>

            </div>
        </div>
    </div>
    <br><br><br>
    <script type="text/javascript">
        $("#register").on('click', function(){
                event.preventDefault();
                
                if( $('#regEmail').val().length == 0 || $('#regPass').val().length == 0 || $('#fname').val().length == 0)
                {
                    $('#allInputs').text("Email, Password and First name are required!!!");
                    $('#allInputs').addClass('text-danger');
                }
                else
                {
                    $.ajax('register.php', 
                    {
                        type: 'POST',
                        data:
                            "email=" + $("#regEmail").val() + 
                            "&fname=" + $('#fname').val() +
                            "&lname=" + $('#lname').val() +
                            "&pass=" +  $("#regPass").val() +
                            "&photo=" + $('#photo').val() +
                            "&bday=" + $('#bday').val(),

                        success: function (data)
                        {
                            if(data.message == 'success')
                            {
                                alert("You have successfully registered!!! Log In, please)");
                                $('#allInputs').text("");
                            }
                            else
                            {
                                alert("Error. Try again");
                            }
                        }
                    });                    
                }
            });
    </script>
</div>
</body>
</html>