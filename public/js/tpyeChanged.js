$(document).ready(function(){
    $("#Book").hide();
    $("#Furniture").hide();
    $("#type").change(function(){
        var type = $("select option:selected").text()
        if (type == 'DVD')
        {
            $("#create").attr('action', "/ItemController/saveDVD");
            $("#DVD").show();
            $("#Book").hide();
            $("#Furniture").hide();
            $("#DVD").find("input").prop("required", true);
            $("#Book").find("input").prop("required", false);
            $("#Furniture").find("input").prop("required", false);
        }
        if (type == 'Book')
        {
            $("#create").attr('action', "/ItemController/saveBook");
            $("#DVD").hide();
            $("#Book").show();
            $("#Furniture").hide();
            $("#DVD").find("input").prop("required", false);
            $("#Book").find("input").prop("required", true);
            $("#Furniture").find("input").prop("required", false);
        }
        if (type == 'Furniture')
        {
            $("#create").attr('action', "/ItemController/saveFurniture");
            $("#DVD").hide();
            $("#Book").hide();
            $("#Furniture").show();
            $("#DVD").find("input").prop("required", false);
            $("#Book").find("input").prop("required", false);
            $("#Furniture").find("input").prop("required", true);
        }
    });
});