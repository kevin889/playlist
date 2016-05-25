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
<?= form_hidden('track_id', '', array('id'=>'pok')); ?>

<?= form_input('data', '', array('id'=> 'searchDeeze'));?>

<?= form_submit('send', 'Send', array('id'=>'send', 'disabled'=>'disabled')); ?>

<?= form_close(); ?>

<div class="autoload">
    <ul>

    </ul>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/assets/js/app.js"></script>

</body>
</html>