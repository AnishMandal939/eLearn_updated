$(document).ready(function(){

    $(function(){
        $("#playlist").on("click", function(){
            $("#videoarea").attr({
                arc:$(this).attr("movieurl"),
            });
        });
        $("#videoarea").attr({
            src:$("#playlist li").eq(0).attr("movieurl")
        })
    });


});