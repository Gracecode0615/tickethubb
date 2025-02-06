<div class="header">

    <div class="create"><i class="fa fa-plus"></i>
        <p>Create Event</p>
    </div>

    <div class="right-side-nav">

        <ul class="top-nav">

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

</div>

<?php include 'create-event.php'; ?>


<script>
    $(".create").on('click', function() {
        $(".create_event").fadeIn();
    })

</script>
