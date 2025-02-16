<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo filemtime('css/style.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="css/forms.css?v=<?php echo filemtime('css/form.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="css/login.css?v=<?php echo filemtime('css/login.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="css/animation/animate.css" />

    <!--    /////////////////////////////////-->
    <!--    /////////////////////////////////-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--    fontawesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--    Bootstrapicons cdn-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- AJAX LIBs-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--    //////////////////////////-->
</head>

<body>

    <div class="sign-section">

        <div class="logo">
            <a href="index.php">
                <h2><i class="fa fa-ticket"></i> Ticket<span>place.</span></h2>
            </a>
        </div>

        <div class="holder">

            <div class="intro">
                <img src="https://i.pinimg.com/736x/2f/b7/65/2fb765084449566d19f7107ce70540c6.jpg" alt="signin img">

                <h2>Experience awesome <b>events</b>.</h2>

                <p>Be inspired and enjoy every moment with each other. We believe in working together to create a future of unique experiences where people connect.</p>

                <div class="action-nav">
                    <span class="log">Login</span>
                    <span class="sign">Sign up</span>
                </div>
            </div>

            <!--///////////////////////////////////////////-->
            <!--///////////////////////////////////////////-->

            <div class="form-control">

                <h2 class="form-title"></h2>
                <p class="error-msg"></p>

                <!--///////////////////////////////////////////-->
                <!--///////////////////////////////////////////-->

                <form style="display: none" method="post" action="#" class="login">
                    <div class="input-control">
                        <input type="email" name="Email" value="" placeholder="Enter Email" required>
                        <i class="fa fa-envelope"></i>
                    </div>

                    <div class="input-control">
                        <input type="password" name="Password" value="" placeholder="Enter Password" required>
                        <i class="fa fa-key"></i>
                        <span class="remind">Forgot password ?</span>
                    </div>

                    <button>Login</button>

                    <p class="text">or continue with</p>

                    <button type="button" class="google"> <img src="https://static.vecteezy.com/system/resources/previews/022/613/027/non_2x/google-icon-logo-symbol-free-png.png"> Google</button>
                    <p class="text">Don't have an account? <span class="signbtn sign">Sign up</span></p>
                </form>

                <!--///////////////////////////////////////////-->
                <!--///////////////////////////////////////////-->

                <form style="display: none" method="post" action="#" class="forgot">

                    <div class="input-control">
                        <input type="email" name="Email" value="" placeholder="Enter Email" required>
                        <i class="fa fa-envelope"></i>
                    </div>

                    <button>Remind me</button>

                    <p class="text">Back to <span class="signbtn back-to-log">Login</span></p>

                </form>

                <!--///////////////////////////////////////////-->
                <!--///////////////////////////////////////////-->

                <form style="display: none" method="post" action="#" class="signup">

                    <br>

                    <div class="input-control">
                        <input type="text" name="Name" placeholder="Full Name" required>
                        <i class="fa fa-user"></i>
                    </div>

                    <div class="input-control">
                        <input type="email" name="Email" placeholder="Enter Email" required>
                        <i class="fa fa-envelope"></i>
                    </div>

                    <div class="input-control">
                        <select name="Country" required>
                            <option value="Select country">Select country</option>
                        </select>
                        <i class="fa fa-map"></i>
                    </div>

                    <div class="input-control">
                        <input type="Password" name="Pass"  placeholder="Password" required>
                        <i class="fa fa-lock"></i>
                    </div>

                    <div class="input-control">
                        <input type="password" name="Pass2" placeholder="Comfirm Password" required>
                        <i class="fa fa-key"></i>
                    </div>

                    <button>Sign Up</button>

                    <p class="text">Back to <span class="signbtn log">Login</span></p>

                </form>


            </div>

        </div>

    </div>

    <script>
        $(".sign").on('click', function() {

            $(".log").css({
                "background": "rgba(0, 0, 0, 0)"
            })

            $(".sign").css({
                "background-image": "linear-gradient(45deg, rgba(2, 211, 249, 0.9), rgb(0, 245, 188))"
            })

            $(".intro").fadeOut(0);
            
//            $(".logo").fadeOut(0);

            ////////////////////////////////////
            ////////////////////////////////////

            $(".form-title").html("Sign Up");

            $(".error-msg").html("Join our awesome ticket experience");

            $(".error-msg").css({
                "color": "#000"
            });

            $(".signup").fadeIn(0);

            $(".login").fadeOut(0);

            $(".forgot").fadeOut(0);

        })

        $(".log").on('click', function() {

            $(".sign").css({
                "background": "rgba(0, 0, 0, 0)"
            })

            $(".log").css({
                "background-image": "linear-gradient(45deg, rgba(2, 211, 249, 0.9), rgb(0, 245, 188))"
            })

            $(".intro").fadeOut(0);
            
            $(".logo").fadeIn(0);

            ////////////////////////////////////
            ////////////////////////////////////

            $(".form-title").html("Login");

            $(".login").fadeIn(0);

            $(".signup").fadeOut(0);

            $(".forgot").fadeOut(0);
        })

        $(".remind").on('click', function() {

            $(".form-title").html("Forgot Password");

            $(".error-msg").html("Please enter a registered email");

            $(".error-msg").css({
                "color": "#000"
            })

            $(".login").fadeOut(0);

            $(".signup").fadeOut(0);

            $(".forgot").fadeIn(0);
        })

        $(".back-to-log").on('click', function() {

            $(".form-title").html("Login");

            $(".login").fadeIn(0);

            $(".signup").fadeOut(0);

            $(".forgot").fadeOut(0);
        })

    </script>

</body>

</html>
