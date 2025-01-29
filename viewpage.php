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
    <?php include 'exe/header.php'; ?>
    <!--    /////////////////////////////////////////-->
    <!--    /////////////////////////////////////////-->

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

                <img src="https://i.pinimg.com/736x/02/71/a1/0271a12c2b76ea037824a081f426c3f2.jpg" alt="Event Image">


                <p class="date">May 21</p>
                <span class="location"><i class="fa fa-flag"></i> Toronto, Canada</span>
                <span class="icon"><i class="fa fa-archive"></i></span>
            </div>


            <div class="view_write-up">
                <h2>Marion Events</h2>
                <br>

                <div class="categories">
                    <li>Religion</li>
                    <li>Health</li>
                    <li>Entertainment</li>
                    <li>Re-creaational</li>
                    <li>Business</li>
                    <li>Confrence</li>
                    <li>Special</li>
                </div>


                <div class="event_action">
                    <button class="btn"><span class="fa fa-star"></span> Follow the conference</button>
                    <button class="btn"><span class="fa fa-globe"></span> Go to the conference website</button>
                    <button class="btn"><span class="fa fa-envelope"></span> Email the Organiser</button>
                </div>

                <!-- modal popup-->
                <div class="scan_area">
                    <i class="fa fa-x"></i>
                    <h3>Marion Events Marion Events Marion Events Marion Events</h3>
                    <p>Ticket will be active from</p>

                    <div class="event_time">
                        <span class="time">
                            <li>9:00 PM</li>
                            <li>12:00 PM</li>
                        </span>
                        <span class="event_date">
                            <li>Jan 21, 2025</li>
                            <li>Jan 21, 2025</li>
                        </span>
                    </div>
                    <hr>
                    <img src="img/QRcode.png" alt="qrcode">
                    <button class="download"> <span class="fa fa-download"></span> Download Ticket</button>
                </div>

                <!-- Timeline Events -->
                <div class="event-summary">

                </div>
            </div>

        </div>

        <!-- General info Section -->
        <div class="general_info">
            <h3><strong>General details</strong></h3>
            <span class="edit"><a href="">Edit <i class="fa fa-edit"></i></a></span>
            <p class=contact-info>Contact Information</p>
            <form>
                <div class="form-group">
                    <label>First name <span>*</span></label>
                    <span>Grace</span>
                </div>
                <div class="form-group">
                    <label>last name <span>*</span></label>
                    <span>Solomon</span>
                </div>
                <div class="form-group">
                    <label>Email Address <span>*</span></label>
                    <span>grace@gmail.com</span>
                </div>
                <div class="form-group">
                    <label>Delivery method <span>*</span></label>
                    <span>e-ticket</span>
                </div>
                <div class="form-group">
                    <label>Phone numner <span>*</span></label>
                    <span>+123456789</span>
                </div>
            </form>



            <div class="policy">
                <h3>Refund Policy</h3>
                <span>Refund up to 7days before event</span>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <?php include 'exe/footer.php'; ?>
</body>

</html>
