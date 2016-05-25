<!DOCTYPE html>
<html lang="nl" class="no-js">
<head>
    <meta charset="utf-8">
    <title>Play Deeze For Me</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!--    <link rel='stylesheet' href='style.css'/>-->
</head>
<body>

<?= validation_errors(); ?>

<?= form_open('request'); ?>

<?= form_input('data');?>

<?= form_submit('send', 'Send'); ?>

<?= form_close(); ?>

<div id="dz-root"></div>
<script src="http://cdn-files.deezer.com/js/min/dz.js"></script>
<script>
    DZ.api('/search/track/bad', function(response){
        console.log("Name of user id 5", response.title);
    });
</script>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</body>
</html>