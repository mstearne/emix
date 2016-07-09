<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nodejs Development NYC, PHP Laravel Development NYC Javascript Development NYC | entermix development</title>
    <!-- Latest compiled and minified CSS & JS -->

    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" media="screen" href="css/bootstrap.css">
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>
</head>
<body>


<div class="jumbotron" style="background-color: white">
    <div class="container text-center">
        <p class="text-center"><a href="index.php"><img src="images/entermix-logo.png" alt=""></a><br>DEVELOPMENT</p>
    </div>
</div>

<div class="container-fluid">


    <div class="row" style="background-color: #F4F4F4">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right" id="contactDiv">
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
                <iframe
                    src="https://docs.google.com/forms/d/1_FF3axu3U3IglLYzko6wH7Kzfk8id4ns-LocX7fjP78/viewform?embedded=true"
                    width="360" height="720" scrolling="no" frameborder="0" marginheight="0" marginwidth="0">Loading...
                </iframe>
                <div><br></div>

            </div>

        </div>


    </div>


    <div class="row" style="background-image: linear-gradient(to bottom,#232C51 0,#4C5373 100%);">
        <div class="col-md-2 col-lg-2">

        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
            <div class="panel-body">
                <p id="pd">Product Development </p>
                <p>iPhone App Development </p>
                <p>Custom WordPress Development</p>
                <p>Google Tag Manager Integration</p>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
            <div class="panel-body">
                <p>Web Application Development</p>
                <p>Search Engine Optimization</p>
                <p><a href="squarespace-integration.php">Squarespace Custom Integration</a></p>
            </div>
        </div>
        <div class="col-md-2 col-lg-2">

        </div>

    </div>

    <div class="row">

        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="images/carousel/s1.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h2>Website and Custom Development</h2>
                            <p>Custom development of websites and mobile applications</p>
                            <!--                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="images/carousel/s2.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h2>WordPress Development</h2>
                            <p>Custom large scale and specialized WordPress development.</p>
                            <!--                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>-->
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="images/carousel/s3.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h2>Squarespace Custom Integration</h2>
                            <p>Add custom Squarespace features in PHP, Javascript, Node and more.</p>
                                                    <p><a class="btn btn-lg btn-primary" href="squarespace-integration.php" role="button">Lear more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /.carousel -->

    </div>
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="background-color: #B6B27B">

            <h3 id="contactButton2" style="color: white; cursor: pointer">Contact Us Today</h3>
        </div>


    </div>
</div>


<footer class="text-center" style="padding-top: 50px; padding-bottom: 10px;">
    &copy; <?php echo date("Y"); ?> Entermix Development, LLC

</footer>
<script>

    $(document).ready(function () {


    });

    $("#contactButton").click(function () {

//        alert($("#contactButton").html());
        $("#contactForm").slideToggle();

    });
    $("#contactButton2").click(function () {

//        alert($("#contactButton").html());
        $("#contactForm").slideToggle();

    });

</script>

</body>
</html>
