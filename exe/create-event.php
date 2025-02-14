<div class="create_event">

    <div class="overlay close-create"></div>
    
    

    <form class="holder">
        
        <i class="bi bi-x-lg close-create"></i>

        <div style="display: none" class="plan event-q">

            <h2>Select Plan</h2>
            
            <p>Answer a few questions about your event and our AI creation tool will use internal data to build an event page</p>

            <div class="event_type">

                <div class="plan">
                    <input type="radio" class="radio" name="Plan" value="Free" required>
                    <p>Free event<br><span>For free events</span> </p>
                </div>

                <div class="price">
                    <p>Tickets <br><span>Free Reservations</span></p>
                </div>

                <div class="event-details">
                    <li>Physical / Online event</li>
                    <li>Ticket qr-code</li>
                    <li>No payment gateway</li>
                    <button class="nxt" type="button">Create event</button>
                </div>

            </div>

            <div class="event_type">
                <div class="plan">
                    <input type="radio" class="radio radio2" name="Plan" value="Paid" required>
                    <p>Standard event<br><span>For paid events</span> </p>
                </div>

                <div class="price">
                    <p>Tickets <br><span>Paid Reservations</span></p>
                </div>

                <div class="event-details">
                    <li>Physical / Online event</li>
                    <li>Ticket qr-code</li>
                    <li>Payment gateway</li>

                    <button class="nxt plan-btn" type="button">Create event</button>
                </div>

            </div>
            
            <input type="hidden" name="Event-type" id="event-type" required>

        </div>

        <div style="display: none" class="title event-q">

            <h2>What’s the name of your event?</h2>

            <p>This will be your event’s title. Your title will be used to help create your event’s summary – so be specific! </p>

            <input type="text" name="Title" id="event-title" placeholder="Event title" required>

            <div class="action">
                <button type="button" class="btn-nxt prev"><i class="bi bi-chevron-left"></i></button>
                <button class="btn-nxt nxt">Next</button>
            </div>

        </div>
        
        <div style="display: none" class="date event-q">

            <h2>Event date & Time</h2>
            <p>When does your event start and end?</p>

            <label>Event Date</label>
            <input type="date" id="event-date" value="" name="Date" required>

            <div class="time-hold">
                <div class="time-control">
                    <label for="start-time">Start Time:</label>
                    <input type="time" min="" id="start-time" value="" name="Start-time" required>
                    <span id="start-time-display"></span>
                </div>

                <div class="time-control">
                    <label for="end-time">End Time:</label>
                    <input type="time" id="end-time" name="End-time" value="" required>
                    <span id="end-time-display"></span>
                </div>
            </div>


            <div class="action">
                <button type="button" id="start-time" class="btn-nxt prev"><i class="bi bi-chevron-left"></i></button>
                <button class="btn-nxt nxt">Next</button>
            </div>
        </div>
        
        <div style="display: none" class="location event-q">

            <div class="location-tab">
                <button class="venue" type="button">Venue</button>
                <button class="link" type="button">Online</button>
                <button class="private" type="button">To be Announced</button>
            </div>

            <label>Event Location Name</label>
            <input type="text" id="event-place" class="place" name="Place-name" placeholder="Enter event name of location" required>
            
            <label>Event Venue</label>
            <input type="text" id="event-location" class="place" name="Place" placeholder="Enter event location" required>

            <div class="action">
                <button type="button" id="start-time" class="btn-nxt prev"><i class="bi bi-chevron-left"></i></button>
                <button class="btn-nxt nxt">Next</button>
            </div>
        </div>

        <div style="display: none" class="price event-q">
            
            <h2>How much do you want to charge for tickets ?</h2>
            
            <p>Our tool can only generate one General Admission ticket for now. You can edit and add more ticket types later.</p>
            
            <label>Event Price</label>
            <div class="price-control">
                <span>$</span>
                <input type="text" autocomplete="off" id="ticket-amount" name="Price" placeholder="0.00" required>
            </div>

            <div class="action">
                <button type="button" id="start-time" class="btn-nxt prev"><i class="bi bi-chevron-left"></i></button>
                <button class="btn-nxt price-nxt-btn">Next</button>
            </div>
        </div>
        
        <div style="display: none" class="price event-q">
            
            <h2>Event total capacity ?</h2>
            <p>Event capacity is the total number of tickets you're willing to sell..</p>
            
            <label>Total capacity</label>
            
                <input type="text" autocomplete="off" id="capacity" name="Capacity" placeholder="00" required>

            <div class="action">
                <button type="button" id="start-time" class="btn-nxt prev"><i class="bi bi-chevron-left"></i></button>
                <button type="button" class="btn-nxt create-ticket">Create</button>
            </div>
        </div>

        <div class="e-success">
            <i class="bi bi-calendar-check"></i>
            <h2>Event Successfull</h2>
            <p>Event has been successfully created, login dashboard to edit or promote event.</p>
            
            <a href="login"> <button type="button">Manage event</button></a>
        </div>

    </form>

</div>

