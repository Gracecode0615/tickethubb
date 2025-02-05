<div class="create_event">

    <div class="overlay close-create"></div>

    <form class="holder">
        <h2>Select Plan</h2>
        <p>Answer a few questions about your event and our AI creation tool will use internal data to build an event page</p>

        <div style="display: none" class="plan">

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

                    <button type="button">Create event</button>
                </div>

            </div>

            <div class="event_type">
                <div class="plan">
                    <input type="radio" class="radio" name="Plan" value="Paid" required>
                    <p>Standard event<br><span>For paid events</span> </p>
                </div>

                <div class="price">
                    <p>Tickets <br><span>Paid Reservations</span></p>
                </div>

                <div class="event-details">
                    <li>Physical / Online event</li>
                    <li>Ticket qr-code</li>
                    <li>Payment gateway</li>

                    <button type="button">Create event</button>
                </div>

            </div>

        </div>

        <div style="display: none" class="title event-q">
            <input type="text" name="Title" placeholder="Event title" required>
            <button class="btn-nxt">Next</button>
        </div>

        <div style="display: none" class="date event-q">
            <label>Event Date</label>
            <input type="date" name="Date" required>

            <label>Start Time</label>
            <input type="time" name="Start-time" required>

            <label>End Time</label>
            <input type="time" name="End-time" required>

            <button class="btn-nxt">Next</button>
        </div>

        <div style="display: none" class="location event-q">

            <div class="location-tab">
                <button class="venue" type="button">Venue</button>
                <button class="Link" type="button">Online</button>
                <button type="button">To be Announced</button>
            </div>

            <label>Event Venue</label>
            <input type="text" class="place" name="Place" placeholder="Enter event location" required>

            <button class="btn-nxt">Next</button>
        </div>

        <div style="display: " class="price event-q">

            <label>Event Price</label>
            <div class="price-control">
                <span>$</span>
                <input type="text" name="Place" placeholder="0.00" required>
            </div>

            <button class="btn-nxt">Create Event</button>
        </div>

    </form>

</div>

<script>
    $(".close-create").on('click', function() {
        $(".create_event").fadeOut();
    })

</script>
