<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login-tickethubb</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/form.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--    fontawesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- AJAX LIBs-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--    //////////////////////////-->
</head>

<body>

    <div class="sign-section">


        <div class="holder">

            <div class="intro">
                <img src="https://i.pinimg.com/736x/2f/b7/65/2fb765084449566d19f7107ce70540c6.jpg" alt="signin img">

                <h2>Form landind words.</h2>

                <p>This about the login will be written here. standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>

                <div class="action-nav">
                    <span class="log">Login</span>
                    <span class="sign">Sign up</span>
                </div>
            </div>

            <div class="form-control" style="display: none" id="login">

                <div class="input-controll">
                    <label>Enter Email</label>
                    <input type="email" name="Email" value="" required>
                </div>

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

            $(".intro").fadeOut(100);
        })

        $(".log").on('click', function() {

            $(".sign").css({
                "background": "rgba(0, 0, 0, 0)"
            })

            $(".log").css({
                "background-image": "linear-gradient(45deg, rgba(2, 211, 249, 0.9), rgb(0, 245, 188))"
            })

            $(".intro").fadeOut(100);
        })

    </script>
</body>

</html>
