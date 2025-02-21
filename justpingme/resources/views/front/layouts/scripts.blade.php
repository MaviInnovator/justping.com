 <!-- jquery-->
    <script src="{{ asset('justping-front/js/jquery-3.2.1.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('justping-front/js/popper.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="j{{ asset('justping-front/js/bootstrap.min.js') }}"></script>
    <!-- Owl Cauosel JS -->
    <script src="{{ asset('justping-front/vendor/OwlCarousel/owl.carousel.min.js') }}"></script>
    <!-- Meanmenu Js -->
    <script src="{{ asset('justping-front/js/jquery.meanmenu.min.js') }}"></script>
    <!-- Srollup js -->
    <script src="{{ asset('justping-front/js/jquery.scrollUp.min.js') }}"></script>
    <!-- jquery.counterup js -->
    <script src="{{ asset('justping-front/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('justping-front/js/waypoints.min.js') }}"></script>
    <!-- Select2 Js -->
    <script src="{{ asset('justping-front/js/select2.min.js') }}"></script>
    <!-- Isotope js -->
    <script src="{{ asset('justping-front/js/isotope.pkgd.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('justping-front/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Custom Js -->
    <script src="{{ asset('justping-front/js/main.js') }}"></script>
  <!-- Bootstrap JS (with Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
function fetchArea() {
    let input = document.getElementById("location").value;
    if (input.length >= 2) { // Fetch after 3 characters
        fetch("search.php?q=" + input)
        .then(response => response.json())
        .then(data => {
            let suggestionBox = document.getElementById("suggestions");
            suggestionBox.innerHTML = "";
            if (data.length > 0) {
                data.forEach(item => {
                    let div = document.createElement("div");
                    div.innerText = item.pincode + " - " + item.location;
                    div.onclick = function () {
                        document.getElementById("location").value = item.location;
                        suggestionBox.innerHTML = "";
                    };
                    suggestionBox.appendChild(div);
                });
            } else {
                suggestionBox.innerHTML = "<div>No results found</div>";
            }
        })
        .catch(error => console.error("Error fetching data:", error));
    }
}
</script>
<script>
        window.onload = function() {
            requestLocation();
        };

        function requestLocation() {
            if ("geolocation" in navigator) {
                navigator.geolocation.getCurrentPosition(
                    (position) => {
                        let latitude = position.coords.latitude;
                        let longitude = position.coords.longitude;

                        // Call Reverse Geocoding API to get location details
                        getAreaDetails(latitude, longitude);
                    },
                    (error) => {
                        switch(error.code) {
                            case error.PERMISSION_DENIED:
                                alert("User denied the request for Geolocation.");
                                break;
                            case error.POSITION_UNAVAILABLE:
                                alert("Location information is unavailable.");
                                break;
                            case error.TIMEOUT:
                                alert("The request to get user location timed out.");
                                break;
                            case error.UNKNOWN_ERROR:
                                alert("An unknown error occurred.");
                                break;
                        }
                    }
                );
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function getAreaDetails(lat, lon) {
            // Using OpenStreetMap (Nominatim) API for Reverse Geocoding
            let apiURL = `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`;

            fetch(apiURL)
                .then(response => response.json())
                .then(data => {
                    if (data.address) {
                        let area = `${data.address.city || data.address.town || data.address.village}, 
                                    ${data.address.state}, 
                                    ${data.address.country}`;

                       // alert(`Your Location: \nLatitude: ${lat} \nLongitude: ${lon} \nArea: ${area}`);
                    } else {
                       // alert("Location details not found.");
                    }
                })
                .catch(error => console.error("Error fetching area details:", error));
        }
    </script>
     <script>
       function shouldShowModal() {
        const modalClosedTimestamp = localStorage.getItem('popupClose');
        if (!modalClosedTimestamp) return true;

        const now = new Date();
        const lastClosed = new Date(parseInt(modalClosedTimestamp, 10));

        // Check if the modal was closed on a previous day
        return now.toDateString() !== lastClosed.toDateString();
      }
        let generatedOTP;

// Check if modal was shown today
      /*  function shouldShowModal() {
            const lastShown = localStorage.getItem("modalLastShown");
            const today = new Date().toDateString();

            return lastShown !== today; // Show modal only if it hasn't been shown today
        }

        // Show modal after 5 seconds (only once per day)
        setTimeout(() => {
            if (shouldShowModal()) {
                document.getElementById("loginModal").style.display = "block";
                localStorage.setItem("modalLastShown", new Date().toDateString()); // Save today's date
            }
        }, 5000);

*/
        // Show modal after 5 seconds
        setTimeout(() => {
            document.getElementById("loginModal").style.display = "block";
        }, 5000);

        // Close modal
        function closeModal() {
            document.getElementById("loginModal").style.display = "none";
        }

        // Function to send OTP
        function sendOTP() {
            let phone = document.getElementById("phoneNumber").value;
            let termsChecked = document.getElementById("termsCheckbox").checked;
            if (phone.length !== 10 || isNaN(phone)) {
                alert("Please enter a valid 10-digit phone number.");
                return;
            }
            if (!termsChecked) {
                alert("⚠️ You must accept the Terms & Conditions to proceed.");
                return;
            }
            generatedOTP = Math.floor(100000 + Math.random() * 900000); // Generate 6-digit OTP
            alert("Your OTP is: " + generatedOTP); // Simulating SMS

            document.querySelector(".loginSection").style.display = "none";
            document.querySelector(".close-btn1").style.display = "none";
            document.getElementById("otpSection").style.display = "block";
            
            
            document.querySelector(".verify-otp-btn").style.display = "inline-block";
        }

        // Function to verify OTP
        function verifyOTP() {
            let enteredOTP = document.getElementById("otpInput").value;
            if (enteredOTP == generatedOTP) {
                alert("Login successful!");
                closeModal();
            } else {
                alert("Invalid OTP. Please try again.");
            }
        }
            function closeBanner() {
            document.getElementById("floatingBanner").style.display = "none";
        }
    </script>
  <script>
        $(document).ready(function () {
            $("#openModal").click(function () {
                $("#loginModal").fadeIn(); // Show the modal
            });

            $(".close, #loginModal").click(function (event) {
                if (event.target === this) {
                    $("#loginModal").fadeOut(); // Hide the modal
                }
            });
        });
    </script>



@if($global_setting->google_recaptcha_status == 'Show')
<script src='https://www.google.com/recaptcha/api.js'></script>
@endif

 <script>
    $(document).ready(function () {
      //localStorage.removeItem('popupClose');
        // Function to check if the modal should be displayed
      function shouldShowModal() {
        const modalClosedTimestamp = localStorage.getItem('popupClose');
        if (!modalClosedTimestamp) return true;

        const now = new Date();
        const lastClosed = new Date(parseInt(modalClosedTimestamp, 10));

        // Check if the modal was closed on a previous day
        return now.toDateString() !== lastClosed.toDateString();
      }
         // Show the modal if it hasn't been shown today
      if (shouldShowModal()) {
        setTimeout(function () {
         $('#popupOverlay').show();
        }, 10000);
      }

      // Check if the modal has been shown before using localStorage
      if (!localStorage.getItem('popupClose')) {
        // Show the modal after 10 seconds
        setTimeout(function () {
               $('#popupOverlay').show();
          $('#popupForm').addClass('active');
          $('#popupOverlay').addClass('active');
        }, 10000);
      }

   
      
      // Close the modal and store the current timestamp
      $('#popupClose').click(function () {
        // Save the timestamp when the modal is closed
        localStorage.setItem('popupClose', Date.now());
      });
    });
  </script>

<script>
    $(document).ready(function () {
          // Close popup
      $("#popupClose").click(function () {
         // alert('hello');
        $("#popupOverlay").fadeOut();
      });
      
      
        $('#consultForm').on('submit', function (e) {
            e.preventDefault(); // Prevent default form submission
            
            // Serialize form data
            let formData = $(this).serialize();

    var $submitButton = $('#consultBtn');
    $submitButton.prop('disabled', true); // Disable the submit button
            $.ajax({
                url: "{{ route('submit.form') }}", // Laravel route
                method: "POST",
                data: formData,
                success: function (response) {
                    $('#responseMessage').text(response.success);
                
                // Optionally, hide the message after some time
                setTimeout(function () {
                    $("#responseMessage").fadeOut();
                }, 10000); // 20 seconds
                
                
                  // Clear the form
                $("#consultForm")[0].reset();

                // Show success message
               // $("#responseMessage").fadeIn();

                // Close popup after 10 seconds
                setTimeout(function () {
                    $("#popupOverlay").fadeOut();
                    $("#responseMessage").fadeOut();
                }, 10000); // 10 seconds
                
                },
                error: function (xhr) {
                    // Handle validation errors
                    let errors = xhr.responseJSON.errors;
                    let errorMessage = 'Something went wrong';
                    for (let field in errors) {
                        errorMessage += errors[field][0] + '\n';
                    }
                    alert(errorMessage);
                }
            });
        });
    });
</script>
