    <div class="ticket-summary">
        
        <i class="ticket-close fa fa-close"></i>
        
        <div class="holder">

            <figure>
                <span></span>
                <span></span>
            </figure>

            <div class="action">
                <a href=""><i class="fa fa-download"></i> </a>
            </div>

            <img class="ticket-img" src="https://i.pinimg.com/736x/02/71/a1/0271a12c2b76ea037824a081f426c3f2.jpg" alt="Event Img">

            <div class="ticket-details">
                <p><span>Location</span> isuti RD, Egan, Igando, Lagos Nigeria</p>
                <p><span>Date</span>14th Feb, 2025</p>
                <p><span>Time</span>10am GMT</p>
                <p><span>Seat</span>Regular</p>
            </div>

            <div class="qr-code">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=ticket%20info" alt="Ticket qr-code">

                <p>scan code for information, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>

            </div>

        </div>

    </div>

<script>
    $(".ticket-close").on('click', function(){
        $(".ticket-summary").fadeOut(50);
    })
</script>
