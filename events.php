<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>

    <!-- External Stylesheets -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/forms.css" type="text/css">
    <link rel="stylesheet" href="css/create-event.css" type="text/css">
    <!-- Page Stylesheets -->
    <link rel="stylesheet" href="css/events.css" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome Icons -->
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

    <?php include 'exe/ticket.php'; ?>

    <!-- Header -->
    <?php include 'exe/header.php'; ?>

    <!--    /////////////////////////////////////////-->
    <!--    /////////////////////////////////////////-->

    <!-- Mobile Menu -->
    <!-- Mobile Menu -->
    <?php include 'exe/mobile-menu.php'; ?>
    <!-- Mobile Menu -->
    <!-- Mobile Menu -->


    <div class="events">

        <div class="col event-category">

            <h2 class="title">Event Categories</h2>

            <?php include 'exe/event-category.php'; ?>
            
        </div>

        <div class="col event-container">

            <div class="holder eventing">
                <img src="https://i.pinimg.com/736x/2d/76/ad/2d76adea865722a8f1ddc25dd3d9a7a8.jpg" alt="Event images">

                <div class="write-up">
                    <p class="promo">Sponsored</p>
                    <h2>Traders Fair 2025 - Nigeria, 5 APRIL, LAGOS (Financial Event)</h2>
                    <p>Sat, Apr 5 • 10:00 AM</p>
                    <p>Lagos Continental Hotel</p>
                    <span>Event fee $0.00 || Business</span>
                </div>

                <i class="fa fa-ticket"></i>
            </div>

            <div class="holder eventing">
                <img src="https://i.pinimg.com/736x/2d/76/ad/2d76adea865722a8f1ddc25dd3d9a7a8.jpg" alt="Event images">

                <div class="write-up">
                    <h2>Traders Fair 2025 - Nigeria, 5 APRIL, LAGOS (Financial Event)</h2>
                    <p>Sat, Apr 5 • 10:00 AM</p>
                    <p>Lagos Continental Hotel</p>
                    <span>Event fee $0.00</span>
                </div>

                <i class="fa fa-ticket"></i>
            </div>

            <div class="holder eventing">
                <img src="https://i.pinimg.com/736x/2d/76/ad/2d76adea865722a8f1ddc25dd3d9a7a8.jpg" alt="Event images">

                <div class="write-up">
                    <h2>Traders Fair 2025 - Nigeria, 5 APRIL, LAGOS (Financial Event)</h2>
                    <p>Sat, Apr 5 • 10:00 AM</p>
                    <p>Lagos Continental Hotel</p>
                    <span>Event fee $0.00</span>
                </div>

                <i class="fa fa-ticket"></i>
            </div>

            <div class="holder eventing">
                <img src="https://i.pinimg.com/736x/2d/76/ad/2d76adea865722a8f1ddc25dd3d9a7a8.jpg" alt="Event images">

                <div class="write-up">
                    <h2>Traders Fair 2025 - Nigeria, 5 APRIL, LAGOS (Financial Event)</h2>
                    <p>Sat, Apr 5 • 10:00 AM</p>
                    <p>Lagos Continental Hotel</p>
                    <span>Event fee $0.00</span>
                </div>

                <i class="fa fa-ticket"></i>
            </div>

            <div class="holder eventing">
                <img src="https://i.pinimg.com/736x/2d/76/ad/2d76adea865722a8f1ddc25dd3d9a7a8.jpg" alt="Event images">

                <div class="write-up">
                    <h2>Traders Fair 2025 - Nigeria, 5 APRIL, LAGOS (Financial Event)</h2>
                    <p>Sat, Apr 5 • 10:00 AM</p>
                    <p>Lagos Continental Hotel</p>
                    <span>Event fee $0.00</span>
                </div>

                <i class="fa fa-ticket"></i>
            </div>

            <div class="holder eventing">
                <img src="https://i.pinimg.com/736x/2d/76/ad/2d76adea865722a8f1ddc25dd3d9a7a8.jpg" alt="Event images">

                <div class="write-up">
                    <h2>Traders Fair 2025 - Nigeria, 5 APRIL, LAGOS (Financial Event)</h2>
                    <p>Sat, Apr 5 • 10:00 AM</p>
                    <p>Lagos Continental Hotel</p>
                    <span>Event fee $0.00</span>
                </div>

                <i class="fa fa-ticket"></i>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <?php include 'exe/footer.php'; ?>
    
    <script>
    $(".eventing").on('click', function() {
        window.location.href = "explore.php";
    })
</script>

</body>

</html>
