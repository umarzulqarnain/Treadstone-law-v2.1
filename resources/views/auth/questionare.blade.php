<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">



    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">


    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/css/intlTelInput.css" rel="stylesheet" media="all">



    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">

    <style>
        body{

            overflow: hidden;
        }

        @media (max-width: 991px) {


            body{

                overflow-x:hidden;
                overflow-y:auto;
            }

        }
    </style>

</head>

<body class="animsition">




<div class="row">


    <div class="col-12 col-lg-8"  style="background: #f5f7fc57;">

        <div class="card" style="border: 1px solid #fff ; height: 100vh;">

            <div class="card-body card-block three-card" >




                <div class="row">
                    <div class="col-12">
                        <img class="treadstone-logo" src="images/icon/logo.png" alt="Cool Admin">
                    </div>
                </div>
                <br>
                <br>
                <br>

                <div class="row form-group">



                    <div class="col-12 col-md-12">
                        <br>
                        <label  class=" form-control-label question-q">How many people are on title for systems auto-inserts property address?</label>

                        <p>01 First step you should answer the question</p>
                    </div>

                    <div class="col-12 col-md-12">
                        <br>
                        <input  style="padding: 12px" type="text" class="form-control treadstone-input"  value="question answer">
                    </div>




                    <div class="col-12 col-md-3">
                        <br>
                        <button  style="background-color: #121f3e;" type="submit" class="au-btn au-btn-icon au-btn--blue au-btn--small long-grey-button">
                            Back
                        </button>
                    </div>
                    <div class="col-12 col-md-5">

                    </div>


                    <div class="col-12 col-md-4">
                        <br>
                        <button type="submit" class="au-btn au-btn-icon au-btn--blue au-btn--small long-grey-button">
                            Continue and register
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-4  info-side" style="background-color: #fff">

        <div class="container" style="width: 71%;position: absolute;left: 50%;top: 50%;transform: translate(-50%, -50%);">
            <div class="row ">

                <div class="col-md-12">

                    <a  style="color: black ; font-weight: 600" class="side-link" href="#">

                        <i style="color: #2eb62e; float: left ; font-size: 22px; padding-right: 10px" class="fas fa-check-circle"></i>

                        First Question
                    </a>

                    <br>
                    <br>
                    <a  style="color: black ; font-weight: 600" class="side-link" href="#">

                        <i style="color: #2eb62e; float: left ; font-size: 22px; padding-right: 10px" class="fas fa-check-circle"></i>

                        Second Question
                    </a>
                    <br>
                    <br>

                    <a  style="color: black ; font-weight: 600" class="side-link" href="#">

                        <i style="color: #cccc; float: left ; font-size: 22px; padding-right: 10px" class="fas fa-check-circle"></i>

                        Register
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>





<!-- Jquery JS-->
<script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap JS-->
<script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>

<!-- Vendor JS       -->
<script src="{{ asset('vendor/slick/slick.min.js') }}"></script>
<script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>


<!-- Main JS-->
<script src="{{ asset('js/main.js') }}"></script>


<!-- Phone Input-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.7/js/intlTelInput.js"></script>

<script>

    $(".phone-input").intlTelInput({
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
    });
</script>

</body>

</html>
<!-- end document-->