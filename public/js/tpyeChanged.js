$(document).ready(function(){
    $("#Book").hide();
    $("#Furniture").hide();
    $("#type").change(function(){
        var type = $("select option:selected").text()
        if (type == 'DVD')
        {
            $("#create").attr('action', "/AddController/saveDVD");
            $("#DVD").show();
            $("#Book").hide();
            $("#Furniture").hide();
        }
        if (type == 'Book')
        {
            $("#create").attr('action', "/AddController/saveBook");
            $("#DVD").hide();
            $("#Book").show();
            $("#Furniture").hide();
        }
        if (type == 'Furniture')
        {
            $("#create").attr('action', "/AddController/saveFurniture");
            $("#DVD").hide();
            $("#Book").hide();
            $("#Furniture").show();
        }
    });
});