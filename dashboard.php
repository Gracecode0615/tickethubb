<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/forms.css" />
    <link rel="stylesheet" type="text/css" href="css/create-event.css" />
    <link rel="stylesheet" type="text/css" href="css/dashboard.css" />
    <link rel="stylesheet" type="text/css" href="css/dashboard-mobile.css" />
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
    <!-- AJAX LIBs-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--    //////////////////////////-->

    <!-- APPLICATION JAVASCRIPT-->
    <script type="application/ecmascript" src="js/net.js"></script>
</head>

<body>

    <?php include 'exe/create-event.php'; ?>
    <!--    ////////////////////////////-->
    <!--    ////////////////////////////-->
    <div class="dash">

        <div class="col aside">

            <i class="bi bi-x nav-close"></i>

            <div class="logo">
                <h2><i class="fa fa-ticket"></i> <span class="logo-initial">TP</span></h2>
            </div>

            <nav>

                <li class="menu-item open-dashboard"><i class="bi bi-house-door-fill"></i> <span class="li-name">Dashboard</span></li>

                <li class="menu-item open-events"><i class="bi bi-calendar-check-fill"></i> <span class="li-name">My Events</span></li>

                <li class="menu-item open-tickets"><i class="bi bi-ticket-fill"></i> <span class="li-name">My Tickets</span></li>

                <li class="menu-item open-promoted"><i class="bi bi-megaphone-fill"></i> <span class="li-name">Promotion</span></li>

                <li class="menu-item open-setting"><i class="bi bi-gear-fill"></i> <span class="li-name">Settings</span></li>

            </nav>

            <script>
                $(".open-dashboard").on('click', function() {
                    $(".section-title").html("Dashboard");
                    $(".dashboard").fadeIn(0);
                    $(".event-section").fadeOut(0);
                    $(".ticket-section").fadeOut(0);
                    $(".promo-section").fadeOut(0);
                    $(".setting-section").fadeOut(0);
                })

                $(".open-events").on('click', function() {
                    $(".section-title").html("My Events");
                    $(".dashboard").fadeOut(0);
                    $(".event-section").fadeIn(0);
                    $(".ticket-section").fadeOut(0);
                    $(".promo-section").fadeOut(0);
                    $(".setting-section").fadeOut(0);
                })

                $(".open-tickets").on('click', function() {
                    $(".section-title").html("My Tickets");
                    $(".dashboard").fadeOut(0);
                    $(".event-section").fadeOut(0);
                    $(".ticket-section").fadeIn(0);
                    $(".promo-section").fadeOut(0);
                    $(".setting-section").fadeOut(0);
                })

                $(".open-promoted").on('click', function() {
                    $(".section-title").html("Promotions");
                    $(".dashboard").fadeOut(0);
                    $(".event-section").fadeOut(0);
                    $(".ticket-section").fadeOut(0);
                    $(".promo-section").fadeIn(0);
                    $(".setting-section").fadeOut(0);
                })

                $(".open-setting").on('click', function() {
                    $(".section-title").html("Settings");
                    $(".dashboard").fadeOut(0);
                    $(".event-section").fadeOut(0);
                    $(".ticket-section").fadeOut(0);
                    $(".promo-section").fadeOut(0);
                    $(".setting-section").fadeIn(0);
                })

            </script>
        </div>

        <div class="col">

            <div class="in-app-msg">
                <h2>Notifications <i class="bi bi-x close-in-app-msg"></i></h2>

                <div class="messaging">
                    <i class="bi bi-chat-right-text"></i>
                    <div>
                        <h3>Welcome</h3>
                        <p>Welcome to Tiketplace, we are bringing the world together through live experiences.</p>
                        
                        <div class="action">
                            <i class="bi bi-check-all"></i>
                            <i class="bi bi-trash3"></i>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="msg close-msg">
                <div class="holder">
                    <figure></figure>
                    <div>
                        <h2 id="error-t">Error<br></h2>
                        <span id="error-p">This is where all errors.</span>
                    </div>

                    <i class="bi bi-x"></i>
                </div>
            </div>

            <div class="heading">

                <i class="bi bi-list nav-open"></i>

                <div class="user">
                    <div class="notification open-in-app-msg">
                        <span class="notify"></span>
                        <i class="bi bi-bell"></i>
                    </div>

                    <div class="user-details">
                        <i class="bi bi-person-circle"></i>
                        <p>Marion Idebe</p>
                        <span> <i class="bi bi-box-arrow-right"></i> Logout</span>
                    </div>
                </div>

            </div>

            <div class="page-intro">
                <h2 class="section-title">Dashboard</h2>

                <button class="create-event">Create Event</button>
            </div>

            <!--///////////////////////////////////////-->
            <!--///////////////////////////////////////-->

            <section style="display: block" class="dashboard">

                <div class="stats">
                    <div class="holder">
                        <i class="bi bi-calendar-event-fill"></i>
                        <h2><span>Events</span>00</h2>
                    </div>

                    <div class="holder">
                        <i class="bi bi-calendar-check-fill"></i>
                        <h2><span>Sold Events</span>$0.00</h2>
                    </div>

                    <div class="holder">
                        <i class="bi bi-ticket-perforated-fill"></i>
                        <h2><span>My Tickets </span>00</h2>
                    </div>

                    <div class="holder">
                        <i class="bi bi-bank2"></i>
                        <h2><span>Withdrawn </span>$0.00</h2>
                    </div>

                </div>

                <div class="dash-top-nav">
                    <li class="top-nav-item active">Published Events</li>
                    <li class="top-nav-item">Past Events</li>
                </div>

                <div class="listing">

                    <div class="hd">
                        <span></span>
                        <span>Event name</span>
                        <span>Date/Time</span>
                        <span>Venue</span>
                        <span>Price</span>
                        <span>Reserved</span>
                        <span></span>
                    </div>

                    <div class="td">
                        <div class="img-hold">
                            <img src="https://i.pinimg.com/736x/2d/76/ad/2d76adea865722a8f1ddc25dd3d9a7a8.jpg" alt="event-image">
                        </div>
                        <span>Discover the Art of Modern Love</span>
                        <span>Sun, Feb 23 • 3:00 PM</span>
                        <span>Lagos Oriental Hotel</span>
                        <span>Free</span>
                        <span>100 / 100</span>

                        <span class="event-action">
                            <i class="bi bi-three-dots-vertical"></i>

                            <div class="action">
                                <span>Edit</span>
                                <span>Delete</span>
                            </div>

                        </span>

                    </div>

                </div>

            </section>

            <!--///////////////////////////////////////-->
            <!--///////////////////////////////////////-->

            <section class="event-section">

                <div class="listing">

                    <div class="hd">
                        <span></span>
                        <span>Event name</span>
                        <span>Date/Time</span>
                        <span>Venue</span>
                        <span>Price</span>
                        <span>Reserved</span>
                        <span></span>
                    </div>

                    <div class="td">
                        <div class="img-hold">
                            <img src="https://i.pinimg.com/736x/2d/76/ad/2d76adea865722a8f1ddc25dd3d9a7a8.jpg" alt="event-image">
                        </div>
                        <span>Discover the Art of Modern Love</span>
                        <span>Sun, Feb 23 • 3:00 PM</span>
                        <span>Lagos Oriental Hotel</span>
                        <span>Free</span>
                        <span>100 / 100</span>

                        <span class="event-action">
                            <i class="bi bi-three-dots-vertical"></i>

                            <div class="action">
                                <span>Promote</span>
                                <span>Edit</span>
                                <span>Delete</span>
                            </div>

                        </span>

                    </div>

                </div>

            </section>

            <!--///////////////////////////////////////-->
            <!--///////////////////////////////////////-->

            <section class="ticket-section">

                <div class="tickets-holder">

                    <div class="tickets">
                        <img src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F789806809%2F558338266469%2F1%2Foriginal.20240614-154716?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=273%2C0%2C1680%2C840&s=88f2fcbc792c2fcf5c004f31b4898fb4">
                        <h2>The new water ru movement</h2>
                        <p>Saturday, February 22</p>
                        <p>Eko Convention Center</p>

                        <div class="icons">
                            <i class="bi bi-qr-code-scan"></i>
                            <i class="bi bi-download"></i>
                        </div>
                    </div>

                    <div class="tickets">
                        <img src="https://i.pinimg.com/736x/02/71/a1/0271a12c2b76ea037824a081f426c3f2.jpg">
                        <h2>The new water ru movement</h2>
                        <p>Saturday, February 22</p>
                        <p>Eko Convention Center</p>

                        <div class="icons">
                            <i class="bi bi-qr-code-scan"></i>
                            <i class="bi bi-download"></i>
                        </div>
                    </div>

                </div>

            </section>

            <!--///////////////////////////////////////-->
            <!--///////////////////////////////////////-->

            <section class="promo-section">

                <div class="tickets-holder">

                    <div class="tickets">
                        <img src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F789806809%2F558338266469%2F1%2Foriginal.20240614-154716?w=940&auto=format%2Ccompress&q=75&sharp=10&rect=273%2C0%2C1680%2C840&s=88f2fcbc792c2fcf5c004f31b4898fb4">
                        <h2>The new water ru movement</h2>
                        <p>Saturday, February 22</p>
                        <p>Eko Convention Center</p>

                        <div class="icons">
                            <i class="bi bi-megaphone"></i>
                            <i class="bi bi-trash3-fill"></i>
                        </div>
                    </div>

                    <div class="tickets">
                        <img src="https://i.pinimg.com/736x/02/71/a1/0271a12c2b76ea037824a081f426c3f2.jpg">
                        <h2>The new water ru movement</h2>
                        <p>Saturday, February 22</p>
                        <p>Eko Convention Center</p>

                        <div class="icons">
                            <i class="bi bi-megaphone"></i>
                            <i class="bi bi-trash3-fill"></i>
                        </div>
                    </div>

                </div>

            </section>
            <!--///////////////////////////////////////-->
            <!--///////////////////////////////////////-->

            <section class="setting-section">

                <div class="settings">

                    <div class="tab-control">
                        <div class="tabs open-profile active">Profile</div>
                        <div class="tabs open-billing">Billing</div>
                    </div>

                    <div style="display: flex" class="holder profile">
                        <div class="profile-detail">
                            <label>Full name</label>
                            <p>Marion Idebe</p>

                            <label>Email address</label>
                            <p>gphix2018@gmail.com</p>

                            <label>Country of registration</label>
                            <p>Nigeria</p>

                            <label>Currency</label>
                            <p>$</p>
                        </div>
                    </div>

                    <!--////////////////////////////////-->
                    <!--////////////////////////////////-->

                    <div class="holder billing">

                        <div class="form-control">
                            <p>Update your account information for withdrawals</p>

                            <label>Account Number</label>
                            <input type="text" name="Account-number" value="" placeholder="Account Number" required>

                            <label>Bank Name</label>
                            <input type="text" name="Bank-name" value="" placeholder="Bank Name" required>

                            <label>Account Name</label>
                            <input type="text" name="Account-name" value="" placeholder="Account Name" required>

                            <button>Update account</button>
                        </div>

                        <!--////////////////////////////////-->
                        <!--////////////////////////////////-->
                        <div class="account-details">
                            <h2>Active account details</h2>
                            <label>Account Number</label>
                            <p>8065086643</p>

                            <label>Bank Name</label>
                            <p>Opay digital service</p>

                            <label>Account Name</label>
                            <p>God'swill Tunde Idebe</p>
                        </div>

                    </div>

                </div>

            </section>

        </div>

    </div>

    <script>
        //// Side nav open and close//////////
        //// Side nav open and close//////////
        $(document).ready(function() {
            $(".logo").on("click", function() {
                if ($(window).width() > 800) { // Only execute if screen width is greater than 800px
                    let aside = $(".aside");
                    let logoinitial = $(".logo-initial");
                    let liname = $(".li-name");
                    let navholder = $("nav");
                    let currentWidth = aside.width(); // Get current width in pixels

                    if (currentWidth > 50) {
                        aside.css("width", "50px");
                        logoinitial.css("display", "none");
                        liname.css("display", "none");
                        navholder.css("padding-left", "0");
                    } else {
                        aside.css("width", "20%");
                        logoinitial.css("display", "inherit");
                        liname.css("display", "inherit");
                        navholder.css("padding-left", "30px");
                    }
                }
            });

            $(".nav-open").on('click', function() {
                let aside = $(".aside");
                aside.css({
                    "left": "0%",
                    "opacity": "1"
                });
            })

            $(".nav-close").on('click', function() {
                let aside = $(".aside");
                aside.css({
                    "left": "",
                    "opacity": "0"
                });
            })
            
            $(".open-in-app-msg").on('click', function() {
                $(".notify").fadeOut(0);
                let inappmsg = $(".in-app-msg");
                inappmsg.css({
                    "right": "0",
                    "opacity": "1"
                });
            })
            
            $(".close-in-app-msg").on('click', function() {
                let inappmsg = $(".in-app-msg");
                inappmsg.css({
                    "right": "",
                    "opacity": "0"
                });
            })
        });

        //// Li active fuction //////////////
        //// Li active fuction //////////////
        $(document).ready(function() {
            $(".menu-item").on("click", function() {
                $(".menu-item").removeClass("active"); // Remove from all
                $(this).addClass("active"); // Add to clicked one
            });
        });

        //// In app msg functions //////////////
        //// In app msg functions //////////////

        $(document).ready(function() {
            $(".close-msg").on("click", function() {
                $(".msg").fadeOut(); // Remove 
            });
        });

        //// Top Nav Functions //////////////
        //// Top Nav Functions //////////////
        $(document).ready(function() {
            $(".top-nav-item").on("click", function() {
                $(".top-nav-item").removeClass("active"); // Remove from all
                $(this).addClass("active"); // Add to clicked one
            });
        });

        //// Create event function //////////////
        //// Create event function //////////////
        $(".create-event").on('click', function() {
            $(".create_event").fadeIn();
        })

        //// Settings Nav function //////////////
        //// Settings Nav function //////////////
        $(".open-profile").on('click', function() {
            $(".profile").fadeIn(50);
            $(".billing").fadeOut(50);
            $(".tabs").removeClass("active"); // Remove from all
            $(this).addClass("active"); // Add to clicked one
        })

        $(".open-billing").on('click', function() {
            $(".billing").fadeIn(50);
            $(".profile").fadeOut(50);
            $(".tabs").removeClass("active"); // Remove from all
            $(this).addClass("active"); // Add to clicked one
            $(".holder:last-child").css({
                "display": "flex"
            })
        })

    </script>

</body>

</html>
