$(function(){
    $("#submit").submit(function(){
        var form_data = $("#submit").serialize();
        $.get("/index/SysAdd",form_data,function(data) {
            data=eval( "(" + data + ")" );
            alert(data.message);
        });
        return false;
    });
});