<script>
    $(document).ready(function() {
        let divs = $(".event-q");
        let index = 0;

        function showDiv(newIndex) {
            divs.eq(index).fadeOut(500, function() {
                index = newIndex;
                divs.eq(index).fadeIn(500);
            });
        }

        // Show first div initially
        divs.eq(index).show();

        // "Next" button click
        $(".nxt").click(function() {
            let newIndex = (index + 1) % divs.length;
            showDiv(newIndex);
            $(".nxt").fadeOut();
        });
        
        // "Next" button click
        $(".price-nxt-btn").click(function() {
            let newIndex = (index + 1) % divs.length;
            showDiv(newIndex);
            $(".nxt").fadeOut();
        });

        // "Previous" button click
        $(".prev").click(function() {
            let newIndex = (index - 1 + divs.length) % divs.length;
            showDiv(newIndex);
        });
    });

</script>

<script>
    //// Event Creation Navigation ////////
    //// Event Creation Navigation ////////
    $(".radio").on('change', function() {
        const radio = document.getElementsByClassName("radio")[0].value;
        if (radio == "Free") {
            document.getElementById("event-type").value = radio;
            $("#ticket-amount").prop("readonly",true);
            $("#ticket-amount").val("Free");
            $(".nxt").fadeIn();
            $(".price-nxt-btn").fadeIn();
        } else {
            alert("Please choose an event plan");
            $(".nxt").fadeOut();
            $(".price-nxt-btn").fadeOut();
        }
    })

    $(".radio2").on('change', function() {
        const radio2 = document.getElementsByClassName("radio2")[0].value;
        if (radio2 == "Paid") {
            document.getElementById("event-type").value = radio2;
            $("#ticket-amount").prop("readonly",false);
            $("#ticket-amount").val("");
            $(".nxt").fadeIn();
            $(".price-nxt-btn").fadeIn();
        } else {
            alert("Please choose an event plan");
            $(".nxt").fadeOut();
            $(".price-nxt-btn").fadeOut();
        }

    })

    $("#event-title").on('input', function() {
        const eventTitle = document.getElementById("event-title").value;
        if (eventTitle.length > 10) {
            $(".nxt").fadeIn();
        } else {
            $(".nxt").fadeOut();
        }

    })

    $("#event-date").on('input', function() {
        const eventDate = document.getElementById("event-date").value;
        if (eventDate == "") {
            $(".nxt").fadeOut();
        } else {
            $(".nxt").fadeIn();
        }

    })

    $(".venue").on('click', function() {
        $('#event-location').attr('placeholder','Enter venue address');
    })
    
    $(".link").on('click', function() {
        $('#event-location').attr('placeholder','Enter event link');
    })
    
    $(".private").on('click', function() {
        $('#event-location').val("Will be announced");
        $(".nxt").fadeIn();
    })
    
    $("#event-location").on('input', function() {
        const eventLocation = document.getElementById("event-location").value;
        const eventPlace = document.getElementById("event-place").value;
        if(eventLocation == "" || eventPlace == ""){
            $(".nxt").fadeOut();
        }else{
            $(".nxt").fadeIn();
        }
    })
    
    $(".create-ticket").on('click', function() {
        $(".e-success").fadeIn(50)
        $(".event-q").fadeOut(0)
    })


    /////////////////////////////////////////////
    /////////////////////////////////////////////

    $(".close-create").on('click', function() {
        $(".create_event").fadeOut();
    })

    /////////////////////////////////////////////
    //////Default Date Settings /////////////////
    document.addEventListener("DOMContentLoaded", function() {
        let today = new Date().toISOString().split("T")[0]; // Get today's date in YYYY-MM-DD format
        let dateInput = document.getElementById("event-date");

        dateInput.value = today; // Set default value to today
        dateInput.min = today; // Prevent selecting past dates
    });

    /////////////////////////////////////////////
    //////Default Time Settings /////////////////
    document.addEventListener("DOMContentLoaded", function() {
        function formatTime12Hour(timeStr) {
            let [hours, minutes] = timeStr.split(":").map(Number);
            let ampm = hours >= 12 ? "PM" : "AM";
            hours = hours % 12 || 12; // Convert 0 to 12 for 12-hour format
            return `${hours}:${minutes.toString().padStart(2, "0")} ${ampm}`;
        }

        function updateDisplay(inputId, displayId) {
            let timeValue = document.getElementById(inputId).value;
            document.getElementById(displayId).textContent = timeValue ?
                formatTime12Hour(timeValue) :
                "0.00";
        }

        function setDefaultTimes() {
            let now = new Date();
            now.setMinutes(0, 0, 0); // Round to the nearest hour

            let startTime = now.toTimeString().slice(0, 5);
            document.getElementById("start-time").value = startTime;
            updateDisplay("start-time", "start-time-display");

            now.setHours(now.getHours() + 1); // Add 1 hour for end time
            let endTime = now.toTimeString().slice(0, 5);
            document.getElementById("end-time").value = endTime;
            updateDisplay("end-time", "end-time-display");
        }

        // Set default times on page load
        setDefaultTimes();

        // Update the display when the user changes the input time
        document.getElementById("start-time").addEventListener("input", function() {
            updateDisplay("start-time", "start-time-display");
        });

        document.getElementById("end-time").addEventListener("input", function() {
            updateDisplay("end-time", "end-time-display");
        });
    });

</script>
