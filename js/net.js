 function checkInternetConnection() {
     // Function to verify if data is actually being transferred
     async function isDataAvailable() {
         try {
             const response = await fetch("https://www.google.com/favicon.ico", {
                 mode: 'no-cors'
             });
             return true; // If fetch works, data is available
         } catch (error) {
             return false; // Fetch failed, meaning no data flow
         }
     }

     function handleConnectionChange() {
         if (!navigator.onLine) {
             $(".msg").fadeIn(0);
             $("#error-t").html("Connection");
             $("#error-p").html("Internet connection lost!");
         } else {
             isDataAvailable().then((hasData) => {
                 if (!hasData) {
                     $(".msg").fadeIn(0);
                     $("#error-t").html("Network");
                     $("#error-p").text("No internet data available!");
                 }
             });
         }
     }

     // Listen for online/offline events
     window.addEventListener('online', handleConnectionChange);
     window.addEventListener('offline', handleConnectionChange);

     // Periodically check every 10 seconds
     setInterval(handleConnectionChange, 5000);
 }

 // Start checking connection
 checkInternetConnection();
