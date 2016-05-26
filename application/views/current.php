<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Sil Westerveld">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>Now Playing</title>

    <script type="text/javascript" src="../../assets/js/script.js"></script>

    <!-- Bootstrap core CSS -->
    <!--<link href="../../dist/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="../../assets/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../assets/css/custom.css" rel="stylesheet">

</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 class="masthead-brand"><img src="../../assets/img/logo.png" alt="Play Deeze For Me"/></h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li class="active"><a href="/current">Playing</a></li>
                            <li><a href="/">Request</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="row inner cover current">
                <div class="col-xs-12 col-md-8 current-wrapper">
                    <img id="nowPlaying" class="img-responsive" src="../../assets/images/placeholders/picture_big.jpg">
                    <div class="carousel-caption">
                        <h2 class="current-artist">Don't let me down</h2>
                        <h3 class="current-artist">The Chainsmokers</h3>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <h1>Up Next</h1>
                    <ol class="playlist">
                        <li>Four five seconds (Kanye West)</li>
                        <li>I'm on top of the world (Imagine Dragons)</li>
                        <li>Hello (Adele)</li>
                    </ol>
                </div>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>Carefully crafted by Kevin, Rick, Robin, and Sil.</p>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</body>
</html>
