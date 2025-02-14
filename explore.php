<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ticket Hub</title>

    <!-- External Stylesheets -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style-mobile.css" type="text/css">
    <link rel="stylesheet" href="css/forms.css" type="text/css">
    <link rel="stylesheet" href="css/create-event.css" type="text/css">
    <link rel="stylesheet" href="css/animation/animate.css" type="text/css">

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

    <section class="upcoming_event_section">

        <!-- Event Details -->
        <div class="upcoming_event_view">

            <div class="view_content">

                <img src="https://i.pinimg.com/736x/02/71/a1/0271a12c2b76ea037824a081f426c3f2.jpg" alt="Event Image">


                <p class="date">May 21</p>
                <span class="location"><i class="fa fa-flag"></i> Toronto, Canada</span>
                <span class="icon"><i class="fa fa-archive"></i></span>
            </div>

            <div class="write-up">
                <h2>Marion Events</h2>
                <p>By: <span class="initial">w</span> Marion</p>

                <h3>About Event</h3>

                <span class="event-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quam sed et, tempore quod, ea omnis adipisci, neque aspernatur numquam minima unde rerum animi tenetur laudantium voluptatem exercitationem doloribus enim.</span>
                
                <h3>Event contact Info</h3>
                <p><i class="bi bi-whatsapp"></i> +234806 508 6643</p>
                <p><i class="bi bi-globe"></i>  <a href="https://www.gphixtech.com.ng" target="_blank">www.gphixtech.com.ng</a> </p>
                <p><i class="bi bi-envelope-at-fill"> contact@gphixtech.com.ng</i></p>

                <h3>Event Category</h3>
                <!-- Event category -->
                <!-- Event category -->
                <?php include 'exe/event-category.php'; ?>
                <!-- Event category -->
                <!-- Event category -->
                
                <!-- Timeline Events -->
                <div class="event-map">
                    <h3>Map Location</h3>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5400220792762!2d3.3200351731178888!3d6.579582622512939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b91e751d71485%3A0xf222ed73a7d14f9a!2sMurtala%20Muhammed%20International%20Airport!5e0!3m2!1sen!2sng!4v1737990435003!5m2!1sen!2sng" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
            </div>

        </div>

        <aside>

            <!-- Payment Section -->
            <div class="payment_area">
                <h3>Make Payment</h3>
                <p>Secure your ticket now for an unforgettable experience! choose payment gateway bellow</p>
                
                <input type="text" name="Name" placeholder="Full Name" required>
                
                <input type="email" name="Email" placeholder="Email" required>
                
                <select name="paygate" required>
                    <option selected disabled value="">Choose Payment</option>
                    <option value="Paystack">Paystack</option>
                </select>
                
                <button class="pay-btn">Proceed to Payment</button>

            </div>

            <div class="archive_area">
                <?php include 'exe/archivedevent.php'; ?>
            </div>

        </aside>

    </section>


    <!-- Footer -->
    <?php include 'exe/footer.php'; ?>

    <script>
        $(".pay-btn").on('click', function() {
            $(".ticket-summary").fadeIn(50);
        })

    </script>
</body>

</html>
