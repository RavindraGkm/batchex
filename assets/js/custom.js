$(document).ready(function() {
    var array_name = ['hello','hi','as','re','we','et','ce','re'];
    for(var x=0;x<8;x++) {
        $("#main_content").append("<p class='pre'>"+array_name[x]+"</p>");
        $("#main_content").find("p").addClass('para');
    }
    var i=0;
    $("#set_content").click(function () {
        $("#main_content").append("<p class='pre'>Hello</p>");
        $("#main_content").find("p").addClass('para');
    });
    $("#flush_content").click(function () {
        $("#main_content").html("");
    });
    $("#change_color").click(function () {
        $("#main_content").find("p").eq(i).removeClass('para');
        i++;
    });
});