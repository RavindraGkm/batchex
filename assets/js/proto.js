function CustomJS() {
    this.main_url = "hello"
}

CustomJS.prototype = {
    initialization: function() {
        var self = this;
        console.log(self.main_url);
        $("#user_name").keyup(function() {
            $("#user_name_copy").val($(this).val());
        });
        $("#dir_list").change(function() {
            console.log($(this).val());
        });
        $(".languages").change(function() {
            if($(this).is(":checked")) {
                console.log($(this).attr('data-name')+ " checked");
            }
            else {
                console.log($(this).attr('data-name')+ " unchecked");
            }
        });
        for(var i=1;i<=10;i++) {
            var $template = $(".check-lists .template").clone();
            $template.find("input").attr('data-name',i).addClass('languages');
            $template.find("label").html("&nbsp;"+i+"&nbsp;");
            $template.removeClass('template').addClass('added');
            $(".check-lists").append($template);
        }
        $(".languages").change(function() {
            $(".languages").each(function(i,d) {
                if($(this).is(":checked")) {
                    console.log($(this).attr('data-name')+ " checked");
                }
                else {
                    console.log($(this).attr('data-name')+ " unchecked");
                }
            });
        });
    },
    callAtCenter: function() {

    }
}
var object = new CustomJS();