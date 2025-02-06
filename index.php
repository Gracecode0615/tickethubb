<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ticket Hub</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/forms.css" type="text/css">
    <link rel="stylesheet" href="css/create-event.css" type="text/css">

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

    <?php include 'exe/header.php'; ?>
    <?php include 'exe/search.php'; ?>
    <!--    /////////////////////////////////////////-->
    <!--    /////////////////////////////////////////-->

    <!-- Mobile Menu -->
    <!-- Mobile Menu -->
    <?php include 'exe/mobile-menu.php'; ?>
    <!-- Mobile Menu -->
    <!-- Mobile Menu -->

    <!--    /////////////////////////////////////////-->
    <!--    /////////////////////////////////////////-->

    <section class="near-event-card">

        <div class="title">
            <h1>Nearby Event</h1>
        </div>

        <div class="flex-hold">

            <div class="card-control">
                <i></i>
                <div class="overlay"></div>
                <img src="https://i.pinimg.com/736x/02/71/a1/0271a12c2b76ea037824a081f426c3f2.jpg" alt="Event Img">
                <h2>The new Water Ru Movement</h2>
                <span>By: Marion</span>
                <button>Get a Ticket <i class="fa fa-ticket" aria-hidden="true"></i></button>
            </div>

            <div class="active-card card-control">
                <i></i>
                <div class="overlay"></div>
                <img src="https://i.pinimg.com/736x/7b/66/62/7b6662a1f73f611c31b62c7167f4bb53.jpg" alt="Event Img">
                <h2>The new Water Ru Movement</h2>
                <span>By: Marion</span>
                <button>Get a Ticket <i class="fa fa-ticket" aria-hidden="true"></i></button>
            </div>

            <div class="card-control">
                <i></i>
                <div class="overlay"></div>
                <img src="https://i.pinimg.com/736x/02/71/a1/0271a12c2b76ea037824a081f426c3f2.jpg" alt="Event Img">
                <h2>The new Water Ru Movement</h2>
                <span>By: Marion</span>
                <button>Get a Ticket <i class="fa fa-ticket" aria-hidden="true"></i></button>
            </div>

            <div class="card-control">
                <i></i>
                <div class="overlay"></div>
                <img src="https://i.pinimg.com/736x/02/71/a1/0271a12c2b76ea037824a081f426c3f2.jpg" alt="Event Img">
                <h2>The new Water Ru Movement</h2>
                <span>By: Marion</span>
                <button>Get a Ticket <i class="fa fa-ticket" aria-hidden="true"></i></button>
            </div>

        </div>

    </section>

    <!--    /////////////////////////////////////////-->
    <!--    /////////////////////////////////////////-->

    <?php include 'exe/upcomingevent.php'; ?>

    <!--    /////////////////////////////////////////-->
    <!--    /////////////////////////////////////////-->

    <?php include 'exe/footer.php' ?>

    <script>
        $(".card-control").on('click', function() {
            window.location.href = "explore.php";
        })
    </script>

</body>

</html>
