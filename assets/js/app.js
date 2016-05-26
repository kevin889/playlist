$(document).ready(function () {
    $("#searchDeeze").keyup(function () {
        $("#send").attr("disabled", "disabled");
        $("#send").fadeOut();

        $.post("/API/search", {data: $(this).val()}, function (data) {
            $(".result").remove();
            for (var key in data) {
                if (data.hasOwnProperty(key)) {
                    $(".resultSet").append('<a href="#" id="'+data[key]['id']+'" class="list-group-item result">'+data[key]['title']+' - '+data[key]['artist']['name']+'</a>');
                    // $(".autoload ul").append("<li id='" + data[key]['id'] + "' class='suggest'>" + data[key]['title'] + " - " + data[key]['artist']['name'] + "</li>");
                }
            }
        }, "json");
    });

    $(".resultSet").on("click", ".result", function (event) {
        var id = $(this).attr("id");
        var text = $(this).text();
        $("#searchDeeze").val(text);
        $(".result").remove();
        $("input[name=track_id]").val(id);
        $("#send").removeAttr("disabled");
        $("#send").fadeIn();

    });

    DZ.Event.subscribe('current_track', function(track, evt){
       //console.log(track);
        $.get("/API/getQueue", function(data){
            for(var track in data){
                console.log(data[track]['track_id']);
                DZ.player.addToQueue(data);
            }
        }, "json");
        $.get("/API/getAdded", function(data){

                DZ.player.changeTrackOrder(data);

        }, "json");

    });




});

