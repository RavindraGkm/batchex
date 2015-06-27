( function ( $ ) {

    $.fn.greenify = function(options) {
        var var_name = this;

        ////var settings = $.extend({
        ////    color:'#F00',
        ////    fsize:15
        ////},options);
        //
        //var_name.css('color',settings.color);
        //var_name.css('font-size',settings.fsize);
        var_name.addClass('abc');
        return this;
    }

} ( jQuery ) );


//(function ( $ ) {
//
//    $.fn.greenify = function( options ) {
//
//        // This is the easiest way to have default options.
//        var settings = $.extend({
//            // These are the defaults.
//            color: "#4f87f8",
//            backgroundColor: "white"
//        }, options );
//
//        // Greenify the collection based on the settings variable.
//        return this.css({
//            color: settings.color,
//            backgroundColor: settings.backgroundColor
//        });
//
//    };
//
//}( jQuery ));



//( function ( $ )  {
//
//    $.fn.gritter_add = function(options) {
//
//        var settings = $.extend( { message:"",messageType:"Success",timeAlive:4000},options);
//
//        var gritter_wrapper = "<div class='notification-container'></div>";
//
//        // checks for container existing
//        if($(".notification-container").length==0) {
//            $('body').append(gritter_wrapper);
//        }
//        if($(".notification-container").length>0) {
//            var count = $(".notification-container").children().length;
//            count++;
//            var gritter_instance="<div class='notification animated bounceIn' id='gritter_item_"+count+"'><div class='font-check'><i class='fa fa-check-circle'></i></div><div class='message'><p>"+settings.message+"</p></div></div>";
//            $(".notification-container").append(gritter_instance);
//            setTimeout(function(){
//                $.gritter_remove($("#gritter_item_"+count));
//            },settings.timeAlive);
//        }
//    }
//
//    $.gritter_remove = function($gritter_instance) {
//        $gritter_instance.addClass("bounceOut");
//        setTimeout(function(){
//            $gritter_instance.remove();
//        },600);
//    }
//
//} ( jQuery ) );