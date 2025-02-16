<div class="mobile-menu">
    
    <ul class="mobile-menu-holder">
        <div class="mobile-menu-overlay"></div>
        <li class="mobile-li active"><a href= ""><i class="fa fa-home"></i> </a></li>
        <li class="mobile-li"><i class="fa fa-ticket"></i> </li>
        <li class="mobile-li"><i class="fa fa-heart"></i> </li>
    </ul>
</div>

<script>
     $(document).ready(function() {
            $(".mobile-li").on("click", function() {
                $(".mobile-li").removeClass("active"); // Remove from all
                $(this).addClass("active"); // Add to clicked one
            });
         
         $(".mobile-menu-overlay").on("click", function() {
                $(".mobile-menu-overlay").fadeOut(0);
             
                $(".mobile-menu-holder").css({
                    "width": "100%",
                    "transform-origin": "left"
                });
             
                $(".mobile-menu").css({
                    "width": "100%"
                });
            });
         
         
          // Detect clicks outside the .mobile-menu and reverse the changes
        $(document).on("click", function (event) {
            if (!$(event.target).closest(".mobile-menu").length) {
                $(".mobile-menu-overlay").fadeIn(0); // Show overlay again

                $(".mobile-menu-holder").css({
                    "width": "70px",
                    "transform-origin": "left"
                });

                $(".mobile-menu").css({
                    "width": "fit-content"
                });
            }
        });
         
         
         
         
         
         
         
        });
</script>
