 <!-- jquery-->
    <script src="{{ asset('justping-front/js/jquery-3.2.1.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('justping-front/js/popper.js') }}"></script>
    <!-- Bootstrap js -->
    <!--<script src="{{ asset('justping-front/js/bootstrap.min.js') }}"></script>-->
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
    
     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="{{ asset('justping-front/js/form.js') }}"></script>
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
        function closeBanner() {
            document.getElementById("floatingBanner").style.display = "none";
        }
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

<script>
    $(document).ready(function () {
          var otpTimeTotal = 60;
        $(".sendOTPBtn").click(function(e) {
        e.preventDefault();
        var number = $('#inputPhone').val();
     // alert(number);
            if (number.length == 10) {
                sendOTP(number);
            } else {
                alert('Phone Number should be of 10 Digits');
            }
       
    });
        
    });
      let digitValidate = function(element, key) {
        element.value = element.value.replace(/[^0-9]/g, '');

        let ele = document.querySelectorAll('.otp-field');
        var charCode = event.keyCode || event.charCode;

        if (ele[key - 1].value != '') {
            if (key <= 4) {
                ele[key].focus();
            }
        } else if (ele[key - 1].value == '') {
            if (charCode == 8 || charCode == 46) {
                element.preventDefault();
                ele[key - 2].focus()
            } else {
                ele[key - 2].focus()
            }
        }
    }

      var otpTimeTotal = 60;
        let countdown = function() {
        if (otpTimeTotal == -1) {
            clearTimeout(window.timerId);
            $('.otpResendBlock').removeClass('d-none').addClass('d-block');
            $('.otpTimerBlock').removeClass('d-block').addClass('d-none');
        } else {
            valueCheck = (otpTimeTotal < 10) ? "0" + otpTimeTotal : otpTimeTotal;
            $('.otpTimerBlock').addClass('d-block').removeClass('d-none').html(
                `<strong>Resend OTP - <span class="text-danger">${valueCheck}s</span></strong>`
            );
            otpTimeTotal--;
            $('.otpResendBlock').removeClass('d-block').addClass('d-none');
        }
    }

  
  let sendOTP = function(number) {
        $.ajax({
            url: "{{ route('sign-in-new') }}",
            method: "post",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            data: {
                phone: number,
                'type': 'send'
            },
            beforeSend: function() {
                $('.errorMssg').html("");
                $(".sendOTPBtn").html('Please wait').attr('disabled', 'disabled');
            },
            success: function(response) {
                switch (response.status) {
                    case 201:
                        
                        $('.register-block').addClass('d-none');
                        $('.verification-block').removeClass('d-none').addClass('d-block');
                       
                        //$('.wait-block').removeClass('d-block').addClass('d-none');
                        window.timerId = setInterval(countdown, 1000);
                        // $('.mobileNumberOTP').html(
                        //     `<span style="color:#616161"><strong>OTP sent to</strong></span> <strong style="color:#000"> ${response.data.mobile}</strong>`
                        // );
                        $('.tempOTP').html((response.data.otp));
                        $(".resendOTPBtn").attr('data-mobile', response.data.mobile)
                        $(".verifyOTPBtn").attr('data-mobile', response.data.mobile)
                        //$('.title').html(`<h5 class="m-0">Verify ${phoneEmailTxt}</h5>`);
                       // $('.backModalBtn').css('visibility', 'visible');
                        break;

                    case 400:
                        $(".sendOTPBtn").html(
                            'GET OTP '
                        ).removeAttr('disabled');
                        $('.mobile-block').removeClass('d-none').addClass('d-block');
                        $('.verification-block').removeClass('d-block').addClass('d-none');
                        $('.tempOTP').html('');

                        $('#inputPhone').after(
                            `<small class="text-danger errorMssg">${response.data.phone}</small>`
                        )
                        $('.title').html(`<h5 class="m-0">Continue ${phoneEmailTxt}</h5>`);
                        $('.backModalBtn').css('visibility', 'hidden');
                        break;

                    default:
                        $(".sendOTPBtn").html(
                            'GET OTP '
                        ).removeAttr('disabled');
                        $('.mobile-block').removeClass('d-none').addClass('d-block');
                        $('.verification-block').removeClass('d-block').addClass('d-none');
                        $('.tempOTP').html('');
                        $('.title').html(`<h5 class="m-0">Continue ${phoneEmailTxt}</h5>`);
                        $('.backModalBtn').css('visibility', 'hidden');

                        alert(response.msg)
                        break;
                }
            },
            error: function(reject) {
                $(".sendOTPBtn").html(
                    'GET OTP '
                ).removeAttr('disabled');
                alert('Sorry, Something went wrong!');
            }
        });
    }
    
    
    
     $(".verifyOTPBtn").click(function(e) {
        e.preventDefault();
        var url_name = 'post-requirement';
        var otp = '';
        var mobile = $(this).data('mobile');
        alert(mobile);
        let ele = document.querySelectorAll('.otp-field');
        $.each(ele, function(key, val) {
            otp += val.value
        })

        $.ajax({
            url: "{{ route('sign-in-new') }}",
            method: "post",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            data: {
                phone: mobile,
                'otp': otp,
                'type': 'verify',
                'url': url_name
            },
            beforeSend: function() {
                $(".errorMssgOTP").html('');
                $(".verifyOTPBtn").html('Please wait').attr('disabled', 'disabled');
            },
            success: function(response) {
                switch (response.status) {
                    case 201:
                        $(".verifyOTPBtn").html('Verify OTP').removeAttr('disabled');
                        $('.errorOTPBlock').html(
                            `<small class="text-success errorMssgOTP">${response.data.msg}</small>`
                        );

                        setTimeout(() => {
                                location.href = response.data.url;
                           
                        }, 2000);
                        break;

                    case 400:
                        $(".verifyOTPBtn").html('Verify OTP').removeAttr('disabled');
                        $('.otp-fields').after(
                            `<small class="text-danger errorMssgOTP">${response.data.phone}</small>`
                        )
                        break;

                    default:
                        $(".verifyOTPBtn").html('Verify OTP').removeAttr('disabled');
                        alert('Sorry!, Something went wrong');
                        break;
                }
            },
            error: function(reject) {
                $(".verifyOTPBtn").html('Verify OTP').removeAttr('disabled');
                alert('Sorry, Something went wrong!');
            }
        })
    });
    </script>