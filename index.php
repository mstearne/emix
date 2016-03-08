<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>entermix development</title>
    <!-- Latest compiled and minified CSS & JS -->

    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" media="screen" href="css/bootstrap.css">
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<div class="jumbotron" style="background-color: white">
    <div class="container text-center">
        <p class="text-center"><img src="images/entermix-logo.png" alt=""><br>DEVELOPMENT</p>
    </div>
</div>

<div class="container-fluid">


    <div class="row" style="background-color: #F4F4F4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
            <div id="contactButton" class="text-uppercase" style="font-size: 1.7em;color:#999; ;"><span
                    class="glyphicon-envelope" style="font-size: 1.2em;"></span> Contact Us
            </div>

        </div>


    </div>

    <div class="row" style="background-image: url(images/back-l.jpg); background-repeat: no-repeat; background-attachment: fixed">

        <div class="col-md-8 col-lg-8">

        </div>

        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="background-color #E6E2F3;">
            <div id="contactForm" style="display: none">
                <iframe src="https://docs.google.com/forms/d/1_FF3axu3U3IglLYzko6wH7Kzfk8id4ns-LocX7fjP78/viewform?embedded=true" width="360" height="720" scrolling="no" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>                <div><br></div>

            </div>

        </div>


    </div>

<!--
    <div class="row" style="background-color: #232C51">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">

        </div>

        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">


            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Home</a>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>
            </nav>


        </div>


        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">

        </div>


    </div>
-->
    <div class="row" style="background-image: linear-gradient(to bottom,#232C51 0,#4C5373 100%);">
        <div class="col-md-2 col-lg-2">

        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
            <div class="panel-body">
                <p id="pd">Product Development </p>
                <p>iOS App Development </p>
                <p>WordPress Applications</p>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
            <div class="panel-body">
                <p>Web Application Development</p>
                <p>Search Engine Optimization</p>
                <p>Social Media Consulting</p>
            </div>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">

        </div>

    </div>


</div>

bs3-carosuel

<!---->
<!--<div id="slider" style="display: none">-->
<!---->
<!--    <p>This is the information that I am typing about.</p>-->
<!---->
<!---->
<!--</div>-->

<!--</div>-->


<script src="js/bootstrap.min.js"></script>

<script>

    $(document).ready(function () {


    });

    $("#contactButton").click(function () {

//        alert($("#contactButton").html());
        $("#contactForm").slideToggle();

    });
    $("#pd").click(function () {

//        alert($("#contactButton").html());
        $("#contactForm").slideToggle();

    });

</script>

</body>
</html>