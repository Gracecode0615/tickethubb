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

                <h2>Form landing words.</h2>

                <p>This about the login will be written here. standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>

                <div class="action-nav">
                    <span class="log">Login</span>
                    <span class="sign">Sign up</span>
                </div>
            </div>
            <!--///////////////////////////////////////////-->
            <!--///////////////////////////////////////////-->
            <form method="post" class="form-control" id="login">
                <div class="input-control">
                    <label>Enter Email</label>
                    <input type="email" name="Email" value="" required placeholder="email address">
                    <i class="fa fa-lock"></i>
                </div>
                <span class="forgot">Forgot password?</span>
                <button>Login</button>
                <p class="text">or continue with</p>
                <span class="goggle">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMwAAADACAMAAAB/Pny7AAABTVBMVEX////u7u7t7e3qQTTs7OxAhfUzqFL9/f3+/v7v7+/4+Pjw8PD19fX7vAV3o/Q5gfX///c0f/aMsfb2+PwaokL2///qPS/49vIrpkzB0fT81Yv7uAB4p+uQy57qNSX3wWf87+Ws17cAnzXpHwD66en3zsrqLBjpODX9xACYt/l0pO1GifMnevb11dHxs57vppfrf3rtd3Duj4nyxLvtmpDqZ1vrUUjqbGT0trToRzzte2j44NnxqaHxv73nW1LqWkXshm34zHvwawD1lh7v0n/3oxfvbCv5wCruYCrnITn83rH0xlf558j12pnsTzH6w0bwdynygiX2ya+lwvHZ5vOXqxjkuyGHsEVSsXFeqkvb7N5XkfKgsTkAo1oAmR9wuYOz18fLuDO+uz/F3d55u52+1ukynYg0i9MzkLo4mKgzoXc7idyWyK8ympZJsGTYs1nwAAAMA0lEQVR4nO2d63ubRhbGAcviMiNfgiRwHKmWJauJHWV9i+LEjrvZNPVu4rTdtTdV8LrSNs2lu1n9/x93EBdxmUEMIMB+OJ/cU3h9fh44nDMzEIYxDbKGAd7t4GyHxBkO0XaUjENKOdFgGcG0qYjlED0OyXuE5eCYfGiwDDBN4k2DHodkOaDl8J2SFw3GhCpJ5pjxIudxgImD46DbwdoOppQTDQyMOe4eEZadirBuByaQbDQKmAKmgIkNg88irC+LlKgz0bw1XM8ZyZnOJV6SJHd+l1wJH04Svn5MXjRsKFgyzC4SLMe0jLCOEDyOUt40wtdEbAJ11Xw02AKmgClgCpj8pNVYGuaTSPR2SaKvS4KCp4+yHAybDw1cc+Z1kGqioMYqG43bXmgWMLnQKGByC8MZ5myKPA5QMjyOpsjtYEo50WCgaZJlRAeceUTWGrdretYeIfsQt8NRExmXdbxJ73lq3NZCs4ApYFKA4RIIJFuNIBjOK+LLItzMQFLVYOM8NCM8AeerEaac4WaVESFKkVQ0blehWcAUMAVM4s3Zzclm9kyanb2tFSuvg3gEnxMNR3MmGuZoijwOyedgDYe9ASdjDdEeIV/VEL2ucmt45okjaYSLY95VswhATTfrCHRbo4v8ZrYAgtLpPfrT7u6ebrv7jw56HVirSYnsN0sXhu8d7j3uL9QX6vV6s27Y0/6T3cNOrWYnoNzDcIBhNo52210dYcFtOlj76bMt5WbAiEDqHJw2280FoiGe5n5PSR7GTG/oHCNFWgnP57AzoM9hzXnppwDAHp/0203viPh4ut0nzzs8isyvETUOkdyczW6bcEcovf1mexaJYc326dGxEOm3EI7AlDOlWXO8IrkU6R0+Dbi8fDjN0+cdn0b0OJIrNDlRUk6+CzkqU5zdLX6qkZeqmYPK1u7MWwWD0z/p5A2Gg53DPsUVNrX6wp4+OHmCqfX2FuiHxaBp9p/nCQZIW6eRhsXE6Z4wXAJxJALDwYNmDBZk3T+byzCJwLCS+QSyD/E5IMHBM/whZRLzW/tQihuHINhQ0fesiLX9dkyUenNXiB1HAtsaOSCdxGfZh3Hj0C02DIAn3bgs9X0J5AFGVE6ipmTHuACYhxZAhAf9MCz+xsbJ0oGZ9TOOO5GTe6czWFAz1m0a1sVVO+gaQyxRYHyzJDFHBir7gc8XvQt79uzw6GDrYOvoaP/Zd11fz4bu/ckcTrIjEyElijDwhql3608OOpyCkgQ6heclRTk+eex+vCIWkNy2xhgrVlKtF8BSb/940hEY3n0Kwx/vtqfpr7tXE2b8WopuDTVnk5ks19sRbgcqI9DAupoi/T/RER1yQVZvnh4INYLGoZUPunv2U1uvvCPGkUhtJh21iSj9R4okEvdXdiYlNnru27hzqppBWBFwTGqR6/W9Xg39GQM0Tvp1nQWQlzRCx5FE1czJ+4RHf/PpoQSDNQS49VjPY7N3z6YDAza63+JZ+kei+U4lWQNKW4f68yUnMPKLvyzgaNCdH+oSAQpg5w/DeRx+ET2LgOP1yksMTbN/wAvhNNjgTdr0Gv53m70O3zvFxhHy95VK5dUPXpr6whEvhNVwOAQxYhxOh3Nbo3sW1OeQnPOkzMYZgqms//VvnoHZByCshnNqlWWixeGenrWMdjvh68rE7r/60Tk4zb0avHnbGoU3FZPGeePU+8f6Ml72+83oRM7PKhaN48bpbtVK0QLJFOZtxbb7938wL7XmnhQ1kCxhlBcVp700aNrH8CbCnP/kgjHSQPNZjcsJjLkc4miKDIezS7aPeFvx2KufUXnZM5ZQwmgIbgdXihaHS4OL1pzV7nph7q//vbmn0DdWtgPQL5T5V87MEaIqI1j57rqXprL+8h88WUNZMcwagJUVgoMhaxBqs5grZ+D8jY8F2TlZQ75YorI1PrWqGXjuf8O+2QiAubO6TGGrD2QhNZjXZxiY75UgmEUayx7mNZsczJ30YERfMpvcMiAxmOWlSyalbY2igoM5OxfJGrQwO2tMnG2NFB98gliYnzYgWYMeRggRh685870GLZEckn2ugnnMoGQmkDUoYRYX15QQcXgc9hoPA80xc7wd4XFYVYMorOBhyBrUMMtryuw4/OWMDWPeTWEKPCIMSSMWDDkOG8b8vQXMLYPBZLM3NxSG8JzJEYx3pZA8xSNIbwkwJI0oqTnKVFP41mfaLsn42ixgbYsW5uqjr9EL0T76yhmBtJ2wNC1nxHMMzPrdAI0otdnsODyOiIVmhH6GCmZ1m02vBdj4BjMyZ0EwS6tEw8Gk2M+I4gvMHMA/WzxRA15s39teWrq3vb3k+eHe0s4cYUIsFHGyPze/+0UdBGiY5aJs2bQEvVxa9t8zD+T01jR9reb6u/flsqqRNcxlCHtNE5grGRJzibn/rz4muwwYuGIFPRlg/V35ulyuDig0rEDkC8zAXK1RaThgjLM8uwdFl2NyiHM7oeKea/oXQkH2q8Lw4TWMX3u55M8Ay9syQ6Ex3dbobc4AsVuTHEe45mff/VI2rDrkKTQMxxo2ma1QaWCaM+MSDblitTG9ziaXmEkzkrjwGrrJd3Cp+UIpUWjEXp+Rrevs7N/vy1MblyhXzjC3/6SYSfcFurfr7kvMMHUIEQ1FIJg7ZnFxuySmu61xZZKcXcMyoWlJNIGsPcSNzIWS9h5Nfe3sNy8LutBacniNS8zTf3FxZy11mI31ym8+FDQ0gxEMq6Fd+Z8xesmsb6WPuXI22as2zRHQ2FbnyiKuKZ43768xMIjmgxxOY2Ubx7K4jHIZTRy2g2OILc+spoi//BXHgmg2W0IIDeHyCnfzLy7vyBJNHM7mzNqs6Wis3A4emA5HUzQx4fcqnqZcbUCRC9YAEFdg6rZ6jzKOZLY1cmOVQLM51AAQAzQY5SN+XJDJtHEks0ezpZJoquWRCAG5SNQanz7jUR5eUMeRDAwcki60sqoOWxrksRqK1hpXq4MvO5jrDN0x2cBARiuThgYNjo7DW6focw/6m8KoENIawyo6rXr9x6KfxhqYDGCUBpFFH53yAPFo+p/aKG/lkjZqDAdq1Ry8T777ZnVbzgyGgQ3ihTaJtzoeDxqNRku3RmM4HIzVqj2Yqvqfz26a5Z2P5HmEEDD0qVlwpkRtQL7QzIitLKGq05+t/3n9xVWcPbzgIsZhuqa7Byfm3E7odmC/kghHAbfNbFOrn5anN87qHZmJGMfEbKiou4n4eDTl8qf/Wpfa8tVlxu+csfIoHoxq5+idtThxJAIjwq+bsXDU6h8Tmp21lcxhkMbwOh6N+r/PiOaBHDOOhL6h8ZVYpYWzzcGX1YvYcSQEI43Ggc+bmVbdvJCThOE8q+umI8R2whJ6CIxmPW+CWcatlfhxcOSVM8puTRtWI+NUBxqfRByMaM1g25OePoc96U1wMJyov5ZAbgiCTa0ONYbh4schJPcNDQC1wWYUFnWyrpOfLzWY9yzTKNPmARVdYk6N3MAgDTAs01xsCGXk08gNDMN8GI5DFmuIevxVwWnkBkbv7wchhgcdMWxJQjov0MV4X0zQWkPU5JN51Gq1PGy0NAiC/p0z+jiIqVn0OSDJwbAeDYbXtJY+Phgi5BuXf2+NNCDBII0IcQjTGU17gcp6EnkdxCMA7zsCJVtJG7UaaIQ2NzerhqGfVNRFt0YjfWKDn6VBH4c9QhTbGjHlDP4UBXCaNvowahj2YaQhK4n6Lw+tMfdtjbaIeVmTNdDfD8iyqCi1Wk3hBX13h34v3LwPHDLmQqnoWH0K8R3N/MKkqlHA3ACYOWSzlDUCmjOKFau8aFjlzLQECvHPpbJuh1WKZK4Ro9BM4pMRyWrcrm+cFzAFTCYwhCxCFUg2Ggl8rVGwvoGZtYYQfbtJpCfgfDXsESKVEb453gilSEoa827OUtW4rVVzAVPApADDzRSZ/WmibDVYa/u84N0+L/heg5ZE9xG2wxLJWgPE2NbomCfOicZtLzQLmFxoFDAFTBoweUmriaRms7/hIbRXvUwH8Dgkt8P58ldONGwoaBYJ7rUVylIkW43bWmgWMAVMAROlOYuXibLVsJuzabKO8MGnvGiEn54VE5hana8GeVtjvEnvbDT+DzB/4i7XgH/nAAAAAElFTkSuQmCC"> <b>Google</b>
                </span>
                <p class="text">Don't have an account? <span class="sign">Sign up</span></p>

            </form>
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
