<!DOCTYPE html>
<html lang="nl" class="no-js">
<head>
    <meta charset="utf-8">
    <title>Play Deeze For Me</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!--    <link rel='stylesheet' href='style.css'/>-->
</head>
<body>
<div id="player">
</div>
<div id="dz-root"></div>
<script src="http://cdn-files.deezer.com/js/min/dz.js"></script>
<script>

DZ.init({
        appId  : '180582',
        channelUrl : 'http://playdeeze4.me/channel.html',
        player: {
            container: 'player',
            width : 800,
            height : 300,
            onload : function(){

                console.log("DZ.init player.onload", arguments);

            }
        }
    });
DZ.ready(function(sdk_options){

    DZ.player.playPlaylist(1861142322);

});



</script>
<input type="button" onclick="DZ.login(function(response) {
    if (response.authResponse) {
        console.log('Welcome!  Fetching your information.... ');
        DZ.api('/user/me', function(response) {
            console.log('Good to see you, ' + response.name + '.');
        });
    } else {
        console.log('User cancelled login or did not fully authorize.');
    }
}, {perms: 'basic_access,email'});" value= "login"</input>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/assets/js/app.js"></script>
</body>