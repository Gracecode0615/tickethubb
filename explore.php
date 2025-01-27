<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Hub</title>

    <!-- External Stylesheets -->
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/forms.css" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div class="menu"></div>
        <div class="user"></i></div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-menu">
        <nav>
            <ul style="display:none">
                <li><a href="#">Home</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>

    <section class="upcoming_event_section">
    <!-- Event Details -->
    <div class="upcoming_event_view">
     <div class="view_content">
        <img src="https://i.pinimg.com/736x/02/71/a1/0271a12c2b76ea037824a081f426c3f2.jpg" alt="Event Image" style="border-radius:20px">


            <p class="date">May 21</p>
            <span class="location">Toronto, Canada</span>
            <span class="icon"><i class="fa fa-map-marker-alt"></i></span>
        </div>


        <div class="write-up">
            <h2>Marion Events</h2>
            <p>By: <span class="initial">w</span>Marion</p>
            <h3>About</h3>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quam sed et, tempore quod, ea omnis adipisci, neque aspernatur numquam minima unde rerum animi tenetur laudantium voluptatem exercitationem doloribus enim.</span>

            <!-- Timeline Events -->
            <div class="timeline_event">
                <div class="timeline_title">
                <h3>Timeline Event</h3>
                <span>View All</span>
                </div>
                <div class="card">
                    <span>Opening Festival</span>
                    <span class="open_calender"><i class="fa fa-clock"></i> 24th Jan 2025</span>
                </div>
                <div class="card">
                    <span>Closing Ceremony</span>
                    <span class="open_calender"><i class="fa fa-clock"></i> 30th Jan 2025</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Payment Section -->
    <div class="payment_area">
        <h3>Make Payment</h3>
        <p>Secure your ticket now for an unforgettable experience!</p>
        <button class="btn-primary">Proceed to Payment</button>
    </div>
</section>


    <!-- Footer -->
    <?php include 'exe/footer.php'; ?>
</body>

</html>
