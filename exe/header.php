<div class="header">

    <div class="create">
        <i class="fa fa-plus"></i>
        <p>Create Event</p>
    </div>

    <div class="right-side-nav">

        <ul class="top-nav">
            
            <i class="bi bi-x-lg close-li"></i>

            <li><a href="index.php">Home</a></li>


            <li><a href="events.php">Events</a></li>


            <li><a href="login.php">Track my ticket</a></li>

        </ul>

        <div class="user">
            <i class="fa fa-user"></i>
            <div class="drop-down">
                <li><i class="bi bi-calendar4-week"></i> My Events </li>
                <li><i class="bi bi-archive"></i> My Archive </li>
                <li><i class="bi bi-gear"></i> Settings </li>
                <li><i class="bi bi-box-arrow-right"></i> Logout</li>
            </div>
        </div>
        
    </div>
    
    <i class="bi bi-list menu-li"></i>
    
</div>

<?php include 'create-event.php'; ?>


<script>
    $(".menu-li").on('click', function() {
        $(".right-side-nav").css({
            "right": "0",
            "opacity": "1"
        })
    })
    
    $(".close-li").on('click', function() {
        $(".right-side-nav").css({
            "right": "-100%",
            "opacity": "0",
            "z-index": "0"
        })
    })
    
    //////////////////////////////////
    //////////////////////////////////
    $(".create").on('click', function() {
        $(".create_event").fadeIn();
    })
</script>
