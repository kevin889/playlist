<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Sil Westerveld">
    <!-- <link rel="icon" href="../../favicon.ico"> -->

    <title>Request a Song</title>

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
                    <h3 class="masthead-brand">PlayDeeze4.me</h3>
                    <nav>
                        <ul class="nav masthead-nav">
                            <li><a href="now.html">Playing</a></li>
                            <li class="active"><a href="#">Request</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="inner cover">
                <?= validation_errors(); ?>

                <form class="form-request" action="/request" method="POST">
                    <input type="hidden" name="track_id">
                    <h2 class="form-request-heading">Request Next</h2>
                    <label for="inputRequest" class="sr-only">Keyword</label>
                    <ul class="list-group resultSet">
                        <input type="request" id="searchDeeze" name="data" class="form-control list-group-item" placeholder="Song title or artist"
                               required autofocus>
                    </ul>

                    <button class="btn btn-lg btn-primary btn-block" id="send" disabled="disabled" type="submit">Send Request</button>

                </form>
            </div>

            <div class="mastfoot">
                <div class="inner">
                    <p>Carefully crafted by Kevin, Rick, Robin, and Sil.</p>
                </div>
            </div>

        </div>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
<script src="/assets/js/app.js"></script>

</body>
</html>




