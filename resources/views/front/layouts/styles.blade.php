<!-- Stylesheets -->
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('justping-front/css/bootstrap.min.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('justping-front/css/animate.min.css') }}">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{{ asset('justping-front/css/font-awesome.min.css') }}">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{{ asset('justping-front/vendor/OwlCarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('justping-front/vendor/OwlCarousel/owl.theme.default.min.css') }}">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="{{ asset('justping-front/css/meanmenu.min.css') }}">
    <!-- Magnific CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('justping-front/css/magnific-popup.css') }}">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('justping-front/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('justping-front/css/card.css') }}">
    <link rel="stylesheet" href="{{ asset('justping-front/css/top-business.css') }}">
    <link rel="stylesheet" href="{{ asset('justping-front/css/leading-franchise.css') }}">
    <link rel="stylesheet" href="{{ asset('justping-front/css/top-dealership.css') }}">
    <link rel="stylesheet" href="{{ asset('justping-front/css/featured-franchise-opportunities.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('justping-front/css/style.css') }}">
    
@if(session('sess_lang_direction') == 'Right to Left (RTL)')
<link href="{{ asset('dist-front/css/rtl.css') }}" rel="stylesheet">
@endif
<style>
    .preloader:after {
        background-image: url({{ asset('uploads/'.$global_setting->favicon) }});
    }
    .dark-layout .preloader:after {
        background-image: url({{ asset('uploads/'.$global_setting->logo) }});
    }
      .whatsapp-float {
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 1000;
            background-color: #25d366;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .whatsapp-float:hover {
            background-color: #1ebc57;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .whatsapp-float img {
            width: 35px;
            height: 35px;
        }
               /* Popup Background */
        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        /* Popup Form Container */
        .popup-form {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 90%;
        }

        /* Form Styling */
        .popup-form h2 {
            margin: 0 0 15px;
            text-align: center;
        }

        .popup-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .popup-form input, .popup-form textarea, .popup-form button {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .popup-form button {
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 18px;
        }

        .popup-form button:hover {
            background-color: #0056b3;
        }
            /* Close button */
    #popupClose {
position: absolute;
    top: 15px;
    right: 10px;
    cursor: pointer;
    font-size: 35px;
    font-weight: bold;
    color: #000;
    }
</style>