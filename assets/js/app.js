$(document).ready(function(){
   $("#searchDeeze").keyup(function(){
      $("#send").attr("disabled","disabled");

      $.post( "/API/search", { data: $(this).val() }, function( data ) {
         $(".autoload ul").html('');
         for(var key in data){
            if(data.hasOwnProperty(key)){
               $(".autoload ul").append("<li id='"+data[key]['id']+"' class='suggest'>"+data[key]['title'] + " - "+ data[key]['artist']['name'] +"</li>");
            }
         }
      }, "json");
   });

   $(".autoload").on("click", "li", function(event){
      var id = $(this).attr("id");
      var text = $(this).text();
      $("#searchDeeze").val(text);
      $(".autoload ul").html('');
      $("input[name=track_id]").val(id);
      $("#send").removeAttr("disabled");

   });


});
